<?php 
  perch_layout('global/header', [
    'body-class' => 'events',
    'title' => '',
  ]); 

	echo '<div class="p-event-archive">';
	    
?>
	<div class="p-banner is-purple">
	<div class="b-container">
		<h1 class="p-banner__title">P<span class="t-alt-font">r</span>evio<span class="t-alt-font">u</span>s Even<span class="t-alt-font">t</span>s</h1>
	</div>
</div>

<?php
    	//	Only showing past events

    	perch_collection('Events', [
			'template'   => 'events/event_list.html',
			'sort'		 => 'date',
			'sort-order' => 'DESC',
			'filter' => 'date',
			'match'  => 'lt',
			'value'  => date('Y-m-d')
	    ]);
		    
	echo '</div>';

	perch_layout('partials/newsletter');
	perch_layout('partials/partners');

  perch_layout('global/footer', [
    'next-event' => 'true',
  ]);
 ?>