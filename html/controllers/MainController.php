<?php
// include_once ROOT.'/models/News.php';

class MainController
{
  public $page='main';
  public function actionIndex()
  {
    $page=$this->page;
    require_once(ROOT.'/template/header.php');
    require_once(ROOT.'/views/index.php');
    require_once(ROOT.'/template/footer.php');

    return true;
  }
}
?>
