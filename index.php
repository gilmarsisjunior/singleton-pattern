<?php 

class Post {

    private static $instance = null;
    
    private function __construct(){
        //Torna impossível a criação direta de uma instancia de Post;
    }

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Post();
        }
        return self::$instance;

    }
    public static function testSingletonPattern($comment){
        echo $comment;
    }
}

$singletonInstance = Post::getInstance();
$singletonInstance::testSingletonPattern('The singleton Pattern Works fine!')
?>