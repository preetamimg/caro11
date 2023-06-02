<!DOCTYPE html>
<html lang="en">


<!-- 
0 ,00000, .000000   .000000 0     .0000. 0000b,    0    0       0 db   0 d0000 .0000. 00000 d000b d000b  0    0
0 0  0  0 0  ,,,,   0  ,,,, 0     0    0 0 ___)   0 0   0       0 0 0  0 0     0    0   0   0     0      0    0
0 0  0  0 0     0   0     0 0     0    0 0    )  0   0  0       0 0  0 0 0"""" 0    0   0   0"""" 0      0""""0
0 0  0  0 "000000   "000000 00000 '0000' 0000d' 0"""""0 d0000   0 0   db 0     '0000'   0   d000b d000b  0    0
-->


<head>
    <?php include 'script_root.php' ?>

    <?php include 'meta.php' ?>


    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap == -->
    <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/bootstrap.min.css">

    <!-- IMG Icons == -->
    <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/imgIcons.min.css">

    <!-- BijarniaDream == -->
    <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/imgFontStyle.min.css">

    <!-- BijarniaDream == -->
    <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/bijarniadream.min.css">





    <!--====================== IMG Global Infotech / 11 pages ======================-->

    <?php if ((f_path == $actual_link) || (f_path . 'index.php' == $actual_link)) { ?>
        <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/index.min.css">
        <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/owl.carousel.min.css">


    <?php } else if (f_path . 'setup.php' == $actual_link) { ?>
        <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/setup.min.css">
        <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/owl.carousel.min.css">

    <?php } ?>

    <!-- custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo f_path ?>assets/dist/css/style.min.css" />

</head>

<body>