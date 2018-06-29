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

  
  perch_layout('2018/session');

  perch_layout('partials/partners', [
    'partners' => 'all'
  ]);

  perch_layout('global/footer');