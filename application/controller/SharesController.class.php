<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-18
 * Time: 15:46
 */
class SharesController extends Controller
{
    public function index(){
        if(!Authority::CheckLogin()) redirect('/login');

        return 'share';
    }
    public function detail(){
        $id=intval($this->input_get('id'));
        $shareModel=new SharesModel();
        $share=$shareModel->queryFirstBy('id',$id);
        $this->assign('share',$share);
        return 'share_detail';
    }
    //发布新的分享
    //TODO 考虑用事务容错
    public function store(){
        //权鉴
        Authority::TestRefer();
        Authority::TestLogin();
        Authority::TestCSRF();

        $share=$this->input_post();
        $title=$share['title'];
        $content=$share['content'];
        $tags=explode('|',$share['tags']);

        $tagsCount=count($tags);
        for($i=0;$i<$tagsCount;$i++){
            //TODO 做更多处理
            $tags[$i]=trim($tags[$i]);
            if(empty($tags[$i])){
                unset($tags[$i]);
            }
        }
        $tags=array_unique($tags);//去掉提交的相同标签
        $tags_str=implode('|',$tags);

        $user_id=Authority::GetUser()['id'];

        try{
            $con=DB::getConnection();
            $con->beginTransaction();

            //创建share
            $shareModel=new SharesModel();
            $shareArr=compact('title','content','user_id');
            $shareArr['tags']=$tags_str;
            $share_id=$shareModel->create($shareArr);

            //创建新的tags
            $tagsModel=new TagsModel();
            $tagsExistArr=$tagsModel->queryTagsIn($tags);
            $tagsExist=array_column($tagsExistArr,'tag');
            $newTags=array_diff($tags,$tagsExist);

            //TODO 优化批量创建tag
            $tags_id=$tagsExist=array_column($tagsExistArr,'id');;
            foreach($newTags as $tag){
                $tag_id=$tagsModel->create_c(['tag'=>$tag]);
                $tags_id[]=$tag_id;
            }

            //已经优化 批量创建share_tag关系
            $share_tags=array();
            foreach($tags_id as $tag_id){
                $share_tags[]=[
                    'share_id'=>$share_id,
                    'tag_id'=>$tag_id
                ];
            }
            $share_tagModel=new Share_TagModel();
            $share_tagModel->create($share_tags,true);
            $con->commit();
        }catch (Exception $e){
            $con->rollBack();
            throw $e;
        }

        redirect('/home');
    }

    //对传入的tags做处理，先以字符串的形式传入简单处理一下，将来会更改传入的tags类型的
    public function tags_deal(){
        $t=new Share_TagModel();
        $t->create(['share_id'=>2,'tag_id'=>2]);
    }
}