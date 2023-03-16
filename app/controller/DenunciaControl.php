<?php
class DenunciaControl
{
    public function create()
    {
        if(!isset($_GET['id']))
        {
            die("Erro: ID do anúncio não definido!");
        }

        if(isset($_POST['justificativa']))
        {
            try {
                $denuncia = new Denuncia();
                $dao = new DenunciaDAO();

                $denuncia->setIdAnuncio((int)$_GET['id']);
                $denuncia->setCategoria("teste");
                $denuncia->setJustificativa($_POST['justificativa']);

                $dao->create($denuncia);
            }
            catch (Exception $e) {
                echo "Erro ao criar denúncia: ".$e->getMessage();
            }
        }

        renderView('denuncia-page');
    }
}
?>