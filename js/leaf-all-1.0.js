function navbarResponsive() {
    var x = document.getElementById("mynavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}

function centralizeObj(objeto){
    var div = objeto.id; /*Informamos o nome da DIV.*/
      alert(objeto)  ;    
    var alturaTela  = screen.height; /*Atribuimos a variável alturaTela a resolução em Y altura da tela.*/
    var larguraTela = screen.width;  /*Atribuimos a variável larguraTela a resolução em X da tela.*/
     
    var widthDIV  = 500; /*Atribuimos a variável widthDIV a largura da nossa DIV.*/
    var heightDIV = 250; /*Atribuimos a variável heightDIV a altura da nossa DIV.*/
    alert(widthDIV);
    var posicaoX = (larguraTela / 2) - (widthDIV  / 2); /*Explicado logo abaixo.*/
    var posicaoY = (alturaTela  / 2) - (heightDIV / 2); /*A mesma explicação acima para largura se aplica aqui.*/
     
    /*A variável posicaoX faz o seguinte cálculo:
        laguraTela / 2. ex: 1366 / 2 = 683.
        widthDIV / 2. ex: 500 / 2 = 250.
        Por fim: 683 - 250 = 432.
        432 será a posição em PX onde nossa DIV deve começar.
    */
     
    document.getElementById(div).style.width  = widthDIV  + "px"; /*Através do Javascript acessamos a propriedade width do CSS e aplicamos a ela o valor em width para nossa DIV, este valor é especificado na variável widthDIV.*/
    document.getElementById(div).style.height = heightDIV + "px"; /*A mesma explicação para widthDIV se aplica aqui, porém aqui é atribuido o valor para altura, heightDIV.*/
     
    /*Através do document.getElementById() conseguimos acessar um objeto em nosso documento e ter acesso as suas propriedades.*/
     
    /*No bloco de código abaixo que a mágica acontece, acessamos a propriedade top e left e atribuimos os respectivos valores de nossos cálculos para o posicionamento em tela.*/
     
    document.getElementById(div).style.top  = posicaoY + "px"; /*Posição da tela referente ao eixo X.*/
    document.getElementById(div).style.left = posicaoX + "px"; /*Posição da tela referente ao eixo Y.*/
    
}
