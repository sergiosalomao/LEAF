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
             
        <h1>Forms</h1>
        <h3>Form Style</h3>
        <div class="bg-light">
            <div class="row">
                <div class="col-sm">      
                <form>
                    <div class="form-group">
                        <label for="inputUser">User</label>
                        <input type="pass" class="form-control" id="inputUser" placeholder="User Name">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputMail">Email</label>
                        <input type="email" class="form-control" id="inputMail" placeholder="name@example.com">
                    </div>

                   <div class="form-group">
                        <label for="inputPass">Password</label>
                        <input type="pass" class="form-control" id="inputPass" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="selectControl">Example select</label>
                        <select class="form-control" id="selectControl">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
            
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" cols="100" ></textarea>
                </div>
               </form>

            </div>
        </div>
        
        </div> 
        <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
             <code class="language-markup">
             &ltform&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="inputUser"&gtUser&lt/label&gt
                        &ltinput type="pass" class="form-control" id="inputUser" placeholder="User Name"&gt
                    &lt/div&gt
                    
                    &ltdiv class="form-group"&gt
                        &ltlabel for="inputMail"&gtEmail&lt/label&gt
                        &ltinput type="email" class="form-control" id="inputMail" placeholder="name@example.com"&gt
                    &lt/div&gt

                   &ltdiv class="form-group"&gt
                        &ltlabel for="inputPass"&gtPassword&lt/label&gt
                        &ltinput type="pass" class="form-control" id="inputPass" placeholder="password"&gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="selectControl"&gtExample select&lt/label&gt
                        &ltselect class="form-control" id="selectControl"&gt
                        &ltoption&gt1&lt/option&gt
                        &ltoption&gt2&lt/option&gt
                        &ltoption&gt3&lt/option&gt
                        &ltoption&gt4&lt/option&gt
                        &ltoption&gt5&lt/option&gt
                        &lt/select&gt
                    &lt/div&gt
            
                &ltdiv class="form-group"&gt
                    &ltlabel for="exampleFormControlSelect2"&gtExample multiple select&lt/label&gt
                    &ltselect multiple class="form-control" id="exampleFormControlSelect2"&gt
                    &ltoption&gt1&lt/option&gt
                    &ltoption&gt2&lt/option&gt
                    &ltoption&gt3&lt/option&gt
                    &ltoption&gt4&lt/option&gt
                    &ltoption&gt5&lt/option&gt
                    &lt/select&gt
                &lt/div&gt
                &ltdiv class="form-group"&gt
                    &ltlabel for="exampleFormControlTextarea1"&gtExample textarea&lt/label&gt
                    &lttextarea class="form-control" id="exampleFormControlTextarea1" rows="10" cols="100" &gt&lt/textarea&gt
                &lt/div&gt
               &lt/form&gt
 
            </code>
            </pre>
        <br>

         

  <h3>Form Style</h3>
        <div class="bg-light">
            <div class="row">
                <div class="col-sm">      
                <form>
                    <div class="form-group">
                        <label for="inputUser">Form Small</label>
                        <input type="pass" class="form-control sm" id="inputUser" placeholder="User Name">
                    </div>

                     <div class="form-group">
                        <label for="inputUser">Form Large</label>
                        <input type="pass" class="form-control lg" id="inputUser" placeholder="User Name">
                    </div>

               
               </form>

            </div>
        </div>
        
        </div> 
        <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
             <code class="language-markup">
             &ltform&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="inputUser"&gtForm Small&lt/label&gt
                        &ltinput type="pass" class="form-control sm" id="inputUser" placeholder="User Name"&gt
                    &lt/div&gt

                     &ltdiv class="form-group"&gt
                        &ltlabel for="inputUser"&gtForm Large&lt/label&gt
                        &ltinput type="pass" class="form-control lg" id="inputUser" placeholder="User Name"&gt
                    &lt/div&gt
               &lt/form&gt   
            </code>
            </pre>
        <br>


  

  <h3>Input types</h3>
 
        <div class="bg-light">
            <div class="row">
                <div class="col-sm">      
                <form>
               
                <div class="form-group input-icon">
                    <span class="fa fa-search danger"></span>
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                
                  <div class="form-group input-icon">
                    <span class="fa fa-envelope warning"></span>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                
                  <div class="form-group input-icon">
                    <span class="fa fa-user active"></span>
                    <input type="text" class="form-control" placeholder="User">
                  </div>
               
            </form>
               
            </div>
        </div>
        
        </div> 
        <!--Aqui ficam os codigos -->
            <h5 class="text-right info">Samples</h5>
            <pre>
             <code class="language-markup">
             &ltdiv class="form-group input-icon"&gt
                    &ltspan class="fa fa-search danger"&gt&lt/span&gt
                    &ltinput type="text" class="form-control" placeholder="Search"&gt
                  &lt/div&gt
                
                  &ltdiv class="form-group input-icon"&gt
                    &ltspan class="fa fa-envelope warning"&gt&lt/span&gt
                    &ltinput type="text" class="form-control" placeholder="Email"&gt
                  &lt/div&gt
                
                  &ltdiv class="form-group input-icon"&gt
                    &ltspan class="fa fa-user active"&gt&lt/span&gt
                    &ltinput type="text" class="form-control" placeholder="User"&gt
                  &lt/div&gt
               
                </code>
            </pre>
        <br>

        

    </div>
         
</body>