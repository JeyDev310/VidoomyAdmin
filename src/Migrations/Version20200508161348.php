<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200508161348 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE deals (id INT NOT NULL, publisher VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, whitelist_seats TEXT NOT NULL, bidfloor DOUBLE PRECISION NOT NULL, atribution_type INT NOT NULL, private_auction BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN deals.whitelist_seats IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE setup (id INT NOT NULL, publisher VARCHAR(255) NOT NULL, country VARCHAR(2) NOT NULL, name VARCHAR(50) NOT NULL, atribution_type INT NOT NULL, bidfloor DOUBLE PRECISION NOT NULL, blocked_categories TEXT DEFAULT NULL, blocked_advertisers TEXT DEFAULT NULL, whitelist_seats TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN setup.blocked_categories IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN setup.blocked_advertisers IS \'(DC2Type:array)\'');
        $this->addSql('COMMENT ON COLUMN setup.whitelist_seats IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE admin (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_880E0D76F85E0677 ON admin (username)');
        $this->addSql('CREATE SEQUENCE setup_id_seq START 1');
        $this->addSql('CREATE SEQUENCE deals_id_seq START 1');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE deals');
        $this->addSql('DROP TABLE setup');
        $this->addSql('DROP TABLE admin');
    }
}
