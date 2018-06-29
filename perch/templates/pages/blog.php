<?php 

  perch_layout('global/header', [
    'body-class' => 'blog',
    'title' => 'Dot York Updates',
  ]); 

  $category = perch_get('category', true);

  if (($category == '1')) {
    
    $title = perch_collection('Events', [
      'count'     => 1,
      'filter' => array(
					array(
						'filter' => 'date',
						'match' => 'gt',
						'value' => Date('Y-m-d'),
					),
					array(
						'filter' => 'hide_details',
						'match' => 'neq',
						'value' => 'true',
					),
				),
      'template'  => 'title.html'
    ], true);

    if ($title) {
      $category = Date('Y');
    } else {
      $category == 'all';
    }
  }

  
  


  if (($category != 'all')) {

    if ($category == 'dotyork' || $category == 'york') { 
      if ($category == 'dotyork') {
        $category_title = 'DotYork News';
      } else if ($category == 'york') {
        $category_title = 'York News';
      }
    } else if ($category == 'interviews') {
      $category_title = 'Interviews';
    } else {
      $category_title = $category .' Updates';
    }
  ?>

  <div class="p-banner is-purple">
		<div class="b-container">
			<h1 class="p-banner__title js-altFont"><?php echo $category_title; ?></h1>
			<p class="p-banner__subtitle is-yellow"><a href="/blog/all" class="p-section__title__all">View All Articles</a></p>
		</div>
  </div>
  
  <div class="b-container">

  <?php
    perch_collection('Articles', [
      'sort'        => 'date',
      'sort-order'  => 'DESC',
      'template'    => 'blog/grid.html',
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
                    )
    ]);

  } else {
  ?>

  <div class="p-banner is-purple">
		<div class="b-container">
			<h1 class="p-banner__title js-altFont">DotYork Blog</h1>
		</div>
	</div>

  <div class="b-container">
  <?php
    perch_collection('Articles', [
      'sort'        => 'date',
      'sort-order'  => 'DESC',
      'filter'      => 'date',
      'match'       => 'lte',
      'value'       => Date('Y-m-d'),
      'template'    => 'blog/grid.html'
    ]);
  }

  ?>
  </div>
  <?php

  perch_layout('partials/newsletter');

  if (preg_match("/\d{4}/", $category)) {
    perch_layout('partials/partners', [
      'partners'=> 'all'
    ]);
  } else {
    perch_layout('partials/partners');
  }

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);