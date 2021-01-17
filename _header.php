<!doctype html>
<html dir="rtl">
  <head>
      <?php include_once 'admin/SeoWebsite.php';
      $query=SeoWebsite::SelectSeoID();
      $item=[];
      $item=mysqli_fetch_assoc($query);
      ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <title><?php echo $item['title']; ?></title>
      <meta name="author" content="<?php echo $item['author']; ?>">
      <meta name="description" content="<?php echo $item['description']; ?>">
      <meta name="keywords" content="<?php echo $item['keywords']; ?>">
      <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
    <link href="Css/style.css" rel="stylesheet" />
    <link href="Css/all.min.css" rel="stylesheet" />

  </head>