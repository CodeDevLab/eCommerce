<?php
	require_once 'parameters.php';
	require_once $dir_model.'initialize.php';

	//facebook
	$fb_title = "";
	$fb_type = "";
	$fb_image_url = "";
	$fb_url = "";
	$fb_description = "";
	$fb_admin_userid = "";

	//twitter
	$tw_card = "";
	$tw_url = "";
	$tw_title = "";
	$tw_description = "";
	$tw_image = "";
	
	if(isMobile()){
		include $dir_public_mobile.'policy.php';
	}elseif(isFacebook()){
		include $dir_facebook.'policy.php';
	}else{
		include $dir_public.'policy.php';
	}
?>