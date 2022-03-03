<?php session_start();?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery/jquery-3.6.0.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="../bootstrap/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <title>My-Giro</title>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-sm">
            <a class="navbar-brand" href="index.php">
                <img src="../img/logo-blue.png" alt="" width="25%" height="25%" class="d-inline-block align-text-top">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="  ">ПРЕИМУЩЕСТВА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="  ">О НАС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="  ">ОСОБЕННОСТИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="  ">КОМАНДА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="  ">БРЕНДЫ</a>
                    </li>
    
                   
                </ul>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Авторизироваться
                      
                    </button>

            </div>
        </div>
    </nav>
    <div class="container-sm">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php require_once 'views/entrance.php'?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

</body>