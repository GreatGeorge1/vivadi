<?php
return array(
  'news/([0-9]+)' => 'news/view/$1',//actionView y NewsController
  'news' => 'news/index',//actionIndex у NewsController
  'products' => 'product/list',
  'category'=>'category/index',
  'about'=>'about/index',
  'contacts'=>'contact/index',
  '' => 'main/index'
);

?>
