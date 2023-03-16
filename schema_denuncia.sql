CREATE TABLE denuncias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idAnuncio INT,
    categoria VARCHAR(64),
    justificativa VARCHAR(512),
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP

    /* FOREIGN KEY (idAnuncio) REFERENCES anuncios(id) ON DELETE CASCADE */
);