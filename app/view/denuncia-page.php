    <link rel="stylesheet" type="text/css" href="assets/styles/denuncia.css">
    <script type="text/javascript" src="./scripts/denuncia.js"></script>
    <section id="denuncia-page">
    	<form id="addComentario">
        	<div id="produtoD">
                    <table>
                        <tr>
                            <td>
                                <figure>
                                    <div id="anunciofoto"><img src="./img/banner1.png"></div>
                                </figure>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <p><b>Produto:</b> Camiseta Metais</p>
                                    </tr>
                                    <tr>
                                        <p><b>Ofertante:</b> José Maria</p>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <textarea id="coment"></textarea>
                <br>
                <input type="button" value="Enviar" id="Enviar" onclick="enviarDenuncia()">
		<input type="reset" value="Limpar">
   	</form>
   </section>
