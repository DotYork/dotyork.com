<?php

perch_content('Banner');  //  yellow

//perch_content('About'); //  purple  TODO - redesign


//  Get the speakers, 
//  but only 4 of them and just the 'headliners'

perch_layout('conf/speakers', [
  'max' => '4',
  'headliners' => 'true',
  'title' => 'Featuring'
]);  //  green

// perch_content('Sessions');  //  white

// perch_content('Location');  //  blue

perch_layout('partials/blog', [
  'category' => '2018'
]);  //  white


perch_layout('partials/newsletter');

perch_layout('partials/partners', [
  'partners' => 'all'
]);