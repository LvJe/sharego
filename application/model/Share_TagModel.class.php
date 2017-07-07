<?php
    class Share_TagModel extends Model{
        protected $table='share_tag';

        public function create($arr,$multi=false){
            if(!$multi){
                $insert_arr=[
                    ':share_id'=>$arr['share_id'],
                    ':tag_id'=>$arr['tag_id']
                ];
            }else{
                $insert_arr=array();
                foreach($arr as $v){
                    $insert_arr[]=[
                        ':share_id'=>$v['share_id'],
                        ':tag_id'=>$v['tag_id']
                    ];
                }
            }
            $this->_prepareExecute(
                "INSERT INTO ".$this->table." (share_id,tag_id) "
                ."VALUES ( :share_id,:tag_id) ",
                $insert_arr,$multi);
            //return $this->_lastInsertId();
        }

        public function create_c(array $arr)
        {
            throw new JException('Share_TagModel dose not support method create_c.');
        }
    }
?>