<?php 


  //	Is there a next event?

  $title = perch_collection('Events', [
      'count'     => 1,
      'filter' => array(
					array(
						'filter' => 'date',
						'match' => 'gt',
						'value' => Date('Y-m-d'),
					),
					array(
						'filter' => 'hide_details',
						'match' => 'neq',
						'value' => 'true',
					),
				),
      'template'  => 'title.html'
  ], true);

  if ($title) {
     perch_layout('global/header', [
      'body-class' => 'speakers',
      'title' => "Speakers | " . $title,
      'nav'    => 'event'
    ]);

    perch_content('Banner (current conf)');

    perch_layout('conf/speakers', [
      'body-class' => 'speakers'
    ]);

  } else {

    perch_layout('global/header', [
      'body-class' => 'speakers',
      'title' => "Previous Dot York Speakers"
    ]);?>

    <div class="p-banner is-purple">
      <div class="b-container">
        <h1 class="p-banner__title js-altFont">Previous DotYork Speakers</h1>
      </div>
    </div>

<?php
    echo '<section id="speakers" class="p-section is-green">';
      perch_layout('archive/speakers', [
        'body-class' => 'speakers'
      ]);
    echo '</section>';
  }
  

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
?>