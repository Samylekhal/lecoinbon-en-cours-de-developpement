<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322165948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note ADD id_vendeur_id INT DEFAULT NULL, ADD id_notateur_id INT DEFAULT NULL, DROP id_vendeur, DROP id_notateur');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA1420068689 FOREIGN KEY (id_vendeur_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14C9CFDD7F FOREIGN KEY (id_notateur_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA1420068689 ON note (id_vendeur_id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA14C9CFDD7F ON note (id_notateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA1420068689');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14C9CFDD7F');
        $this->addSql('DROP INDEX IDX_CFBDFA1420068689 ON note');
        $this->addSql('DROP INDEX IDX_CFBDFA14C9CFDD7F ON note');
        $this->addSql('ALTER TABLE note ADD id_vendeur INT NOT NULL, ADD id_notateur INT NOT NULL, DROP id_vendeur_id, DROP id_notateur_id');
    }
}
