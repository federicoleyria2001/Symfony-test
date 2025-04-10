<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250321120534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipo (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipos DROP nombre, DROP ciudad, DROP pais, DROP fundacion, DROP estadio, DROP entrenador, DROP presidente, DROP colores, DROP liga, DROP presupuesto, DROP titulos_liga, DROP titulos_copa, DROP titulos_internacionales, DROP activo, DROP created_at, DROP updated_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipo');
        $this->addSql('ALTER TABLE equipos ADD nombre VARCHAR(100) NOT NULL, ADD ciudad VARCHAR(100) NOT NULL, ADD pais VARCHAR(100) NOT NULL, ADD fundacion DATE NOT NULL, ADD estadio VARCHAR(100) NOT NULL, ADD entrenador VARCHAR(100) DEFAULT NULL, ADD presidente VARCHAR(100) DEFAULT NULL, ADD colores VARCHAR(100) DEFAULT NULL, ADD liga VARCHAR(100) DEFAULT NULL, ADD presupuesto NUMERIC(15, 2) DEFAULT NULL, ADD titulos_liga INT DEFAULT 0, ADD titulos_copa INT DEFAULT 0, ADD titulos_internacionales INT DEFAULT 0, ADD activo TINYINT(1) DEFAULT 1, ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP, ADD updated_at DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
