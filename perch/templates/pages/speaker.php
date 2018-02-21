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

  //echo '<div class="p-event-archive">';
  	
  	//	About

	  perch_collection('Speakers', [
	      'filter'      => 'slug',
	      'match'       => 'eq',
	      'value'       => perch_get("slug"),
	      'template'    => 'speakers/about.html'
	  ]);

	//	Talk

	  perch_collection('Speakers', [
	      'filter'      => 'slug',
	      'match'       => 'eq',
	      'value'       => perch_get("slug"),
	      'template'    => 'speakers/talk.html'
	  ]);


	//	Tickets

		  $title = perch_collection('Speakers', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'speakers/strip-talk.html'
		  ], true);

		  if ($title) {
		  	//	If event has happened AND a talk exists, show related

			  // perch_collection('Speakers', [
			  //     'template'    => 'speakers/related.html',
			  //     'filter'=>[
				 //        [
					// 		'filter'      => 'slug',
					// 		'match'       => 'eq',
					// 		'value'       => perch_get("slug"),
				 //        ],
				 //        [
					// 		'filter'    => 'event.date',
					// 		'match'     => 'lte',
					// 		'value'     => Date('Y-m-d'),
				 //        ],
				 //    ],
			  // ]);

			  //	Otherwise show a buy tickets box

			  	perch_collection('Speakers', [
				      'template'    => 'speakers/tickets.html',
				      'filter'=>[
				        [
							'filter'      => 'slug',
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

			  	//	If there is a discount code, add it and apply it to button link	
		  }
	  
  //echo '</div>';

	//	Talk 2

	  perch_collection('Speakers', [
	      'filter'      => 'slug',
	      'match'       => 'eq',
	      'value'       => perch_get("slug"),
	      'template'    => 'speakers/talk2.html'
	  ]);

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);