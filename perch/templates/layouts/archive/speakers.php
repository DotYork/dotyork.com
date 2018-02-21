<main class="p-section is-green">
    <div class="b-container">
        <h1 class="t-s p-section__title is-center is-white">Previous Speakers</h1>
        <?php
          PerchSystem::set_var('show-talk', 'false');
      		perch_collection('Speakers', [
              'filter'      => 'event.date',
              'match'       => 'lt',
              'value'       => Date('Y-m-d'),
              'sort'        => 'last_name',
              'sort-order'  => 'ASC',
              'template'    => 'speakers/grid.html'
          ]);
        ?>
    </div>
</main>