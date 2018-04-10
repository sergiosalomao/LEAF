<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title>LEAF Framework Demo</title>

    <!-- CSS Custom -->
    <link href="css/estilos.css" rel="stylesheet" />


    <!-- LEAF core CSS -->
    <link rel="stylesheet" href="../../css/leaf-all-1.0.css">
   

    <!-- LEAF JS Core -->
    <script type="text/javascript" src="../../js/leaf-all-1.0.js"></script> 
    

    <!-- Code Markups CSS -->
    <link href="libs/prism/prism.css" rel="stylesheet" />

    <!-- Code Markups JS -->
    <script src="libs/prism/prism.js"></script>
   
    <!-- Fontawesome JS -->
    <script defer src="..js/fontawesome-all.js"></script>
    <link rel="stylesheet" href="../css/fa-svg-with-js.css">
    <link rel="stylesheet" href="../css/fontawesome-all">
    
    
</head>

<body class="bg-default">
 
 <?php require_once '../menu.php' ?>

     <div class="container">
     <div class="row">
            <!-- Menu Esquerda -->
            <div class="col-sm-2 bg-dark">
            <?php require_once 'menu_examples.php'?>
            </div>
           
            <!-- Conteudo Direita -->
            <div class="col-sm-9 bg-white">
                <div class="container">
                  <?php include 'template1.html' ?>
                </div>
            
            </div>
    </div>
         
</body>