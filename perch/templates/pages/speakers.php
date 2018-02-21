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

  	perch_layout('next/speakers', [
	    'body-class' => 'speakers'
	  ]);
  } else {
    perch_layout('global/header', [
      'body-class' => 'speakers',
      'title' => "Previous Dot York Speakers"
    ]);

  	perch_layout('archive/speakers', [
	    'body-class' => 'speakers'
	  ]);
  }

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
?>