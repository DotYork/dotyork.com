<?php

perch_content('Banner');  //  yellow

perch_content('About'); //  purple  TODO - redesign

perch_layout('conf/speakers', [
  'max' => '4'
]);  //  green

//perch_content('Sessions');  //  white

//perch_content('Location');  //  blue

perch_layout('partials/blog', [
  'category' => '2018'
]);  //  white


perch_layout('partials/newsletter');

perch_layout('partials/partners', [
  'partners' => 'all'
]);