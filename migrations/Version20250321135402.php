<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250321135402 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipo_futbol (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, ciudad VARCHAR(100) NOT NULL, pais VARCHAR(100) NOT NULL, fundacion DATE NOT NULL, estadio VARCHAR(100) NOT NULL, presidente VARCHAR(100) NOT NULL, colores VARCHAR(100) NOT NULL, liga VARCHAR(100) NOT NULL, presupuesto NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipo_futbol');
    }
}
