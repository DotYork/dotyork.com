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
?>
  
  <div class="p-banner is-purple">
    <div class="b-container">
      <h1 class="p-banner__title">Se<span class="t-alt-font">s</span>sio<span class="t-alt-font">n</span>s</h1>
      <p class="p-banner__subtitle is-yellow">At <a href="<?php echo $slug ?>"><?php echo $title; ?></a></p>
    </div>
  </div>
<?php
  echo '<section class="p-page__list">';
      perch_collection('Sessions', [
          'filter' => 'event.slug',
          'match' => 'eq',
          'value'=> $slug,
          'template'    => 'sessions/sessions.html'
      ]);
  echo '</section>';

  perch_layout('partials/newsletter');

  perch_layout('partials/partners', [
    'partners' => 'all'
  ]);
 

  perch_layout('global/footer');
 ?>