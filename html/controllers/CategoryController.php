<?php
class CategoryController
{
  public $page='category';

  public function actionIndex()
  {
    $page=$this->page;
    require_once(ROOT.'/template/header.php');
    require_once(ROOT.'/views/category.php');
    require_once(ROOT.'/template/footer.php');
    
    return true;
  }
}
