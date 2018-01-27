<?php

include_once ROOT.'/models/News.php';

class NewsController
{
  public $page='news';
  public function actionIndex()
  {
    $newsList=array();
    $newsList=News::getNewsList();

    $page=$this->page;//задає активну сторінку у хедері
    require_once(ROOT.'/template/header.php');
    require_once(ROOT.'/views/news/index.php');
    require_once(ROOT.'/template/footer.php');
    return true;
  }

  public function actionView($id)
  {
    if($id){
      $newsList=[News::getNewsItemById($id)];

      $page=$this->page;//задає активну сторінку у хедері
      require_once(ROOT.'/template/header.php');
      require_once(ROOT.'/views/news/index.php');
      require_once(ROOT.'/template/footer.php');
    }

    return true;
  }
}
?>
