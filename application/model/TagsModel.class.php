<?php
    class TagsModel extends Model{
        public function queryTagsIn($tags){
            if(!is_array($tags)) throw new JException('param error.');
            $tags_str='';
            foreach($tags as $tag){
                $tags_str.='"'.$tag.'",';
            }
            //-je study
            $tags_str=rtrim($tags_str, ",");
            return $this->_query('SELECT id,tag FROM '.$this->table.' WHERE tag IN ('.$tags_str.')');
        }
    }
?>