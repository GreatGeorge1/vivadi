<?php
class AboutController
{
  //public $page='about';

  public function actionIndex()
  {
    //$page=$this->page;
    //require_once(ROOT.'/template/header.php');
    //має свій хедер
    require_once(ROOT.'/views/about.php');
    require_once(ROOT.'/template/footer.php');

    return true;
  }
}
