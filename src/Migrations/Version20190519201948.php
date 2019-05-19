<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190519201948 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE info_animal DROP FOREIGN KEY info_animal_ibfk_1');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, nombre_usuario VARCHAR(255) NOT NULL, apellido VARCHAR(255) NOT NULL, edad VARCHAR(255) NOT NULL, dni INT NOT NULL, imagen_dni VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE info_animal');
        $this->addSql('DROP TABLE usuario_dar_adopcion');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE info_animal (id_animal INT AUTO_INCREMENT NOT NULL, id_usuarios INT NOT NULL, foto VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, nombre_animal VARCHAR(40) DEFAULT NULL COLLATE latin1_swedish_ci, tipo_animal VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, edad_animal VARCHAR(15) NOT NULL COLLATE latin1_swedish_ci, otros VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, descripcion TEXT DEFAULT NULL COLLATE latin1_swedish_ci, INDEX id_usuarios (id_usuarios), PRIMARY KEY(id_animal)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE usuario_dar_adopcion (id_usuario INT AUTO_INCREMENT NOT NULL, correo VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, clave VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, nombre_usuario VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci, dni INT DEFAULT NULL, PRIMARY KEY(id_usuario)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE info_animal ADD CONSTRAINT info_animal_ibfk_1 FOREIGN KEY (id_usuarios) REFERENCES usuario_dar_adopcion (id_usuario)');
        $this->addSql('DROP TABLE usuario');
    }
}
