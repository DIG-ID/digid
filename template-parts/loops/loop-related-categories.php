<?php
$c = get_the_category();
if ( $c ) :
	$cnames = array();
	foreach ( $c as $c_id ) :
		$cnames[] = $c_id->name;
	endforeach;
	echo '<ul class="related-categories"><li>' . implode( ', </li><li>', $cnames ) . '</li></ul>';
endif;
