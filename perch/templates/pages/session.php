<?php 
  $year = date('Y');
  $year_from = $year . "-01-01";
  $year_to   = $year . "-12-30";
  
  $title = perch_collection('Sessions', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'sessions/title.html'
		  ], true);

  perch_layout('global/header', [
    'body-class' => 'session',
    'title' => $title . " | Dot York",
    'meta' => 'speaker',
    'nav'   => 'event'
  ]);  

  
  perch_layout('2017/session');

  perch_collection('Events', [
    'filter'      => 'date',
    'match'       => 'eqbetween',
    'value'       => $year_from . ' ,' . $year_to,
    'template'    => 'collections/events_sponsors.html'
  ]);
 

  perch_layout('global/footer');
 ?>