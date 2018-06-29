<?php 
	$title = perch_collection('Sessions', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'sessions/title.html'
		  ], true);

	$event = perch_collection('Sessions', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'sessions/event.html'
      ], true);
    
  $event_title = perch_collection('Events', [
        'filter'      => 'slug',
        'match'       => 'eq',
        'value'       => 'dotyork-2018',
        'template'    => 'title.html'
    ], true);
 ?>

<div class="p-banner is-purple">
  <div class="b-container">
    <h1 class="p-banner__title js-altFont"><?php echo $title ?></h1>
    <p class="p-banner__subtitle is-yellow">Part of <a href="<?php echo $event ?>"><?php echo $event_title; ?></a></p>
  </div>
</div>

<div class="b-container">
  <div class="p-page p-wysiwyg">
    <?php  
      perch_collection('Sessions', [
          'filter'      => 'slug',
          'match'       => 'eq',
          'value'       => perch_get("slug"),
          'template'    => 'sessions/about.html'
      ]);
    ?>
  </div>
</div>



<?php 

  perch_collection('Sessions', [
    'filter'      => 'slug',
    'match'       => 'eq',
    'value'       => perch_get("slug"),
    'template'    => 'sessions/speakers.html'
  ]);
	

	perch_collection('Sessions', [
		  'filter'=> [
		        [
					'filter'      => 'slug',
					'match'       => 'neq',
					'value'       => perch_get("slug"),
		        ],
		        [
		            'filter' => 'event.slug',
		            'match' => 'eq',
		            'value'=> 'dot-york-2018',
		        ],
		    ],
          
          'template'    => 'sessions/session-list.html'
      ]);
 ?>