<?php 

  perch_layout('global/header', [
    'body-class' => 'blog',
    'title' => 'Dot York Updates',
  ]); 

  $category = perch_get('category', true);

  if (($category == '1')) {
    
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
      if ($category == 'dotyork') {
        $category_title = 'DotYork News';
      } else if ($category == 'york') {
        $category_title = 'York News';
      }
    } else if ($category == 'interviews') {
      $category_title = 'Interviews';
    } else {
      $category_title = $category .' Updates';
    }
  ?>

  <div class="p-banner is-purple">
		<div class="b-container">
			<h1 class="p-banner__title js-altFont"><?php echo $category_title; ?></h1>
      <p class="p-banner__subtitle is-yellow"><a href="/blog/all" class="p-section__title__all">View All Articles</a></p>
    </div>
    
    <svg id="bgShape1" class="p-banner__bg-shape--1" data-name="bg_shape_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 991 800">
      <path d="M29.07,291.59 C13,256.07 1,217.5 4,178.64 C7,139.78 27.72,100.64 62.87,83.71 C137.12,48.03 204.17,123.55 254.35,172.18 C284.66,201.55 322.09,227.7 357.85,250.52 C361.77,253.02 366,255.38 370.63,255.66 C378.52,256.14 385.85,250.03 388.34,242.53 C392.99,228.53 382.93,217.76 377.15,206.08 C369.75,191.1 362.336667,176.13 354.91,161.17 C343,137 330.76,112 329.17,85.05 C327.58,58.1 339.37,28.51 363.94,17.35 C389.53,5.74 419.55,17.11 443.65,31.57 C489.73582,59.3095064 528.194628,98.0810436 555.56,144.39 C564.23,159.1 572.22,174.21 581.18,188.75 C590.42,203.75 600.31,212.86 613.77,224.04 C618.71,228.15 624.35,232.49 630.77,232.04 C635.22,231.73 639.26,229.04 642.01,225.53 C644.636741,221.90896 646.519691,217.803178 647.55,213.45 C654.48,188.45 640.97,167.21 635.55,142.92 C630.07,118.4 627.88,92.55 637.45,68.71 C650.83,35.36 684.6,13.71 719.45,5.15 C796.04,-13.65 879.58,23.7 928.26,85.76 C976.94,147.82 994.09,230.23 989.41,308.96 C984.73,387.69 960,463.79 932.09,537.54 C898.63,625.89 855.63,717.92 774.68,766.63 C737.783396,788.743604 695.483507,800.207251 652.47,799.75 C644.91,799.66 637.03,799.1 630.47,795.35 C623.91,791.6 619.62,785.35 615.94,778.97 C591.82,736.97 593.03,681.64 618.94,640.75 C631.07,621.63 647.94,605.75 659.36,586.23 C670.78,566.71 675.88,540.73 663.17,521.99 C660.35,517.84 656.49,514.06 651.61,512.87 C645.35,511.35 638.96,514.34 633.26,517.34 C585.911613,542.2276 541.991798,573.152313 502.6,609.34 C481.5,628.74 460.79,650.22 433.76,659.76 C406.73,669.3 371.03,661.96 359.34,635.76 C338.6,589.35 406.94,540.84 392.34,492.16 C314.48,576.58 209.76,635.85 97.34,659.16 C63.64,666.16 20.24,665.52 4.8,634.76 C-7,611.23 5.07,582.87 19.88,561.11 C41.76,529 121.76,484.39 123.5,446 C124.63,420.91 92.09,396 78.55,377.19 C59.2714809,350.370552 42.6972166,321.707258 29.07,291.62" id="Shape"></path>
    </svg>

    <svg id="bgShape4" class="p-banner__bg-shape--4" viewBox="0 0 980 610" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <path d="M219,0.49 C192.333333,18.83 166.333333,38.1333333 141,58.4 C60.26,123.08 -19.42,218 5.46,318.4 C21.46,382.98 79.75,431.1 143.63,449.74 C207.51,468.38 276.15,461.64 341.08,447.13 C396.093376,434.819259 449.752014,417.089365 501.27,394.2 C537.46,378.13 590.33,332.39 631.86,343.01 C695.45,359.26 742.18,508.43 788.31,556.19 C819.52,588.51 862.72,618.54 906.14,606.98 C962.89,591.87 979.01,519.57 979.06,460.83 C979.18,300.59 937.32,140.64 859.75,0.49 L219,0.49 Z" id="Shape"></path>
    </svg>

    <svg class="p-banner__bg-shape--dots">
      <defs>
        <pattern id="hexapolka" patternUnits="userSpaceOnUse" width="100" height="86" patternTransform="scale(.1)">
            <circle cx="0" cy="44" r="16" id="dot" />
            <use xlink:href="#dot" transform="translate(48,0)" />
            <use xlink:href="#dot" transform="translate(25,-44)" />
            <use xlink:href="#dot" transform="translate(75,-44)" />
            <use xlink:href="#dot" transform="translate(100,0)" />
            <use xlink:href="#dot" transform="translate(75,42)" />
            <use xlink:href="#dot" transform="translate(25,42)" />
        </pattern>
      </defs>
    </svg>
  </div>
  
  <div class="b-container">

  <?php
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
  ?>

  <div class="p-banner is-purple">
		<div class="b-container">
			<h1 class="p-banner__title js-altFont">DotYork Blog</h1>
    </div>
    
    <svg id="bgShape1" class="p-banner__bg-shape--1" data-name="bg_shape_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 991 800">
      <path d="M29.07,291.59 C13,256.07 1,217.5 4,178.64 C7,139.78 27.72,100.64 62.87,83.71 C137.12,48.03 204.17,123.55 254.35,172.18 C284.66,201.55 322.09,227.7 357.85,250.52 C361.77,253.02 366,255.38 370.63,255.66 C378.52,256.14 385.85,250.03 388.34,242.53 C392.99,228.53 382.93,217.76 377.15,206.08 C369.75,191.1 362.336667,176.13 354.91,161.17 C343,137 330.76,112 329.17,85.05 C327.58,58.1 339.37,28.51 363.94,17.35 C389.53,5.74 419.55,17.11 443.65,31.57 C489.73582,59.3095064 528.194628,98.0810436 555.56,144.39 C564.23,159.1 572.22,174.21 581.18,188.75 C590.42,203.75 600.31,212.86 613.77,224.04 C618.71,228.15 624.35,232.49 630.77,232.04 C635.22,231.73 639.26,229.04 642.01,225.53 C644.636741,221.90896 646.519691,217.803178 647.55,213.45 C654.48,188.45 640.97,167.21 635.55,142.92 C630.07,118.4 627.88,92.55 637.45,68.71 C650.83,35.36 684.6,13.71 719.45,5.15 C796.04,-13.65 879.58,23.7 928.26,85.76 C976.94,147.82 994.09,230.23 989.41,308.96 C984.73,387.69 960,463.79 932.09,537.54 C898.63,625.89 855.63,717.92 774.68,766.63 C737.783396,788.743604 695.483507,800.207251 652.47,799.75 C644.91,799.66 637.03,799.1 630.47,795.35 C623.91,791.6 619.62,785.35 615.94,778.97 C591.82,736.97 593.03,681.64 618.94,640.75 C631.07,621.63 647.94,605.75 659.36,586.23 C670.78,566.71 675.88,540.73 663.17,521.99 C660.35,517.84 656.49,514.06 651.61,512.87 C645.35,511.35 638.96,514.34 633.26,517.34 C585.911613,542.2276 541.991798,573.152313 502.6,609.34 C481.5,628.74 460.79,650.22 433.76,659.76 C406.73,669.3 371.03,661.96 359.34,635.76 C338.6,589.35 406.94,540.84 392.34,492.16 C314.48,576.58 209.76,635.85 97.34,659.16 C63.64,666.16 20.24,665.52 4.8,634.76 C-7,611.23 5.07,582.87 19.88,561.11 C41.76,529 121.76,484.39 123.5,446 C124.63,420.91 92.09,396 78.55,377.19 C59.2714809,350.370552 42.6972166,321.707258 29.07,291.62" id="Shape"></path>
    </svg>

    <svg id="bgShape4" class="p-banner__bg-shape--4" viewBox="0 0 980 610" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <path d="M219,0.49 C192.333333,18.83 166.333333,38.1333333 141,58.4 C60.26,123.08 -19.42,218 5.46,318.4 C21.46,382.98 79.75,431.1 143.63,449.74 C207.51,468.38 276.15,461.64 341.08,447.13 C396.093376,434.819259 449.752014,417.089365 501.27,394.2 C537.46,378.13 590.33,332.39 631.86,343.01 C695.45,359.26 742.18,508.43 788.31,556.19 C819.52,588.51 862.72,618.54 906.14,606.98 C962.89,591.87 979.01,519.57 979.06,460.83 C979.18,300.59 937.32,140.64 859.75,0.49 L219,0.49 Z" id="Shape"></path>
    </svg>

    <svg class="p-banner__bg-shape--dots">
      <defs>
        <pattern id="hexapolka" patternUnits="userSpaceOnUse" width="100" height="86" patternTransform="scale(.1)">
            <circle cx="0" cy="44" r="16" id="dot" />
            <use xlink:href="#dot" transform="translate(48,0)" />
            <use xlink:href="#dot" transform="translate(25,-44)" />
            <use xlink:href="#dot" transform="translate(75,-44)" />
            <use xlink:href="#dot" transform="translate(100,0)" />
            <use xlink:href="#dot" transform="translate(75,42)" />
            <use xlink:href="#dot" transform="translate(25,42)" />
        </pattern>
      </defs>
    </svg>
	</div>

  <div class="b-container">
  <?php
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