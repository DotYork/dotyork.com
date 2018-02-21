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


<?php perch_layout('partials/blog'); ?>


<section id="location" class="p-home__location">
	<div class="b-half js-equalHeight">
		<div class="b-half__inner">
			<?php perch_content('Location'); ?>
		</div>
	</div>

	<div class="p-home__location__image js-equalHeight"></div>
</section>

