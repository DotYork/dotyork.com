<?php 
  perch_layout('global/header', [
    'body-class' => 'blog',
    'title' => 'Dot York Updates',
  ]); 
?>

  <div class="p-section is-top-section">
    <div class="b-container">
      <h1 class="t-s p-section__title is-center is-purple">News &amp; Updates</h1>
        <?php
          perch_collection('Articles', [
            'sort'        => 'date',
            'sort-order'  => 'DESC',
            'filter'      => 'date',
            'match'       => 'lte',
            'value'       => Date('Y-m-d'),
            'template'    => 'blog/grid.html'
          ]);
        ?>
    </div>
  </div>

<?php
  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);