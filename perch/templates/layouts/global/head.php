<!doctype html>
<html lang="en">
<head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='/assets/css/master.css?v=1.5' rel='stylesheet' />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<?php 
		if (perch_layout_has('title')) {
			$title = perch_layout_var('title', true);
		}else{
			$title = perch_pages_title(true);
		} 
	?>

	<title>
		<?php 
			echo $title; 
		?>
	</title>

	<?php 
		if (perch_layout_var('meta', true) == 'speaker') {

			perch_collection('Speakers', [
				'template'  => 	'speakers/meta.html',
				'filter'	=>	'slug',
				'match'		=>	'eq',
				'value'		=>	perch_get('slug')
		    ]);

		} else if (perch_layout_var('meta', true) == 'article') {

			perch_collection('Articles', [
				'template'  => 	'blog/meta.html',
				'filter'	=>	'slug',
				'match'		=>	'eq',
				'value'		=>	perch_get('slug')
		    ]);

		} else {
			perch_page_attributes(); ?>	

			<meta property="og:site_name" content="Dot York" />
			<meta property="og:url" content="http://dotyork.com" />
			<meta property="og:title" content="Dot York" />
			<meta property="og:description" content="The Digital Conference for Curious Minds. Returning Autumn 2018." />
			<meta property="og:image" content="http://dotyork.com/assets/img/social.jpg" />

			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:site" content="@dot_york">
			<meta name="twitter:creator" content="@rickary">
			<meta name="twitter:title" content="Dot York">
			<meta name="twitter:description" content="The Digital Conference for Curious Minds. Returning Autumn 2018.">
			<meta name="twitter:image" content="http://dotyork.com/assets/img/social_twitter.jpg">
	<?php	} ?>
	
	<meta property="fb:app_id" content="2389015207990323"/>

</head>

<?php 
	if (perch_layout_has('body-class')) {
		echo '<body class="'.perch_layout_var('body-class', true).'">';
	}else{
		echo '<body>';
	}
?>