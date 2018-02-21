<section class="b-container p-section p-home__blog" id="updates">

	<div class="b-container">
		<h2 class="t-s p-section__title is-purple has-bottom-margin"><a href="/blog">Updates</a></h2>

	<?php 
		perch_collection('Articles', [
	      'count'     => 4,
	      'filter'    => 'date',
	      'match'     => 'lte',
	      'value'     => Date('Y-m-d'),
	      'template'  => 'blog/grid.html',
	      'sort'      => 'date',
	      'sort-order' => DESC
	  ]);
	 ?>

	 </div>

 </section>