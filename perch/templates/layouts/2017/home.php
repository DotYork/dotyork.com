<?php 
	$year = '2017';
	$year_from = $year . "-01-01";
	$year_to   = $year . "-12-30";
 ?>

<section id="top" class="p-home__hero js-fullHeight">
	<div class="b-container">
		<?php perch_content('Hero'); ?>
	</div>
</section>


<div>
	<section id="about" class="b-half p-home__about js-equalHeight">
		<div class="b-half__inner">
			<?php perch_content('About'); ?>
		</div>
	</section>

	<section id="tickets" class="b-half p-home__tickets js-equalHeight">
		<div class="b-half__inner">
			<?php perch_content('Tickets'); ?>
		</div>
	</section>
</div>

<?php 
	//	Speakers
	
	perch_collection('Speakers', [
          'filter'      => 'event.date',
          'match'       => 'eqbetween',
          'value'       => $year_from . ' ,' . $year_to,
          'sort'        => 'last_name',
          'sort-order'  => 'ASC',
          'template'    => 'collections/speaker_list.html'
      ]);


	//	Sessions
 
	perch_collection('Sessions', [
      'filter' => 'event.date',
      'match'       => 'eqbetween',
      'value'       => $year_from . ' ,' . $year_to,
      'template'    => 'sessions/sessions-home.html'
  ]);

	
 ?>

<section id="location" class="p-home__location">
	<div class="b-half js-equalHeight">
		<div class="b-half__inner">
			<?php perch_content('Location'); ?>
		</div>
	</div>

	<div class="p-home__location__image js-equalHeight"></div>
</section>

<?php 
	//	Partners
 
	perch_collection('Events', [
	  'filter'      => 'date',
	  'match'       => 'eqbetween',
	  'value'       => $year_from . ' ,' . $year_to,
	  'template'    => 'collections/events_sponsors.html'
	]);

 ?>
