<?php

if (perch_get('year', true) != 'NULL') {
  $year = perch_get('year');
} else if (preg_match("/\d{4}/", perch_get('category', true))) {
  $year = perch_get('category', true);
} else if (perch_layout_has('partners')) {
  if (perch_layout_var('partners', true) != 'all') {
    $year = perch_layout_var('partners', true);
  } else {
    $year = Date('Y');
  }
} else {
  $year = Date('Y');
}

$year_from = $year . "-01-01";
$year_to   = $year . "-12-30";
?>


<section class="p-section p-partners">
  <div class="b-container">
    <h2 class="t-s is-purple is-center p-section__title">Thanks to our partners</h2>

  <?php
    if (perch_layout_has('partners')) {
      
      perch_collection('Events', [
        'filter'      => 'date',
        'match'       => 'eqbetween',
        'value'       => $year_from . ' ,' . $year_to,
        'template'    => 'collections/events_sponsors.html'
      ]);
      
      if ($year >= 2017) {
    ?>
      <div class="p-partners-credits">
        <p class="t-s is-purple p-section__title">Supported by</p>

        <ul class="b-nav p-partners-credits__list">
          <li><a href="https://www.isotoma.com/" class="p-partners-credits__logo p-partners-credits__logo--isotoma" target="_blank">Isotoma</a></li>
          <?php if ($year >= 2018) { ?>
            <li><a href="https://www.bytemark.co.uk/" class="p-partners-credits__logo p-partners-credits__logo--bytemark" target="_blank">Bytemark</a></li>
          <?php } ?>
        </ul>
      </div>
    <?php
     }
    } else {
      perch_content('DY Partners');
    ?>
      <div class="p-partners-credits">
        <p class="t-s is-purple p-section__title">Supported by</p>

        <ul class="b-nav p-partners-credits__list">
          <li><a href="https://www.isotoma.com/" class="p-partners-credits__logo p-partners-credits__logo--isotoma" target="_blank">Isotoma</a></li>
          <li><a href="https://www.bytemark.co.uk/" class="p-partners-credits__logo p-partners-credits__logo--bytemark" target="_blank">Bytemark</a></li>
        </ul>
      </div>
    <?php
    }
  ?>
    
  </div>
</section>