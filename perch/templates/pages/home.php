<?php 
  perch_layout('global/header', [
    'body-class' => 'home',
    'title' => $year,
    'next-event' => 'true',
    'nav'		=> 'event',
    'background' => 'is-yellow'
  ]); 

  
  perch_layout('2018/event');

  // perch_layout('2018/noevent');

  perch_layout('global/footer');
 ?>