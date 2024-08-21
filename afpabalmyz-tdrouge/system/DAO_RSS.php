<?php

class DAO_Rss implements DAO {

    function requete($rss){

        $content = file_get_contents($rss);
        $content = str_replace("media:content","mediaContent",$content);
        $x = simplexml_load_string($content, null, LIBXML_NOCDATA);
        

        return $x;

    }

}