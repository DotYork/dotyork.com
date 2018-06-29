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
?>

  <div class="p-banner is-purple">
		<div class="b-container">
			<h1 class="p-banner__title">Sc<span class="t-alt-font">h</span>ed<span class="t-alt-font">u</span>le</h1>
			<p class="p-banner__subtitle is-yellow">
        <?php
          perch_collection('Events', [
            'filter'      => 'date',
            'match'       => 'eqbetween',
            'value'       => $year_from . ' ,' . $year_to,
            'template'    => 'events/title_date.html'
          ]);
        ?>
      </p>
		</div>
  </div>

<?php
  

  echo '<div class="b-container p-page">';
    echo '<section class="p-schedule">';
      perch_content('Schedule');
    echo '</section>';

    // echo '<aside class="b-aside">';
    //   perch_content('Location');

    //   perch_content('Evening');
    // echo '</aside>';
  echo '</div>';

  perch_layout('partials/newsletter');

  perch_layout('partials/partners', [
    'partners' => 'all'
  ]);
 

  perch_layout('global/footer');
 ?>