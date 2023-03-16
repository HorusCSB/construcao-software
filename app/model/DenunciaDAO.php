<?php
class DenunciaDAO
{
    private $pdo;

    function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function create(Denuncia $denuncia)
    {
        $stmt = $this->pdo->prepare("INSERT INTO denuncias(idAnuncio, categoria, justificativa) VALUES (?, ?, ?)");

        $stmt->execute([
            $denuncia->getIdAnuncio(),
            $denuncia->getCategoria(),
            $denuncia->getJustificativa()
        ]);

        $denuncia->setId($this->pdo->lastInsertId());
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM denuncias WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if($data)
        {
            return $this->constructFromData($data);
        }
        return null;
    }

    public function findByIdAnuncio($idAnuncio)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM denuncias WHERE idAnuncio = ?");
        $stmt->execute([$idAnuncio]);
        $dataArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $denuncias = [];

        if($dataArray)
        {
            foreach($dataArray as $data)
            {
                $denuncias[] = $this->constructFromData($data);
            }
        }
        return $denuncias;
    }

    public function countByIdAnuncio($idAnuncio)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM denuncias WHERE idAnuncio = ?");
        $stmt->execute([$idAnuncio]);

        if($stmt->rowCount() > 0)
        {
            return $stmt->fetchColumn();
        }
        return 0;
    }

    private function constructFromData($data)
    {
        $d = new Denuncia();

        $d->setId($data['id']);
        $d->setIdAnuncio($data['idAnuncio']);
        $d->setCategoria($data['categoria']);
        $d->setJustificativa($data['justificativa']);
        $d->setData($data['data']);

        return $d;
    }
}
?>