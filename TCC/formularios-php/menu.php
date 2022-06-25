<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro Aberto</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
        
/* Todos os elementos da página */

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}



/* Elementos de tag <fieldset>*/
fieldset {
    border: 0;
}

/* Elemento de tag <body> */
body{
    background-color: #F0F8FF;
    font-family: sans-serif;
    font-size: 1em;
    color: #59429d;
    margin-left: 2%;
    margin-top: 2%;
    justify-content: center;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}


        body{
            background-image: url(img/estante.jpg);
        }
    .texto p:nth-child(1){
    font-family:sans-serif;
    color:#f6f5f5;
    text-shadow: black 0.1em 0.1em 0.2em;
    font-size: 60px;
    line-height: 65px;
}
.texto p{
    line-height: 0px;
    margin:45px 0px 25px;
}
.texto{
    position: absolute;
    left: 13%;
    top: 42%;
    transform:translate(-13%, -42%)
}
/* Elemento de classe "botão empréstimo*/
.texto button{
    width: 200px;
    height: 50px;
    border-radius: 10px; 
    font-family: sans-serif;
    font-weight: bold;
    font-size: 16px; 
    outline: none;
    margin: 0px 10px;
}
.emprestimo-btn{
    border: 2px solid #373636;
    color: #373636;
}
button:active{
    transform:scale(1.02);
}
.emprestimo-btn{
    font-size: 1.2em;
    background: #59429d;
    border: 0;
    margin-bottom: 1em;
    color: #ffffff;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
 
}
.emprestimo-btn:hover {
    background: #CCBBFF;
    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: none;
}

.emprestimo-btn, select{
    cursor: pointer;
}

    </style>
</head>
<body>

<div class="texto">
            <P> Bem vindo a biblioteca <br> Livro Aberto</P>
            <a href="./emprestimo.php"><button class="emprestimo-btn">Cadastrar Empréstimo</button></a>
            
        </div>
        </body>
</html>