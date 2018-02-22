<?php 
	perch_layout('global/header', [
      'body-class' => 'videos',
      'title' => "Videos of Talks from Dot York",
      'nav'    => 'event'
    ]);
    ?>

    <div class="p-section is-top-section">
	    <div class="b-container">
	      <h1 class="t-s p-section__title is-center">Dot York Videos</h1>

			<?php 
				perch_collection('Talks', [
				  'sort'        => 'pub_date',
				  'sort-order'  => 'DESC',
				  'template'    => 'talks/video-grid.html',
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
	</div>

<?php

	perch_layout('global/footer', [
		'next-event' => 'true',
	]);