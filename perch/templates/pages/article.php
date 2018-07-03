<?php 
  $title = perch_collection('Articles', [
          'count'     => 1,
          'filter'    => 'slug',
          'match'     => 'eq',
          'value'     => perch_get('slug'),
          'template'  => 'title.html'
      ], true);

  perch_layout('global/header', [
    'body-class' => 'blog',
    'title' => $title . " | Dot York Blog",
    'meta' => 'article'
  ]); 

  if (perch_get('preview', true) == 'all') {
    perch_collection('Articles', [
      'filter'      => 'slug',
      'match'       => 'eq',
      'value'       => perch_get("slug"),
      'template'    => 'blog/article.html'
    ]);
  } else {

    if (perch_get('category', true) == 'draft') {
      perch_collection('Articles', [
        'sort'        => 'date',
        'sort-order'  => 'DESC',
        'filter'      => 'slug',
        'match'       => 'eq',
        'value'       => perch_get("slug"),
        'count'      => 1,
        'template'    => 'blog/article.html'
      ]);
    } else if (perch_get('category', true) == 'interviews') {
      perch_collection('Articles', [
        'sort'        => 'date',
        'sort-order'  => 'DESC',
        'filter'      =>  array(
          array(
            'filter'      => 'date',
            'match'       => 'lte',
            'value'       => Date('Y-m-d'),
          ),
          array(
            'filter'      => 'slug',
            'match'       => 'eq',
            'value'       => perch_get("slug"),
          )
        ),
        'count'      => 1,
        'template'    => 'blog/interview.html'
      ]);
    } else {
      perch_collection('Articles', [
          'sort'        => 'date',
          'sort-order'  => 'DESC',
          'filter'      =>  array(
            array(
              'filter'      => 'date',
              'match'       => 'lte',
              'value'       => Date('Y-m-d'),
            ),
            array(
              'filter'      => 'category',
              'match'       => 'eq',
              'value'       => perch_get('category'),
            ),
            array(
              'filter'      => 'slug',
              'match'       => 'eq',
              'value'       => perch_get("slug"),
            )
          ),
          'count'      => 1,
          'template'    => 'blog/article.html'
      ]);
    }
  }

  echo '<section class="b-container p-article-related">';
    $category = perch_get('category');

    if ($category == 'dotyork' || $category == 'york') { 
      $category_title = $category .' News';
    } else if ($category == 'interviews') {
      $category_title = 'Interviews';
    } else {
      $category_title = $category .' Updates';
    }

    echo '<h2 class="t-s is-purple p-section__title">More '.$category_title.'</h2>';

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
          'value'       => perch_get('category'),
        ),
        array(
          'filter'      => 'slug',
          'match'       => 'neq',
          'value'       => perch_get("slug"),
        )
      ),
      'template'  => 'blog/grid.html',
      'sort'      => 'date',
      'sort-order' => DESC
    ]);
  echo '</section>';

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
 ?>