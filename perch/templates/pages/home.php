<?php 
  perch_layout('global/header', [
    'body-class' => 'home',
    'title' => $year,
    'next-event' => 'true',
    'nav'		=> 'event'
  ]); 

  perch_layout('2018/noevent');

  perch_layout('global/footer');
 ?>