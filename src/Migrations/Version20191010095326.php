<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010095326 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE solution CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE enigma CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE clue CHANGE description description VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE clue CHANGE description description TEXT NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE enigma CHANGE description description TEXT NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE solution CHANGE description description TEXT NOT NULL COLLATE latin1_swedish_ci');
    }
}
