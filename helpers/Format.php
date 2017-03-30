<?php
// Format Class

class Format{
    public function formatDate($date){
        return date ('F j, Y,g:i a',strtotime($date));
    }

    public function textShorten($text,$limit = 400){
        $text=$text."";
        $text= substr($text,0,$limit);
        $text = $text."......";
        return $text;
    }
}
?>