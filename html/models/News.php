<?php



class News
{
  /*
  @param integer $id
  */
  public static function getNewsItemById($id)
  {
    //Запит до БД
    $db=Db::getConnection();

    $result=$db->query('select * from news where id='.$id);
    $result->setFetchMode(PDO::FETCH_ASSOC);

    $newsItem=$result->fetch();
    return $newsItem;
  }
  public static function getNewsList()
  {
    //Запит до БД
    $db=Db::getConnection();
    $newsList=array();
    $result =$db->query('select id, name, short from news;'
      );

    $i=0;
    while($row=$result->fetch()){
      $newsList[$i]['id']=$row['id'];
      $newsList[$i]['name']=$row['name'];
      $newsList[$i]['short']=$row['short'];
      $i++;
    }
    return $newsList;
  }
}


?>
