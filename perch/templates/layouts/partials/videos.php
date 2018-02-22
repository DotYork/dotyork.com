<section class="b-container p-section p-home__videos" id="videos">

	<div class="b-container">
		<h2 class="t-s p-section__title is-green"><a href="/videos">Videos</a></h2>

	<?php 
		perch_collection('Talks', [
	      'count'     => 4,
	      'template'  => 'talks/video-grid.html',
	      'sort'      => 'pub_date',
	      'sort-order' => RAND,
	      'filter'=> [
				[
					'filter'    => 'pub_date',
					'match'     => 'lte',
					'value'     => Date('Y-m-d'),
				],
				[
					'filter'  	=> 'talk_video',
					'match'      	=> 'neq',
					'value'		=> '',
				]
			]
	  ]);
	 ?>

	 </div>

 </section>