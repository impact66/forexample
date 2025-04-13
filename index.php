<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_GET["category"])) {

    $dirs = glob('produkty/*');

    foreach ($dirs as $dir) {

    $category_name = basename($dir);
    $category = str_replace("-", " ", $category_name);
    $category = ucwords($category);

    echo "<a href='?category=$category_name'>$category</a>";
    }
    } 
    else {

    $dirs = glob('produkty/*');

    foreach ($dirs as $dir) {

    $category_name = basename($dir);
    $category = str_replace("-", " ", $category_name);
    $category = ucwords($category);

    echo "<a href='?category=$category_name'>$category</a>";
    }


    $category_name = $_GET["category"];
    $category = str_replace("-", " ", $category_name);
    $category = ucwords($category);

    echo "<h2>$category</h2>";
    $images = glob("produkty/$category_name/thumbs/*");

    foreach ($images as $image) {

    $image_name = basename($image);
    $image_url = "produkty/$category_name/images/$image_name";


    echo "<a href='$image_url'><img src='$image'></a>";
    }
    }
?>
    
</body>
</html>