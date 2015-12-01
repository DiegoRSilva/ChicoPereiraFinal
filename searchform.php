<?php
/**
 * The template for Search Form.
 *
 * @package Simon WP Framework
 * @since Simon WP Framework 1.0
 */
?>

<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="Busca" />
</form>

<!-- <form action="<?php echo site_url(); ?>" id="searchform" method="get">
  <div class="flex_75 right">
    <input type="text" id="s" name="s" value="" />
  </div>
  <div class="flex_25">
    <input class="hidden" type="submit" value="Search" id="searchsubmit" />
  </div>
  <div class="clear"></div>
</form> -->
