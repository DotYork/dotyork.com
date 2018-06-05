<?php 
	perch_layout('global/head', [
		'body-class' => perch_layout_var('body-class', true),
		'title' => perch_layout_var('title', true),
		'meta' => perch_layout_var('meta', true)
	]); 
?>


<header class="p-header <?php perch_layout_var('background') ?> <?php perch_layout_var('landing'); ?>">
	<div class="b-container">
		<a href="/" class="p-logo">DotYork</a>

		<?php if (perch_layout_var('landing', true) != 'is-landing') { ?>
		<nav class="p-nav">
			<ul class="b-nav">
				<?php	
					// When there’s an event - navgroup => conf | template => conf.html
					// When there isn’t an event - navgroup => header | template => header.html + delete the tickets item

					perch_pages_navigation(array(
						'from-path' => '/',
						'levels'    => 1,
						'template'  => 'conf.html',
						'navgroup'  => 'conf',
					));
				?>
					<li class="p-nav-item p-nav-item--ticket"><a href="https://ti.to/dotyork/dot-york-2018">Tickets</a></li>
			</ul>
		</nav>

		<?php } ?>
	</div>
</header>