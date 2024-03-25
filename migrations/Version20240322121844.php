<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322121844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, id_article INT NOT NULL, id_vendeur INT NOT NULL, nom VARCHAR(255) NOT NULL, tag VARCHAR(255) DEFAULT NULL, photo LONGBLOB DEFAULT NULL, description LONGTEXT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, date_post DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bloque_etsignale (id INT AUTO_INCREMENT NOT NULL, id_envoie INT NOT NULL, id_blosig INT NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chat (id INT AUTO_INCREMENT NOT NULL, id_conv INT NOT NULL, id_p1 INT NOT NULL, id_p2 INT NOT NULL, contenue VARCHAR(255) NOT NULL, date_envoie DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE listes_articles (id INT AUTO_INCREMENT NOT NULL, id_profil INT NOT NULL, id_article INT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, id_vendeur INT NOT NULL, notesur5 DOUBLE PRECISION NOT NULL, id_notateur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE bloque_etsignale');
        $this->addSql('DROP TABLE chat');
        $this->addSql('DROP TABLE listes_articles');
        $this->addSql('DROP TABLE note');
    }
}
