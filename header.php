<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criando um site responsivo do começo ao fim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/<?php echo $style; ?>.css">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Controlador de cache, retirar quando acabar o desenvolvimento -->
    <meta http-equiv="Cache-Control" content="no-store" />
    
</head>
<body>

    <?php include('includes/organisms/menu-responsivo.php'); ?>
    
    <div class="layout">
        <header>
            <div class="container"> <!-- DIV CONTAINER -->
                <div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="index.html">
                        <img src="images/logo-tag-topo.svg" alt="Logo tag topo">
                    </a>
                </div>

                <div class="links">

                    <?php include('includes/organisms/menu.php'); ?>
                    
                    <a class="toggle" href="javascript:;">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <ul class="social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-github-alt"></i></a>
                        </li>
                    </ul>
                </div>

        <h1><?php echo $chamada; ?></h1>

                <p>Code // Share // Reboot</p>
            </div> <!-- FIM DIV CONTAINER -->
        </header>

        <main>