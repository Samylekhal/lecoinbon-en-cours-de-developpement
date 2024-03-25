<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322125341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD id_vendeur_id INT DEFAULT NULL, DROP id_vendeur');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6620068689 FOREIGN KEY (id_vendeur_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_23A0E6620068689 ON article (id_vendeur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6620068689');
        $this->addSql('DROP INDEX IDX_23A0E6620068689 ON article');
        $this->addSql('ALTER TABLE article ADD id_vendeur INT NOT NULL, DROP id_vendeur_id');
    }
}
