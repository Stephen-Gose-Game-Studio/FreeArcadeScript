<?php
$sender = clean($_POST['sender']);
$recipient = clean($_POST['recipient']);
$gamei = clean($_POST['gamei']);
$gamen = clean($_POST['gamen']);


if(!$sender || !$recipient){
echo 'All fields are required.';
}else{


if($seo_on == 1){
		$playlink = ''.$domain.'/play/'.$gamei.'-'.$gamen.'.html';
	}else{
		$playlink = ''.$domain.'/index.php?action=play&amp;ID='.$gamei.'';
	};

$headers = 'From: '.$supportemail.' <'.$supportemail.'>';
$subject = 'Your friend '.$sender.' wanted you to see this';
$message = 'Your friend '.$sender.' wanted you to check out the game '.$gamen.' at '.$playlink ;
mail($recipient, $subject, $message, $headers);
echo '<p>Thank you, message has been sent.</p>' ;
};
?>