<?php
include_once ROOT.'/models/News.php';
class NewsController{
public function actionView($id){
        if($id){
            echo $id;
            $news = News::getNewsById($id);
            echo '<pre>';
            print_r($news);
        }
return true;
    }
    public function actionIndex(){
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';
        return true;
    }
}


