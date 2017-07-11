<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
  <div>
     <label class="search-form" for="s">Search for:</label>
    <input type="text" value="" name="s" id="s" /> 
   &nbsp
	<div margin-top: 20px;><?php wp_dropdown_categories( 'show_option_all=All Categories' ); ?> 
   <input type="submit" id="searchsubmit" value="Search" margin-top: 20px float: right ;/> </div>
  </div>
</form>
</form>

