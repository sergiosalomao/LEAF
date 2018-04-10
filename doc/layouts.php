<?php require_once 'headers.php' ?>
<body class="bg-default">
 
 <?php require_once 'menu.php' ?>

     <div class="container">
     <div class="row">
            <!-- Menu Esquerda -->
            <div class="col-sm-2 bg-dark">
            <?php require_once 'menu_documentation.php' ?>
            </div>
           
            <!-- Conteudo Direita -->
            <div class="col-sm-9 bg-white">
             
        <h1>Layout</h1>
        <h3>Container</h3>
        <div class="bg-light">
            <p class="text-justify"> The container limits the size of the page area according to the resolution size of the device, container-fixed keeps the width always 100% independent of the resolution of the device, redeem this window and see the magic. </p>
        </div>
            <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
                <code class="language-markup">
                    &ltp class="container"&gt
                    // ......
                    &lt/p&gt
                    <br>
                    &ltp class="container-fixed"&gt
                    // .......
                    &lt/p&gt
                    
                </code>
            </pre>
        <br>

         
        
            <h3>Grids</h3>
            <div class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                    <div class="col-sm">
                        One of three columns
                    </div>
                </div>
            </div>
            </div>

            

            <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
                <code class="language-markup">
                    &ltdiv class="container"&gt
                        &ltdiv class="row"&gt
                            &ltdiv class="col-sm"&gt
                                One of three columns
                            &lt/div&gt
                            &ltdiv class="col-sm"&gt
                                One of three columns
                            &lt/div&gt
                            &ltdiv class="col-sm"&gt
                                One of three columns
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt                                          
                </code>
            </pre>
            <br>

         
        
        <h3>Item alignment</h3>
        <div class="bg-light">
     
        <div class="aling-item-end" style="height:200px;">
            <div style="background-color:coral;">RED</div>
            <div style="background-color:lightblue;">BLUE</div>  
            <div style="background-color:lightgreen;">GREEN</div>
        </div>
        
    </div>
    

        

        <!--Aqui ficam os codigos -->
        <h5 class="text-right info">Samples</h5>
        <pre>
            <code class="language-markup">
            &ltdiv class="aling-item-end" style="height:200px;"&gt
            &ltdiv style="background-color:coral;"&gtRED&lt/div&gt
            &ltdiv style="background-color:lightblue;"&gtBLUE&lt/div&gt  
            &ltdiv style="background-color:lightgreen;"&gtGREEN&lt/div&gt
            &lt/div&gt
            </code>
        </pre>

         </div>
    </div>
         
</body>