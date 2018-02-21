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
 ?>

<div class="p-page__header">
	<h1 class="t-xl"><?php echo $title ?></h1>
</div>


<div>
	<section id="about" class="b-half p-home__about js-equalHeight">
		<div class="b-half__inner">
			<?php  
				perch_collection('Sessions', [
			      'filter'      => 'slug',
			      'match'       => 'eq',
			      'value'       => perch_get("slug"),
			      'template'    => 'sessions/about.html'
			  ]);
			?>
		</div>
	</section>

	<section id="tickets" class="b-half p-home__tickets js-equalHeight">
		<div class="b-half__inner">
			<?php 
				perch_content_custom('Tickets',[
					'page' => '/'
				]); 
			?>
		</div>
	</section>
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
		            'value'=> 'dot-york-2017',
		        ],
		    ],
          
          'template'    => 'sessions/session-list.html'
      ]);
 ?>