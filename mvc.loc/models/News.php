<?php
require_once ROOT.'/components/Router.php';
class News
{
public static function getNewsById($id)
{
    $id = intval($id);
    if ($id) {
        $con = db::getConnection();
        $result = $con->query("SELECT * FROM test1.publication  WHERE id=" . $id);
        echo '<pre>';
        print_r($result);
        //$result->setFetchMode(PDO::FETCH_NUM);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $result->fetch();
        return $newsItem;
    }
}

        public static function getNewsList(){
         $newsList = [];
            $con = db::getConnection();

         $result = $con->query('SELECT id,title,date_publication,short_content FROM test1.publication ORDER BY date_publication DESC LIMIT 10;');
         echo '<pre>';
         $i = 0;
         while($row = $result->fetch()){
             $newsList[$i]['id'] = $row['id'];
             $newsList[$i]['title'] = $row['title'];
             $newsList[$i]['date_publication'] = $row['date_publication'];
             $newsList[$i]['short_content'] = $row['short_content'];
             $i++;
         }
         return $newsList;
        }

}