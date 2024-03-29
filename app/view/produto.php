<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pão e Circo</title>
	<link rel="stylesheet" type="text/css" href="assets/estilos/principal.css">
    <link rel="stylesheet" type="text/css" href="assets/estilos/produto.css">
    <script type="text/javascript" src="assets/scripts/produto.js"></script>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <table>
                <tr>
                    <td rowspan="3"><img class="logo" src="./img/paoecirco.png"></td>
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
                                <td width="60px"></td>
                                <td width="60px"></td>
                                <td width="60px"></td>
                                <td width="60px"></td>
                            </tr>
                            <tr>
                                <td>
                                    <select id="estado" name="estado"> 
                                        <option value="">Estado</option>
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
                                </td>
                                <td><a href="">Crie sua Conta</a></td>
                                <td><a href="">Entre</a></td>
                                <td><a href="">Anuncie</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </header>

        <aside id="lateral">
            <h3>Camiseta Metais</h3>
            <figure>
                <div id="anunciofoto"><img src="./img/banner1.png"></div>
            </figure>
            <p>Camiseta de boa qualidade para os amantes do metal</p>
            <div id="estvalor">
                <p><b>Valor Estimado</b></p>
                <p><b>R$ 1000,00</b></p>
            </div>
        </aside>

        <section id="corpo">
            <div id="titulo">
                <h3>Selecionar o produto para trocar...</h3>
            </div>

            <div id="boxprod">
                <br>
                <div id="whitebox">
                    <table>
                        <tr>
                            <td width="25%">
                                <figure>
                                    <div id="escolha"><img src="./img/banner2.png"></div>
                                </figure>
                            </td>
                            <td width="70%">
                                <p>Camiseta Michael Jordan</p>
                            </td>
                            <td width="10%">
                                <input type="checkbox" id="prodescolha" value='camMJ'>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="btn">
                    <input type="button" value="Enviar" id="Enviar">
                    <input type="button" value="Novo Produto" id="novoProd">
				    <input type="reset" value="Limpar">
                </div>
                <div id="coment">
                    <table id="bordatb">
                        <tr>
                            <td><b>Marcelo</b></td>
                        </tr>
                        <tr>
                            <td><p>Encomenda veio direitinho.</p></td>
                        </tr>
                        <tr>
                            <td><b>Santana</b></td>
                        </tr>
                        <tr>
                            <td><p>Chega rapido!</p></td>
                        </tr>
                    </table>
                </div>

                <div id="btncom">
                    <input type="button" value="Enviar Comentário" id="EnviarCom">
                    <input type="button" value="Denunciar Anuncio" id="DenAnun">
                </div>
                <br>
            </div>
        </section>

        <footer id="rodape">
            <table>
                <tr>
                    <td rowspan="3"><img class="logo" src="./img/paoecirco.png"></td>
                    <td width="35%"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><p>Copyright 2022 @ UEM.br LTDA</p></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><p>Contato: (44)99999-9999 E-mail: contato@ contato.com</p></td>
                </tr>
            </table>
        </footer>
    </div>
</body>
</html>