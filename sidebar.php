<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
	

		<div id="secondary" class="widget-area" role="complementary">
	<p>&nbsp;</p>
	<?php if (function_exists('smcf')) : ?>
    <?php smcf(); ?>
<?php endif; ?>
  <div id="explanation">
	<p>Vancouver is a beautiful place to live in but finding a job on these mean streets can be tough. Meancouver is the Vancouver area's leading niche job aggregator for tech jobs.</p>
	</div>
		<div class="adsenseSidebarFullRes">
		<script type="text/javascript"><!--
google_ad_client = "ca-pub-7220126959042532";
/* Meancouver 300x250, created 11/13/08 */
google_ad_slot = "0303022851";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				
			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>