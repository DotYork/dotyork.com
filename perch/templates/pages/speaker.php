<?php 

  $name = perch_collection('Speakers', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'speakers/name.html'
		  ], true);

  perch_layout('global/header', [
    'body-class' => 'speakers',
    'title' => $name . " | Dot York",
    'meta' => 'speaker',
		'nav'		=> 'event'
  ]); 

  	
  	//	About

	  perch_collection('Speakers', [
	      'filter'      => 'slug',
	      'match'       => 'eq',
	      'value'       => perch_get("slug"),
	      'template'    => 'speakers/about.html'
	  ]);

	//	Talk

	  perch_collection('Talks', [
	      'filter'      => 'speaker.slug',
	      'match'       => 'eq',
	      'value'       => perch_get("slug"),
	      'template'    => 'speakers/talk.html'
	  ]);


	//	Tickets

		  perch_collection('Talks', [
					'template'    => 'speakers/tickets.html',
					'filter'=>[
						[
					'filter'      => 'speaker.slug',
					'match'       => 'eq',
					'value'       => perch_get("slug"),
						],
						[
					'filter'    => 'event.date',
					'match'     => 'gt',
					'value'     => Date('Y-m-d'),
						],
				],
			]);
		
	perch_layout('partials/newsletter');

	$date = perch_collection('Talks', [
		'filter'      => 'speaker.slug',
		'match'       => 'eq',
		'value'       => perch_get("slug"),
		'template'    => 'speakers/date.html'
	], true);

	if ($date != NULL) {
		perch_layout('partials/partners', [
			'partners' => $date
		]);
	} else {
		perch_layout('partials/partners');
	}

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);