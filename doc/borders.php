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
            
            <h1>Borders</h1>
        <h3>Border positions</h3>
        <div class="bg-light"></div>
            <div class="row">
                <div class="col">
                    <div class="border border-default" style="height:80px; width:80px; background-color:#f1f1f1; "></div>
                </div>

                <div class="col">
                    <div class="border-top border-default" style="height:80px; width:80px; background-color:#f1f1f1; "></div>
                </div>

                <div class="col">
                    <div class="border-right border-default" style="height:80px; width:80px; background-color:#f1f1f1; "></div>
                </div>

                <div class="col">
                    <div class="border-button border-default" style="height:80px; width:80px; background-color:#f1f1f1; "></div>
                </div>
                <div class="col">
                    <div class="border-left border-default" style="height:80px; width:80px; background-color:#f1f1f1; "></div>
                </div>
            </div>

            <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
                <code class="language-markup">
                &ltp class="border"&gt 
                &ltp class="border-top"&gt 
                &ltp class="border-right"&gt 
                &ltp class="border-button"&gt 
                &ltp class="border-left"&gt 
                     
                </code>
            </pre>
            <br>

            <h3>Bordeer Colors</h3>
            <div class="bg-light">
                <div class="row bg-light">
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-default" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>

                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-active" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>

                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-info" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>

                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-sucess" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-warning" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-danger" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-light" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-dark" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-black" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                    <div class="col" style="margin:10px;padding:10px;">
                        <div class="border border-white" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                    </div>
                </div>
            </div>
            <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
                    <code class="language-markup">
                    &ltp class="border-default"&gt 
                    &ltp class="border-active"&gt 
                    &ltp class="border-info"&gt 
                    &ltp class="border-sucess"&gt 
                    &ltp class="border-warning"&gt 
                    &ltp class="border-danger"&gt 
                    &ltp class="border-light"&gt 
                    &ltp class="border-dark"&gt 
                    &ltp class="border-white"&gt 
                    &ltp class="border-black"&gt 

                    </code>
                </pre>
                <br>

                     <h3>Border Ratios</h3>
         
         
             <div class="row bg-light">
                 <div class="col" style="margin:10px;padding:10px;">
                     <div class="border rounded" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                 </div>

                 <div class="col" style="margin:10px;padding:10px;">
                     <div class="border rounded-top" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                 </div>
                 
                 <div class="col" style="margin:10px;padding:10px;">
                     <div class="border rounded-right" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                 </div>
                 
                 <div class="col" style="margin:10px;padding:10px;">
                     <div class="border rounded-button" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                 </div>
                 
                 <div class="col" style="margin:10px;padding:10px;">
                     <div class="border rounded-left" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                 </div>
                 
                 <div class="col" style="margin:10px;padding:10px;">
                         <div class="border circle" style="height:50px; width:50px; background-color:#f1f1f1; "></div>
                </div>
                </div>


         
         <!--Aqui ficam os codigos -->
         <h5 class="text-right info">Samples</h5>
         <pre>
                     <code class="language-markup">
                     &ltp class="border rounded"&gt 
                     &ltp class="border rounded-top"&gt 
                     &ltp class="border rounded-right"&gt 
                     &ltp class="border rounded-button"&gt 
                     &ltp class="border rounded-left"&gt 
                     &ltp class="border circle"&gt 
                        
                     </code>
                 </pre>
            
            </div>

    </div>
         
</body>