<?php 
	$title = perch_collection('Sessions', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'sessions/title.html'
		  ], true);

	$event = perch_collection('Sessions', [
		      'filter'      => 'slug',
		      'match'       => 'eq',
		      'value'       => perch_get("slug"),
		      'template'    => 'sessions/event.html'
      ], true);
    
  $event_title = perch_collection('Events', [
        'filter'      => 'slug',
        'match'       => 'eq',
        'value'       => 'dotyork-2018',
        'template'    => 'title.html'
    ], true);
 ?>

<div class="p-banner is-dark">
  <div class="b-container">
    <h1 class="p-banner__title js-altFont"><?php echo $title ?></h1>
    <p class="p-banner__subtitle is-yellow">Part of <a href="<?php echo $event ?>"><?php echo $event_title; ?></a></p>
  </div> 

  <svg id="bgShape3" class="p-banner__bg-shape--3" data-name="bg_shape_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 657 742">
    <path d="M493.46,646.25 C442.08,710.39 358.19,747 276.22,741.1 C263.6,740.19 250.75,738.24 239.57,732.3 C213.95,718.69 202.78,685.71 208.57,657.3 C214.36,628.89 234.13,604.99 257.17,587.36 C184.024729,589.336263 112.092039,568.392463 51.44,527.46 C36,517 21,504.77 12.37,488.27 C-22.1,422.6 24.22,334.16 93.68,318.12 C118.61,312.36 144.52,312.88 170.1,313.42 C138.52,312.75 122.26,257.89 118.41,233.34 C112.48,195.54 120.92,154.5 141.41,122.27 C162.41,89.36 194.76,63.43 234.23,58.16 C281.99,51.79 324.98,78.67 361.56,106.16 C375.71,53.34 422.62,10.81 476.56,1.9 C490.32,-0.37 504.56,-0.6 518.05,3.01 C541.7,9.35 560.75,26.81 576.37,45.65 C624.25,103.37 648.31,178.09 655.02,252.77 C663.23,344.15 646.39,438.11 604.02,519.46 C561.65,600.81 493.36,669.02 410.52,708.46" id="Shape"></path>
  </svg>

  <svg id="bgShape4" class="p-banner__bg-shape--4" viewBox="0 0 980 610" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <path d="M219,0.49 C192.333333,18.83 166.333333,38.1333333 141,58.4 C60.26,123.08 -19.42,218 5.46,318.4 C21.46,382.98 79.75,431.1 143.63,449.74 C207.51,468.38 276.15,461.64 341.08,447.13 C396.093376,434.819259 449.752014,417.089365 501.27,394.2 C537.46,378.13 590.33,332.39 631.86,343.01 C695.45,359.26 742.18,508.43 788.31,556.19 C819.52,588.51 862.72,618.54 906.14,606.98 C962.89,591.87 979.01,519.57 979.06,460.83 C979.18,300.59 937.32,140.64 859.75,0.49 L219,0.49 Z" id="Shape"></path>
  </svg>
</div>

<div class="b-container">
  <div class="p-page p-wysiwyg">
    <?php  
      perch_collection('Sessions', [
          'filter'      => 'slug',
          'match'       => 'eq',
          'value'       => perch_get("slug"),
          'template'    => 'sessions/about.html'
      ]);
    ?>
  </div>
</div>



<?php 

  perch_collection('Sessions', [
    'filter'      => 'slug',
    'match'       => 'eq',
    'value'       => perch_get("slug"),
    'template'    => 'sessions/speakers.html'
  ]);
	

	perch_collection('Sessions', [
		  'filter'=> [
		        [
					'filter'      => 'slug',
					'match'       => 'neq',
					'value'       => perch_get("slug"),
		        ],
		        [
		            'filter' => 'event.slug',
		            'match' => 'eq',
		            'value'=> 'dot-york-2018',
		        ],
		    ],
          
          'template'    => 'sessions/session-list.html'
      ]);
 ?>