<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anúncio</title>
    <link rel="stylesheet" type="text/css" href="assets/estilos/principal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/scripts/home.js"></script>
    <script src="assets/scripts/formToJson.min.js"></script>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div id="interface">
        <header id="cabecalho">
            <table>
                <tr>
                    <td rowspan="3"><img class="logo" src="/img/paoecirco.png"></td>
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
                                <td id="nav-create-account" class="nav-click" onclick="loadPage('create-account-page')">
                                    Crie sua Conta</td>
                                <td id="nav-login" class="nav-click" onclick="loadPage('login-page')">Entre</td>
                                <td class="nav-click">Anuncie</td>
                                <td id="nav-gerenciar-perfil" class="nav-click"
                                    onclick="loadPage('gerenciar-perfil-page')">Gerenciar perfil</td>
                                <td id="nav-exit" class="nav-click" onclick="logout()">Sair</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </header>

        <section id="corpo">
            <h3>Editar Anuncio</h3>
            <div class="container">
                <form>
                   <div class="form-group">
                        <label for="título">Título</label>
                        <input class="form-control" type="text" placeholder="Título"/>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <input class="form-control" type="text" placeholder="Categoria"/>
                    </div>

                    <div class="form-group">
                        <label for="Fotos ">Fotos</label>
                        <form>
                          <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        </form>
                    </div>
                    
                    <div class="form-group">
                        <label for="Quantidade">Quantidade</label>
                        <input class="form-control" type="text" placeholder="Quantidade"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="Item de interesse">Item de interesse</label>
                        <input class="form-control" type="text" placeholder="Item de interesse"/>
                    </div>

                    <div class="form-group">
                        <label for="Valor estimado">Valor estimado</label>
                        <input class="form-control" type="text" placeholder="Valor estimado"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="Cidade">Cidade</label>
                        <input class="form-control" type="text" placeholder="Cidade"/>
                    </div>

                    <label for="descrição">Descrição</label>
                    <textarea class="form-control" id="descrição"></textarea>

                    <input class="btn btn-primary pull-right" type="submit" value="Salvar">
                </form>
            </div>
        </section>

        <footer id="rodape">
            <table>
                <tr>
                    <td rowspan="3"><img class="logo" src="/img/paoecirco.png"></td>
                    <td width="35%"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <p>Copyright 2022 @ UEM.br LTDA</p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <p>Contato: (44)99999-9999 E-mail: contato@ contato.com</p>
                    </td>
                </tr>
            </table>
        </footer>
    </div>
</body>

</html>