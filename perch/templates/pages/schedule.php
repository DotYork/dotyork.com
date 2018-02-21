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
    'title' => $title . " Schedule",
    'meta' => 'archive',
    'nav'   => 'event'
  ]); 

  
  echo '<div class="p-page__header">';
    echo '<h1 class="t-xl">Schedule</h1>';
    perch_collection('Events', [
      'filter'      => 'date',
      'match'       => 'eqbetween',
      'value'       => $year_from . ' ,' . $year_to,
      'template'    => 'events/title_date.html'
    ]);
  echo '</div>';

  echo '<div>';
    echo '<section class="b-main p-schedule">';
      perch_content('Schedule');
    echo '</section>';

    echo '<aside class="b-aside">';
      perch_content('Location');

      perch_content('Evening');
    echo '</aside>';
  echo '</div>';

  echo '<section class="p-section is-blue p-schedule__tickets">';
    perch_content_custom('Tickets',[
          'page' => '/'
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