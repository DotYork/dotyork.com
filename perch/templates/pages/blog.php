<?php 

  perch_layout('global/header', [
    'body-class' => 'blog',
    'title' => 'Dot York Updates',
  ]); 
  ?>
  <div class="p-section is-top-section">
    <div class="b-container">

  <?php

  $category = perch_get('category', true);

  if (($category == '1') || ($category != 'all')) {
    
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
      $category_title = $category .' News';
    } else if ($category == 'interviews') {
      $category_title = 'Interviews';
    } else {
      $category_title = $category .' Updates';
    }

    echo '<h1 class="t-s p-section__title is-center is-purple">'.$category_title.' <a href="/blog/all" class="p-section__title__all">view all</a></h1>';
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
    echo '<h1 class="t-s p-section__title is-center is-purple">News &amp; Updates</h1>';
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