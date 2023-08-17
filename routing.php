<?php
    class Router{
        public $pages = array();

        function addRoute($url,$path){
            $this->pages[$url] = $path;
        }
        function route($url){
            $path = $this->pages[$url];
            $file_dir = ''.$path;
            if($path ==''){
                require "404.php";
                die();
            }
            if(file_exists($file_dir)){
                require $file_dir;
                die();
            }else{
                require "404.php";
                die();
            }
        }
    }