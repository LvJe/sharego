<?php
    class UsersModel extends Model{
        public function create(array $arr){
            $this->_prepareExecute(
                "INSERT INTO ".$this->table." (username,salt, password,created_at,updated_at,valid) "
                ."VALUES ( :username,:salt,:password,now(),now(),1) ",
                [
                    ':username'=>$arr['username'],
                    ':salt'=>$arr['salt'],
                    ':password'=> $arr['password']
                ]);
            return $this->_lastInsertId();
        }
    }
?>