<?php 
  $year = date('Y');
  $year_from = $year . "-01-01";
  $year_to   = $year . "-12-30";


  //  Meta for the archive page (title & description)
  $title = perch_collection('Events', [
          'count'     => 1,
          'filter'    => 'date',
          'match'     => 'eqbetween',
          'value'     => $year_from . ' ,' . $year_to,
          'template'  => 'title.html'
      ], true);

  $slug = perch_collection('Events', [
          'count'     => 1,
          'filter'    => 'date',
          'match'     => 'eqbetween',
          'value'     => $year_from . ' ,' . $year_to,
          'template'  => 'slug.html'
      ], true);

  //  Global Header with next event visible
  perch_layout('global/header', [
    'body-class' => 'session',
    'title' => "Sessions at " . $title,
    'meta' => 'archive',
    'nav'   => 'event'
  ]); 

  
  echo '<div class="p-page__header">';
    echo '<h1 class="t-xl">Sessions</h1>';
    perch_collection('Events', [
      'filter'      => 'date',
      'match'       => 'eqbetween',
      'value'       => $year_from . ' ,' . $year_to,
      'template'    => 'events/title_date.html'
    ]);
  echo '</div>';

  echo '<section class="p-page__list">';
      perch_collection('Sessions', [
          'filter' => 'event.slug',
          'match' => 'eq',
          'value'=> $slug,
          'template'    => 'sessions/sessions.html'
      ]);
  echo '</section>';

  perch_collection('Events', [
    'filter'      => 'date',
    'match'       => 'eqbetween',
    'value'       => $year_from . ' ,' . $year_to,
    'template'    => 'collections/events_sponsors.html'
  ]);
 

  perch_layout('global/footer');
 ?>