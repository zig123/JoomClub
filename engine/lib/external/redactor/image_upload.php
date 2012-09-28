<?php
 
// This is a simplified example, which doesn't cover security of uploaded images. 
// This example just demonstrate the logic behind the process. 
 
 
// files storage folder
$dir = '/uploads/images/';
 
$_FILES['file']['type'] = strtolower($_FILES['file']['type']);
 
if ($_FILES['file']['type'] == '/uploadsimage/png' 
|| $_FILES['file']['type'] == '/uploadsimage/jpg' 
|| $_FILES['file']['type'] == '/uploadsimage/gif' 
|| $_FILES['file']['type'] == '/uploadsimage/jpeg'
|| $_FILES['file']['type'] == '/uploadsimage/pjpeg')
{	
    // setting file's mysterious name
    $filename = md5(date('YmdHis')).'.jpg';
    $file = $dir.$filename;

    // copying
    copy($_FILES['file']['tmp_name'], $file);

    // displaying file    
	$array = array(
		'filelink' => '/uploads/images/'.$filename
	);
	
	echo stripslashes(json_encode($array));   
    
}
 
?>