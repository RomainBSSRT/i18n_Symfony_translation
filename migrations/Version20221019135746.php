<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221019135746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE application (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, contact VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE language (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, iso2 VARCHAR(2) NOT NULL)');
        $this->addSql('CREATE TABLE phrase (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, application_id INTEGER DEFAULT NULL, app_key VARCHAR(512) NOT NULL, name VARCHAR(512) NOT NULL, CONSTRAINT FK_A24BE60C3E030ACD FOREIGN KEY (application_id) REFERENCES application (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A24BE60C3E030ACD ON phrase (application_id)');
        $this->addSql('CREATE TABLE translation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, language_id INTEGER NOT NULL, phrase_id INTEGER NOT NULL, name VARCHAR(512) DEFAULT NULL, CONSTRAINT FK_B469456F82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_B469456F8671F084 FOREIGN KEY (phrase_id) REFERENCES phrase (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_B469456F82F1BAF4 ON translation (language_id)');
        $this->addSql('CREATE INDEX IDX_B469456F8671F084 ON translation (phrase_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE application');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE phrase');
        $this->addSql('DROP TABLE translation');
    }
}
