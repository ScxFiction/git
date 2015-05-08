<?php
/*
*  Format Date
*/
function formatDate($date){
	$date = date("F j, Y, g:i a", strtotime($date));
	return $date;
}
/*
* URL Format Function
*/
function urlFormat($str){
	//Strip out all whitespace
	$str = preg_replace('/\s*/', '', $str); //regular expession /\s*/
	// Convert the string to all lowercase
	$str = strtolower($str);
	// Url Encode
	$str = urlencode($str);
	return $str;
}
/*
* Add calassname is_active if category is active
*/
function is_active($category){
	if(isset($_GET['category'])){
		if ($_GET['category'] == $category) {
			return 'active';
		}else {
			return '';
			}
		}else{
			if ($category == null) {
				return 'active';
			}
}
}