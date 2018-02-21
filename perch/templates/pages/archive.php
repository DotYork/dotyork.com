<?php 
  $year = perch_get('year', true);
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

  //  Global Header with next event visible
  perch_layout('global/header', [
    'body-class' => 'archive',
    'title' => $title,
    'meta' => 'archive'
  ]); 

  echo '<div class="p-event-archive">';

      //  Event Heading taken from Events collection
      perch_collection('Events', [
          'count'     => 1,
          'filter'    => 'date',
          'match'     => 'eqbetween',
          'value'     => $year_from . ' ,' . $year_to,
          'template'  => 'collections/events_header.html'
      ]);
      	
      //	Speakers listed alphabetically, linking to /speakers/speaker-name

      ?>
      <section id="speakers" class="p-speakers p-section is-green">
        <div class="b-container">
          <h2 class="t-s p-section__title is-center is-white">Speakers</h2>
      <?php
      PerchSystem::set_var('show-talk', 'true');
      perch_collection('Speakers', [
          'filter'      => 'event.date',
          'match'       => 'eqbetween',
          'value'       => $year_from . ' ,' . $year_to,
          'sort'        => 'last_name',
          'sort-order'  => 'ASC',
          'template'    => 'speakers/grid.html'
      ]);

      ?>
    </div>
  </section>

      <?php

      //	Sponsors
      perch_collection('Events', [
          'filter'      => 'date',
          'match'       => 'eqbetween',
          'value'       => $year_from . ' ,' . $year_to,
          'template'    => 'collections/events_sponsors.html'
      ]);

  echo '</div>';

  //	Global Footer with next event visible
  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>