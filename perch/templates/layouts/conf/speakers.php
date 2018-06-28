<?php

$year = Date('Y');
$year_from = $year . "-01-01";
$year_to   = $year . "-12-30";

//  If perch layout var 'max', count = perch_layout_var('max') && 'headline' else, all

PerchSystem::set_var('show-talk', 'true');  //  adds the talk title



if (perch_layout_has('max')) {
  $max = perch_layout_var('max', true);
} else {
  $max = 50;
}

echo '<section id="speakers" class="p-section is-green u-text--center">';

  if (perch_layout_has('title')) {
    echo '<h2 class="p-section__title is-center">'. perch_layout_var('title', true) .'</h2>';
  }


  if (perch_layout_has('headliners')) {
    perch_collection('Talks', [
      'sort'        => 'speaker.last_name',
      'sort-order'  => 'ASC',
      'template'    => 'talks/speaker-grid.html',
      'count'       =>  $max,
      'filter'=> [
        [
          'filter'  =>  'event.date',
          'match'   =>  'eqbetween',
          'value'   =>  $year_from . ' ,' . $year_to
        ],
        [
          'filter'  =>  'speaker.secret',
          'match'   =>  'neq',
          'value'   =>  'true'
        ],
        [
          'filter'  =>  'headliner',
          'match'   =>  'eq',
          'value'   =>  'true'
        ]
      ] 
    ]);
  } else {
    perch_collection('Talks', [
      'sort'        => 'speaker.last_name',
      'sort-order'  => 'ASC',
      'template'    => 'talks/speaker-grid.html',
      'count'       =>  $max,
      'filter'=> [
        [
          'filter'  =>  'event.date',
          'match'   =>  'eqbetween',
          'value'   =>  $year_from . ' ,' . $year_to
        ]
      ] 
    ]);
  }

  if (perch_layout_has('max')) {
    echo '<a href="/speakers" class="b-btn b-btn--white b-btn--center">View All Speakers</a>';
  }

echo '</section>';

