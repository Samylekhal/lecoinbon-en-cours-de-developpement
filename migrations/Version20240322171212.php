<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322171212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat ADD id_p1_id INT DEFAULT NULL, ADD id_p2_id INT DEFAULT NULL, DROP id_p1, DROP id_p2');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AAE2D504 FOREIGN KEY (id_p1_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE chat ADD CONSTRAINT FK_659DF2AA12577AEA FOREIGN KEY (id_p2_id) REFERENCES profil (id)');
        $this->addSql('CREATE INDEX IDX_659DF2AAE2D504 ON chat (id_p1_id)');
        $this->addSql('CREATE INDEX IDX_659DF2AA12577AEA ON chat (id_p2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat DROP FOREIGN KEY FK_659DF2AAE2D504');
        $this->addSql('ALTER TABLE chat DROP FOREIGN KEY FK_659DF2AA12577AEA');
        $this->addSql('DROP INDEX IDX_659DF2AAE2D504 ON chat');
        $this->addSql('DROP INDEX IDX_659DF2AA12577AEA ON chat');
        $this->addSql('ALTER TABLE chat ADD id_p1 INT NOT NULL, ADD id_p2 INT NOT NULL, DROP id_p1_id, DROP id_p2_id');
    }
}
