<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
   <?php
   include 'navbar.php';
   ?>

    <style>
        body {
            background-color: rgb(125, 133, 207);
            
        }

        .menu {
            background-color: rgb(217, 217, 217);
            padding: 192px 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .cabecalho {
            color:black;
            text-align: center;
            margin-bottom: 60px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .campo5 {
            float: inline-start;
            margin-right: 50px;
        }

        .campo1 {
            width: 30%;
        }

        input {
            width: 400px;
            height: 30px;
        }

        .campo7 {
            float: inline-start;
            margin-right: 140px;
        }

        .campo9 {
            margin-left: 130px;
        }
    </style>
</head>
<body>
    <form action="cadastro.php" method="post" >
        <div class="menu">
       
            <div class="cabecalho">
                <h1>Cadastro </h1>
            </div>
            <div class="campo1">
                <h5>Nome:</h5>
                <input type="text" id="validationCustom01" placeholder="Insira seu nome" name="nome" value="">
            </div>
            <div class="campo2">
                <h5>Telefone:</h5>
                <input type="tel" id="validationCustom05" placeholder="Insira seu Telefone" name="telefone" value="">
            </div>
            <div class="campo3">
                <h5>E-mail:</h5>
                <input type="email" id="validationCustom03" placeholder="Insira seu email" name="email" value="">
            </div>
            <div class="campo4">
                <h5>Data de Nascimento:</h5>
                <input type="date" id="validationCustom04" name="data_nascimento" value="">
            </div>
            
            <div class="campo5">
                <h5>Cidade:</h5>
                <input type="text"  id="validationCustom06" placeholder="Insira sua Cidade" name="cidade" value="">
            </div>
            <div class="campo6">
                <h5>Sexo:</h5>
                <select class="personalizar-select" id="validationCustom07" name="sexo" value="">
                    <option class="personaliza r-option">informar</option>
                    <option class="personaliza r-option">Masculino</option>
                    <option class="personalizar-option">Feminino</option>
                </select>
            </div>
            <div class="campo9">
                <input type="submit" value="enviar" style="width: 65px;background-color: rgb(85, 128, 235); color: white;" name="">
                <input type="hidden" value="">
            </div>
        </div>
    </form>
</body>

</html>