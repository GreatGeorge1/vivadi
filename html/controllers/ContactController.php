<?php
class ContactController
{
  //public $page='about';

  public function actionIndex()
  {
    //$page=$this->page;
    //require_once(ROOT.'/template/header.php');
    //має свій хедер та футер
    require_once(ROOT.'/views/contacts.php');
    //require_once(ROOT.'/template/footer.php');

    return true;
  }
}
