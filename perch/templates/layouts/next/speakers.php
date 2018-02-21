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


  
  echo '<div class="p-page__header">';
    echo '<h1 class="t-xl">Speakers</h1>';
    perch_collection('Events', [
      'filter'      => 'date',
      'match'       => 'eqbetween',
      'value'       => $year_from . ' ,' . $year_to,
      'template'    => 'events/title_date.html'
    ]);
  echo '</div>';

  ?>

  <section class="p-page__list">
    <div id="speakers" class="p-speakers p-section is-green">
        <div class="b-container">
          <?php 
            PerchSystem::set_var('show-talk', 'true');
            perch_collection('Speakers', [
                'filter' => 'event.slug',
                'match' => 'eq',
                'value'=> $slug,
                'template'    => 'speakers/grid.html'
            ]);
           ?> 
        </div>
      </div>
  </section>



  <?php

  perch_collection('Events', [
    'filter'      => 'date',
    'match'       => 'eqbetween',
    'value'       => $year_from . ' ,' . $year_to,
    'template'    => 'collections/events_sponsors.html'
  ]);

 ?>