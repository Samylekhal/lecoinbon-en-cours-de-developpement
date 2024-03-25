<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322164419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_listes_articles (article_id INT NOT NULL, listes_articles_id INT NOT NULL, INDEX IDX_7ACD61917294869C (article_id), INDEX IDX_7ACD6191C06666B3 (listes_articles_id), PRIMARY KEY(article_id, listes_articles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE listes_articles_profil (listes_articles_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_DE471B40C06666B3 (listes_articles_id), INDEX IDX_DE471B40275ED078 (profil_id), PRIMARY KEY(listes_articles_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_article (profil_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_872EC137275ED078 (profil_id), INDEX IDX_872EC1377294869C (article_id), PRIMARY KEY(profil_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_listes_articles ADD CONSTRAINT FK_7ACD61917294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_listes_articles ADD CONSTRAINT FK_7ACD6191C06666B3 FOREIGN KEY (listes_articles_id) REFERENCES listes_articles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE listes_articles_profil ADD CONSTRAINT FK_DE471B40C06666B3 FOREIGN KEY (listes_articles_id) REFERENCES listes_articles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE listes_articles_profil ADD CONSTRAINT FK_DE471B40275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_article ADD CONSTRAINT FK_872EC137275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_article ADD CONSTRAINT FK_872EC1377294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6620068689');
        $this->addSql('DROP INDEX IDX_23A0E6620068689 ON article');
        $this->addSql('ALTER TABLE article DROP id_vendeur_id');
        $this->addSql('ALTER TABLE listes_articles DROP id_profil');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_listes_articles DROP FOREIGN KEY FK_7ACD61917294869C');
        $this->addSql('ALTER TABLE article_listes_articles DROP FOREIGN KEY FK_7ACD6191C06666B3');
        $this->addSql('ALTER TABLE listes_articles_profil DROP FOREIGN KEY FK_DE471B40C06666B3');
        $this->addSql('ALTER TABLE listes_articles_profil DROP FOREIGN KEY FK_DE471B40275ED078');
        $this->addSql('ALTER TABLE profil_article DROP FOREIGN KEY FK_872EC137275ED078');
        $this->addSql('ALTER TABLE profil_article DROP FOREIGN KEY FK_872EC1377294869C');
        $this->addSql('DROP TABLE article_listes_articles');
        $this->addSql('DROP TABLE listes_articles_profil');
        $this->addSql('DROP TABLE profil_article');
        $this->addSql('ALTER TABLE article ADD id_vendeur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6620068689 FOREIGN KEY (id_vendeur_id) REFERENCES profil (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_23A0E6620068689 ON article (id_vendeur_id)');
        $this->addSql('ALTER TABLE listes_articles ADD id_profil INT NOT NULL');
    }
}
