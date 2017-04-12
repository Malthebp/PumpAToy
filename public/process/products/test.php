<?php
session_start();
require ('../config.php');

$image = new Bulletproof\Image($_FILES);

if($image["image"]){
	$image->setLocation("images/products")
		  ->setName(date("dmYHis"));
    $upload = $image->upload(); 
    if($upload){
        echo $upload->getFullPath(); // uploads/cat.gif
        echo 'success';
    }else{
        echo $image["error"]; 
        echo 'error!';
    }
}