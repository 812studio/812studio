	<p id="footer" class="credits" role="contentinfo">

		<span class="sitemap">Sitemap | &copy; <?php echo date('Y');?></span>
		<span class="good">812studio + U = 
		<?php $benefit = array(
				'1' => 'A Darn Good Web Site',
				'2' => 'A Strong Identity',
				'3' => 'A Great Partnership',
				'4' => 'A Winning Team',
				'5' => 'Trouble for Your Competitors',
				'6' => 'Success',
				'7' => 'A Photo with Obama',
				'8' => 'Your Companies Logo on the Moon',
				'9' => 'A Better Looking YOU',
				'10' => 'A Better Tomorrow',
				);
		
			echo $benefit[(rand(1,10))]; 
			?>
		</span>
		

	</p><!-- End Footer -->
</div><!-- End Container -->

<!-- JS -->

<!-- Typekit -->
<script type="text/javascript" src="http://use.typekit.com/xth1zuj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php if (is_page_template('page-directions.php')) { ?>

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAYQvmCuXe4S0CkCPUNnnSdhTYK_Frr4-9fYUgOMjUHEnom-zYlBTye2Pspe1_5P7fLX5qh_o7NffFPw"  
		type="text/javascript"></script>
		
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/googleMaps.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#gMap').googleMaps({
		        latitude: 38.718501119072826,
		        longitude: -90.30332565307617,
		        depth: 11,

		        markers: [{
		        		//RAC
		                latitude: 38.654836,
		                longitude: -90.296414,
		                icon: { 
			                image: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png', 
			                shadow: 'http://chart.apis.google.com/chart?chst=d_map_pin_shadow', 
			                iconSize: '12, 20', 
			                shadowSize: '22, 20' 
			            },
			            info: {
			                layer: '#RAC',
			                popup: true
			            }

		        }]
		        
		    });
		});
	
	</script>

<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
