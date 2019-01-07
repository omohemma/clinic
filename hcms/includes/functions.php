<?php

function validateFormData($formData){
	$formData = trim( stripslashes( htmlspecialchars( strip_tags( str_replace(array('(',')'), '', $formData) ), ENT_QUOTES)));
	
	return $formData;
}


function cleanURL($textURL) {
	$URL = strtolower(preg_replace( array('/[^a-z0-9\- ]/i', '/[ \-]+/'), array('', '-'), $textURL));
	return $URL;
}

function reverseURL($textURL) {
	$URL = strtoupper(preg_replace( array('/[^a-z0-9\- ]/i', '/[ \-]+/'), array('-', ' '), $textURL));
	return $URL;
}

?>