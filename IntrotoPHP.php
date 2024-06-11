<?php

/*******w******** 
    
    Name: Shawn Ibragimov
    Date: 14-05-2024
    Description: Intro to PHP 

****************/

$config = [

    'photos_per_page' => 6,

    'gallery_name' => 'Shawn\'s Gallery',
 
    'unsplash_categories' => ['mountains','bears','river','forest', 'beach', 'ocean'],
 
    'local_images' => ['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg'],

    'authors' => ['peterlaster','maxwbender','benobro','andreacau']
 
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

    <h1><?php echo $config['gallery_name']; ?></h1>

    <h1><?php echo count($config['local_images']); ?> Large Images</h1>

    <?php foreach($config['local_images'] as $index => $image): ?>
        <img src="images/<?php echo $image; ?>" alt="image">
        <a href="https://unsplash.com/@<?php echo $config['authors'][$index]; ?>"><?php echo $config['authors'][$index]; echo "\n"; ?></a>

        <br/>
    <?php endforeach; ?>
    

    <?php foreach($config['unsplash_categories'] as $category): ?>
        <h2><?php echo $category; ?></h2>
        <?php $url = "https://source.unsplash.com/300x200/?{$category}"; ?>
        <img src="<?php echo $url; ?>" alt="<?php echo $category; ?>">
    <?php endforeach; ?>

    
</body>
</html>