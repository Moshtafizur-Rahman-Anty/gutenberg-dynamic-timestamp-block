<?php 


if ( ! defined( 'ABSPATH' ) ) exit;



?>


<p <?php echo get_block_wrapper_attributes( ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>

<?php  
if(isset($attributes) && $attributes["displayMode"] == 'current_year') {
	echo esc_html("Current year is " . gmdate('Y'));
}
else {
	echo esc_html("The post was last updated " . get_the_modified_time( ) );
}

?>
</p>