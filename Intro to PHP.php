<?php

/*******w******** 
    
    Name:
    Date:
    Description:

****************/

$config = [

    'photos_per_page' => 6,

    'gallery_name' => 'Name of Your Gallery',
 
    'unsplash_categories' => ['array','of','category','keywords'],
 
    'local_images' => ['array','of','local','image','filenames']
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <?php
            <h1><$config['gallery_name']></h1>
    ?>
    
</body>
</html>