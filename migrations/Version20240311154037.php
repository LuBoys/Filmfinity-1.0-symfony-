<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240311154037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP profile_picture');
        $this->addSql('ALTER TABLE users DROP reset_token');
        $this->addSql('ALTER TABLE users DROP reset_token_expires_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE users ADD profile_picture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD reset_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD reset_token_expires_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
    }
}
