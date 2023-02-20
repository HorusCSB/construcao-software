<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pão e Circo</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/principal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/scripts/home.js"></script>
    <script src="assets/scripts/formToJson.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/styles/jquery.rateyo.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


</head>

<body>
    <div id="interface">
        <header id="cabecalho">
            <table>
                <tr>
                    <td rowspan="3"><img class="logo" src="img/paoecirco.png"></td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>Buscar:</td>
                                <td><input id="buscaTroca" type="text"></td>
                                <td><button id="btnBusca">Pesquisar</button></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id="cab">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td id="nav-create-account" class="nav-click" onclick="loadPage('create-account-page')">
                                    Crie sua Conta</td>
                                <td id="nav-login" class="nav-click" onclick="loadPage('login-page')">Entre</td>
                                <td id="nav-anuncie-page" class="nav-click" onclick="loadPage('anuncie-page')">Anuncie</td>

                                <td id="nav-gerenciar-perfil" class="nav-click"
                                    onclick="loadPage('gerenciar-perfil-page')">Gerenciar perfil</td>
                                <td id="nav-rate" class="nav-click" onclick="loadPage('rate-user-page')">Avaliação</td>
                                <td id="nav-exit" class="nav-click" onclick="logout()">Sair</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </header>

        <section id="corpo">
        </section>

        <footer id="rodape">
            <div>
                <p>Copyright 2023 @ UEM.br LTDA</p>
                <p>Contato: (44)99999-9999 E-mail: contato@ contato.com</p>
            </div>
        </footer>
    </div>
</body>

</html>