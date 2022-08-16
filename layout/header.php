<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?? "Mon super site"; ?>
    <?php
    //$defaultTitle = "Mon super site";

    // Opérateur ternaire
    // condition ? expression si vraie : expression si faux
    //echo isset($title) ? $title : $defaultTitle;

    // if (isset($title)) {
    //   echo $title;
    // } else {
    //   echo $defaultTitle;
    // }
    ?>
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div id="wrapper">