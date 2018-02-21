	<div class="p-footer__container">

	<?php 
		//	Details of next event, if there is one
		if (perch_layout_var('next-event', true) == 'true') { 

			perch_collection('Events', [
			      'count'     => 1,
			      'filter'    => 'date',
			      'match'     => 'gt',
			      'value'     => Date('Y-m-d'),
			      'template'  => 'events/footer_next.html'
			  ]);
		}

		perch_layout('partials/newsletter');

		perch_content('DY Partners');
	 ?>

	<div class="p-footer-credits">
		<p class="t-s is-yellow p-section__title">Brought to you by</p>

		<ul class="b-nav p-footer-credits__list">
			<li><a href="https://www.isotoma.com/" class="p-footer-credits__logo p-footer-credits__logo--isotoma" target="_blank">Isotoma</a></li>
			<li><a href="https://www.bytemark.co.uk/" class="p-footer-credits__logo p-footer-credits__logo--bytemark" target="_blank">Bytemark</a></li>
		</ul>
	</div>


	<footer class="p-footer">
		<div class="b-container">

			<ul class="b-nav p-footer__social">
				<li><a href="http://facebook.com/DotYorkEvent" class="b-icon--facebook" target="_blank">Facebook</a></li>
				<li><a href="http://twitter.com/Dot_York" class="b-icon--twitter" target="_blank">Twitter</a></li>
				<li><a href="https://www.youtube.com/channel/UCVciKWMJK5_kEIGTMMAhk_Q" class="b-icon--youtube" target="_blank">YouTube</a></li>
				<li><a href="https://www.linkedin.com/company-beta/3790001/" class="b-icon--linkedin" target="_blank">LinkedIn</a></li>
				<li><a href="mailto:hello@dotyork.com" class="b-icon--email" target="_blank">Email</a></li>
			</ul>

			<nav class="t-s p-footer__nav">
				<?php 
					perch_pages_navigation([
				    	'template'=>'footer.html',
				    	'navgroup'=> 'footer'
				    ]);
				 ?>
			</nav>

			<div class="p-footer__copy">
				<p class="t-xs">
					&copy; <?php echo Date('Y'); ?> DotYork Ltd. (8813629) <span>22 Pavement, York YO1 9UP</span>
				</p>
			</div>
		</div>
	</footer>
	</div>

<?php 
	perch_layout('global/scripts'); 
?>