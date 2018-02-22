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
				  'filter'  	=> 'talk_video',
				  'match'      	=> 'neq',
				  'value'		=> '',
				  'sort'        => 'pub_date',
				  'sort-order'  => 'DESC',
				  'template'    => 'talks/video-grid.html'
				]);
			 ?>
		</div>
	</div>

<?php

	perch_layout('global/footer', [
		'next-event' => 'true',
	]);