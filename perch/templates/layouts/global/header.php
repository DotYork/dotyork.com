<?php 
	perch_layout('global/head', [
		'body-class' => perch_layout_var('body-class', true),
		'title' => perch_layout_var('title', true),
		'meta' => perch_layout_var('meta', true)
	]); 
?>

	<header class="p-header">
		<div class="b-container">
			<a href="/" class="p-logo">DotYork</a>

			<nav class="p-header__nav js-headerNav">
			<?php 
				
			 ?>

				<?php 
					// if (perch_layout_var('nav', true) == 'event') {

					// 		perch_pages_navigation([
					// 	    	'levels'=>1,
					// 	    	'template'=>'header.html',
					// 	    	'navgroup'=> 'header'
					// 	    ]);
				
					// } else { 
					// 	perch_collection('Events', [
					// 	      'count'     => 1,
					// 	      'filter'    => 'date',
					// 	      'match'     => 'gt',
					// 	      'value'     => Date('Y-m-d'),
					// 	      'template'  => 'collections/events_next_header.html'
					// 	  ]);
					// }

				perch_pages_navigation(array(
			        'from-path' => '/',
			        'levels'    => 1,
			        'template'  => 'header.html',
			        'navgroup'  => 'header',
			    ));
				 ?>

			 	
			 </nav>
			
			<?php 
				if (perch_layout_var('nav', true) == 'event') {
					echo '<a href="#" class="p-header__nav__trigger js-menuTrigger"><span></span></a>';
				}
			?>
			 
		</div>
	</header>