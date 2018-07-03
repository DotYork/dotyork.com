<?php 
  perch_layout('global/header', [
    'body-class' => 'about',
    'title' => '',
  ]); 

	perch_content('Content');

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>