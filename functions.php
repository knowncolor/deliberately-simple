<?php
/*
Custom theme functions

Note: we recommend you prefix all your functions to avoid any naming
collisions or wrap your functions with if function_exists braces.
*/

function deliberately_simple_html5_datetime($timestamp) {
	return date("Y-m-d", $timestamp);
}