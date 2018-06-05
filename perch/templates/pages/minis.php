<?php 
  $slug = perch_get('slug', true);


  //  Meta for the archive page (title & description)
  $title = perch_collection('Minis', [
          'count'     => 1,
          'filter'    => 'slug',
          'match'     => 'eq',
          'value'     => $slug,
          'template'  => 'title.html'
      ], true);

  //  Global Header with next event visible
  perch_layout('global/header', [
    'body-class' => 'event',
    'title' => $title,
    'meta' => 'mini',
    'landing' => 'is-landing'
  ]); 

  echo '<div class="p-event-archive">';

      //  Event Heading taken from Minis collection
      perch_collection('Minis', [
          'count'     => 1,
          'filter'    => 'slug',
          'match'     => 'eq',
          'value'     => $slug,
          'template'  => 'events/mini-header.html'
      ]);
      	
      //	Speakers listed alphabetically, linking to /speakers/speaker-name

      ?>
      <section id="speakers" class="p-speakers p-section is-green">
        <div class="b-container">
          <h2 class="t-s p-section__title is-center is-white">Speakers</h2>
      <?php
      PerchSystem::set_var('show-talk', 'true');  //  adds the talk title
      perch_collection('Talks', [
          'filter'    => 'mini.slug',
          'match'     => 'eq',
          'value'     => $slug,
          'sort'        => 'speaker.last_name',
          'sort-order'  => 'ASC',
          'template'    => 'talks/speaker-grid.html'
      ]);
      ?>
    </div>
  </section>
<?php
  echo '</div>';

  echo '<section class="p-section p-partners">';
    echo '<div class="b-container">';
      echo '<h2 class="t-s is-purple is-center p-section__title">Supported by</h2>';

      perch_collection('Minis', [
        'filter'      => 'slug',
        'match'     => 'eq',
        'value'     => $slug,
        'template'    => 'collections/events_sponsors.html'
      ]);

    echo '</div>';
  echo '</section>';

  perch_layout('partials/newsletter');

  //	Global Footer with next event visible
  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>