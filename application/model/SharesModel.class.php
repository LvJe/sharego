<?php
    class SharesModel extends Model{
        public function create(array $arr){
            $this->_prepareExecute(
                "INSERT INTO ".$this->table." (title,tags, user_id,user_name,last_user_name,content,created_at,updated_at,valid) "
                ."VALUES ( :title,:tags,:user_id,:user_name,:last_user_name,:content,now(),now(),1) ",
                [
                    ':title'=>$arr['title'],
                    ':tags'=>$arr['tags'],
                    ':user_id'=> $arr['user_id'],
                    ':user_name'=> $arr['user_name'],
                    ':last_user_name'=> $arr['last_user_name'],
                    ':content'=> $arr['content']
                ]);
            return $this->_lastInsertId();
        }
    }
?>