<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322170519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloque_etsignale ADD id_envoie_id INT DEFAULT NULL, ADD id_blosig_id INT DEFAULT NULL, DROP id_envoie, DROP id_blosig');
        $this->addSql('ALTER TABLE bloque_etsignale ADD CONSTRAINT FK_BC347490C269885A FOREIGN KEY (id_envoie_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE bloque_etsignale ADD CONSTRAINT FK_BC347490C8763198 FOREIGN KEY (id_blosig_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_BC347490C269885A ON bloque_etsignale (id_envoie_id)');
        $this->addSql('CREATE INDEX IDX_BC347490C8763198 ON bloque_etsignale (id_blosig_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloque_etsignale DROP FOREIGN KEY FK_BC347490C269885A');
        $this->addSql('ALTER TABLE bloque_etsignale DROP FOREIGN KEY FK_BC347490C8763198');
        $this->addSql('DROP INDEX IDX_BC347490C269885A ON bloque_etsignale');
        $this->addSql('DROP INDEX IDX_BC347490C8763198 ON bloque_etsignale');
        $this->addSql('ALTER TABLE bloque_etsignale ADD id_envoie INT NOT NULL, ADD id_blosig INT NOT NULL, DROP id_envoie_id, DROP id_blosig_id');
    }
}
