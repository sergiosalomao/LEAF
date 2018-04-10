<?php require_once 'headers.php' ?>
<body class="bg-default">
 
 <?php require_once 'menu.php' ?>

     <div class="container">
     <div class="row">
            <!-- Menu Esquerda -->
            <div class="col-sm-2 bg-dark">
            <?php require_once 'menu_documentation.php'?>
            </div>
           
            <!-- Conteudo Direita -->
            <div class="col-sm-9 bg-white">
            
                
                
            
        
            
        <h1>NavBar</h1>
        <h3>NavBar menu</h3>
        <div class="bg-white">
         
                <nav class="navbar navbar-light" id="mynavbar">
                        <a class="navbar-brand-light" href="#">Navbar</a>
                       <a href="#home" class="navbar-active">Home</a>
                           <a href="#news">News</a>
                           <a href="#service">Service</a>
                           <a href="#contact">Contact</a>
                           <a href="#about">About</a>
                           <a href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="navbarResponsive()">&#9776;</a>
                   </nav>
                   <br>

                     <nav class="navbar navbar-dark" id="mynavbar">
                        <a class="navbar-brand-dark" href="#">Navbar</a>
                       <a href="#home" class="navbar-active">Home</a>
                           <a href="#news">News</a>
                           <a href="#service">Service</a>
                           <a href="#contact">Contact</a>
                           <a href="#about">About</a>
                           <a href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="navbarResponsive()">&#9776;</a>
                   </nav>


        </div>
            <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
                <code class="language-markup">
                &ltnav class="navbar navbar-light" id="mynavbar"&gt
                           &lta class="navbar-brand" href="#"&gtNavbar&lt/a&gt
                           &lta href="#home" class="navbar-active"&gtHome&lt/a&gt
                           &lta href="#news"&gtNews&lt/a&gt
                           &lta href="#service"&gtService&lt/a&gt
                           &lta href="#contact"&gtContact&lt/a&gt
                           &lta href="#about"&gtAbout&lt/a&gt
                           &lta href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="navbarResponsive()"&gt&#9776;&lt/a&gt
                &lt/nav&gt

                  &ltnav class="navbar navbar-dark" id="mynavbar"&gt
                           &lta class="navbar-brand" href="#"&gtNavbar&lt/a&gt
                           &lta href="#home" class="navbar-active"&gtHome&lt/a&gt
                           &lta href="#news"&gtNews&lt/a&gt
                           &lta href="#service"&gtService&lt/a&gt
                           &lta href="#contact"&gtContact&lt/a&gt
                           &lta href="#about"&gtAbout&lt/a&gt
                           &lta href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="navbarResponsive()"&gt&#9776;&lt/a&gt
                &lt/nav&gt
                    
                </code>
            </pre>
       

    </div>
         
</body>