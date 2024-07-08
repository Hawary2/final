<?php
session_start();
include 'seo.php';

$page = 'blog';
$seo_data = get_seo_data($page);
?>
<?php require 'widget/cutes.php'; $cute = query ("SELECT * FROM blog"); ?>
<?php include 'widget/headhome.php' ?>
<?php include 'mainNavbar.php';?>
<div class="row">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/brouva.svg" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link <link href="mcss/bootstrap.min.css" rel="stylesheet">
<link href="mcss/style.css" rel="stylesheet">
<div class="container-fluid p-0">
<?php foreach( $cute as $sweet ) : ?>
<main class="container">
<div class="col-md-4 p-3"><div class="card p-1">
<a href="blog.php?id=<?=$sweet['id'];?>"> 
<img class="img-fluid card" alt="<?=$sweet['title'];?>" src="<?=$sweet['cover'];?>"/>
<div class="card-content p-3">
<h3><?= $sweet["title"]; ?> ✏️</h3>
<p>📝 <?= $sweet["description"]; ?></p>
</div>
</a>
</div></div>

<?php endforeach; ?>
<?php include 'mainFooter.php'; ?>

</div>