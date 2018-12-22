<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title> 

    <?php  echo isset($title) 
          ? $title . " - ".WEBSITE_NAME
          : WEBSITE_NAME."- simple et rapide";
     ?>
  </title>

  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="asset/css/main.css">

  

  <!--bootstrap watch 3.3.7 reanable-->
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-Li5uVfY2bSkD3WQyiHX8tJd0aMF91rMrQP5aAewFkHkVSTT2TmD2PehZeMmm7aiL" crossorigin="anonymous">


 

</head>

<body>

  <?php include('partials/_nav.php'); ?>

