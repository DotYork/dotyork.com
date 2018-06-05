<section class="b-container p-section p-home__blog" id="updates">

	<div class="b-container">
		

	<?php 
		if (perch_layout_has('category')) {
			$category = perch_layout_var('category', true);

			echo '<h2 class="t-s p-section__title is-purple has-bottom-margin"><a href="/blog/'. $category.'">Updates</a></h2>';

			perch_collection('Articles', [
					'count'     => 4,
					'filter'      =>  array(
						array(
							'filter'      => 'date',
							'match'       => 'lte',
							'value'       => Date('Y-m-d'),
						),
						array(
							'filter'      => 'category',
							'match'       => 'eq',
							'value'       => $category,
						),
					),
					'template'  => 'blog/grid.html',
					'sort'      => 'date',
					'sort-order' => DESC
			]);
		} else {
			echo '<h2 class="t-s p-section__title is-purple has-bottom-margin"><a href="/blog">Blog</a></h2>';

			perch_collection('Articles', [
					'count'     => 4,
					'filter'    => 'date',
					'match'     => 'lte',
					'value'     => Date('Y-m-d'),
					'template'  => 'blog/grid.html',
					'sort'      => 'date',
					'sort-order' => DESC
			]);
		}

		
	 ?>

	 </div>

 </section>