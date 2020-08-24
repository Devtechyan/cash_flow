<?php 
	if(session_id() == ''){
        //session has not started
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    
    <!--===============================================================================================-->	
	
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/main.css">

    <title><?php echo SITENAME; ?></title>
</head>

<body>