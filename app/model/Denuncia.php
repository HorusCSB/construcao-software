<?php
class Denuncia
{
    private $id;
    private $idAnuncio;
    private $categoria;
    private $justificativa;
    private $data;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdAnuncio()
    {
        return $this->idAnuncio;
    }

    public function setIdAnuncio($idAnuncio)
    {
        $this->idAnuncio = $idAnuncio;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getJustificativa()
    {
        return $this->justificativa;
    }

    public function setJustificativa($justificativa)
    {
        $this->justificativa = $justificativa;
    }
    
    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}
?>