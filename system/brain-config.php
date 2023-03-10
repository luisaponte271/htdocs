<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	
	/* Database Setting */
	$db['host'] = 'localhost'; //Mysql's Host
	$db['port'] = '3306'; //Mysql's port
	$db['user'] = "root"; //Mysql's user
	$db['pass'] = ''; //Mysql's password
	$db['db'] = "bet"; //Mysql's database
	
	/* Emu Settings */
	$config['hotelEmu'] = 'arcturus'; // plusemu // arcturus

	/* Client Setting */
	$hotel['emuHost'] = "127.0.0.1"; //IP of VPS//IP of Proxy
	$hotel['emuPort'] = "3000";  //Port of VPS//Port of Proxy
	$hotel['staffCheckClient'] = false; //Enable the staff pin in the client (true) or disable it (false)
	$hotel['staffCheckClientMinimumRank'] = 3; //Minium staff rank to get the staff pin in the client
	$hotel['homeRoom'] = '0'; //Set the start room when you get in the hotel
	$hotel['external_Variables'] = "http://localhost/swf/gamedata/external_variables.txt?v=7";
	$hotel['external_Variables_Override'] = "http://localhost/swf/gamedata/override/external_override_variables.txt?v=6";
	$hotel['external_Texts'] = "http://localhost/swf/gamedata/external_flash_texts.txt";
	$hotel['external_Texts_Override'] = "http://localhost/swf/gamedata/override/external_flash_override_texts.txt";
	$hotel['productdata'] = "http://localhost/swf/gamedata/productdata.txt";
	$hotel['furnidata'] = "http://localhost/swf/gamedata/furnidata.xml";
	$hotel['figuremap'] = "http://localhost/swf/gamedata/figuremap.xml";
	$hotel['figuredata'] = "http://localhost/swf/gamedata/figuredata.xml";
	$hotel['swfFolder'] = "http://localhost/swf/gordon/PRODUCTION-202006192205-424220153";
	$hotel['swfFolderSwf'] = "http://localhost/swf/gordon/PRODUCTION-202006192205-424220153/Habbo.swf";
	$hotel['onlineCounter'] = false; // Enable the user count in the client.
	$hotel['diamonds.enabled'] = true; // Enable diamonds in the hotel.
	
	/* Website Setting */
	$config['hotelUrl'] = "http://localhost";//Address of your hotel. Does not end with a "/"
	$config['hotelName'] = "bet"; //Name of your hotel
	$config['skin'] = "brain"; //Skin/template of your website
	$config['lang'] = "es"; //Language of your website en/nl/es
	$config['favicon'] = "http://localhost/templates/brain/assets/img/favicon.gif";
	$config['staffCheckHk'] = false; //Enable the staff pin in the housekeeping (true) or disable it (false)
	$config['staffCheckHkMinimumRank'] = 3; //Minium staff rank to get the staff pin in the housekeeping
	$config['maintenance'] = false; //Enable the maintenance of your website (true) or disable it (false)
	$config['maintenancekMinimumRankLogin'] = 3; //Minium staff rank to login when the website is in maintenance
	$config['groupBadgeURL'] = "http://localhost/swf/habbo-imaging/badge.php?badge=";
	$config['badgeURL'] = "http://localhost/swf/c_images/album1584/"; 
	$config['userLikeEnable'] = true; // Enable user likes 
	$config['newsCommandEnable'] = true; //Enable news commands
	$config['newsCommandFilter'] = true; //Enable wordfilter on news commands (the filter use the db tabels wordfilter and wordfilter_characters)
	$config['alertReferrer'] = true;
	$config['alert'] = ''; //Alert message. If you don't want a alert, you fill in 'nomessage' or you do leave it blank.
	$config['brainversion'] = '1.8.1'; // Please do not change.
	
	/* Facebook Login Settings
		You need a Facebook app for this to work go to
		http://developers.facebook.com/apps/ */
	 
	$config['facebookLogin'] = false; //Enable the Facebook login (true) or disable it (false)
	$config['facebookAPPID'] = '334162590sdaf292528';
	$config['facebookAPPSecret'] = 'ce2504ff5adsfa3ff7a6a2fa6d984cd8836';
	
	/* Email Settings */
	$email['mailServerHost'] = 'smtp.gmail.com';
	$email['mailServerPort'] = 587;
	$email['SMTPSecure'] = 'TLS';
	$email['mailUsername'] = 'gmail@gmail.com';
	$email['mailPassword'] = '*****';
	$email['mailLogo'] = 'http://localhost/templates/brain/style/images/logo/logo.png';
	$email['mailTemplate'] = '/system/app/plugins/PHPmailer/temp/resetpassword.html';
	
	/* Social settings */
	$config['facebook'] = 'http://www.facebook.com/Habbo/';
	$config['facebookEnable'] = false;
	$config['twitter'] = 'http://twitter.com/Habbo';
	$config['twitterEnable'] = false;
	
	/* Register Setting */
	$config['startMotto'] = ""; //Regsiter start motto
	$config['credits']	= "0";
	$config['duckets']	= "0";
	$config['diamonds']	= "0";
	$config['diamondsRef']	= "0";
	$config['registerEnable'] = true;
	
	/* Google recaptcha Site Key  
	   Go to this website to create a recaptcha Site Key: http://www.google.com/recaptcha/intro/index.html	*/
	   $config['recaptchaSiteKey'] = "6LdzewwUAAAAABkJ3vsdfCDca9qmLGDaWAHqMRtFEs2";
	$config['recaptchaSiteKeyEnable'] = false;
	
	/* Buy VIP Settings */
	$config['vipCost'] = "25";
	$config['vipRankToGet'] = "3";
	$config['vipBadge'] = "vip";
	
	
	switch($config['hotelEmu'])
	{
		case "arcturus":
		$emuUse['user_wardrobe']  = 'users_wardrobe ';
		$emuUse['ip_last'] = 'ip_current';
		$emuUse['respect'] = 'respects_received';
		$emuUse['user_stats'] = 'users_settings';
		$emuUse['user_stats_user_id'] = 'user_id';
		$emuUse['OnlineTime'] = 'online_time';
		break;
		case "plusemu":
		$emuUse['user_wardrobe']  = 'user_wardrobe ';
		$emuUse['ip_last'] = 'ip_last';
		$emuUse['respect'] = 'Respect';
		$emuUse['user_stats'] = 'user_stats';
		$emuUse['user_stats_user_id'] = 'id';
		$emuUse['OnlineTime'] = 'OnlineTime';
		break;
		default:
		//Nothing
		break;
	}
?>