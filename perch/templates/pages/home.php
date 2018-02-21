<?php 
  perch_layout('global/header', [
    'body-class' => 'home',
    'title' => $year,
    'next-event' => 'true',
    'nav'		=> 'event'
  ]); 

  //perch_layout('2017/home');
  perch_layout('2017/noevent');

  perch_layout('global/footer');
 ?>