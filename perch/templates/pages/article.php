<?php 
  $title = perch_collection('Articles', [
          'count'     => 1,
          'filter'    => 'slug',
          'match'     => 'eq',
          'value'     => perch_get('slug'),
          'template'  => 'title.html'
      ], true);

  perch_layout('global/header', [
    'body-class' => 'blog-post',
    'title' => $title . " | Dot York Blog",
    'meta' => 'article'
  ]); 

  perch_collection('Articles', [
      'sort'        => 'date',
      'sort-order'  => 'DESC',
      'filter'      => 'slug',
      'match'       => 'eq',
      'value'       => perch_get("slug"),
      'template'    => 'blog/article.html'
  ]);


  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>