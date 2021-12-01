<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211129125343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE destination (id INT AUTO_INCREMENT NOT NULL, tour_operator_id INT NOT NULL, location VARCHAR(255) NOT NULL, price INT NOT NULL, INDEX IDX_3EC63EAA3813CA60 (tour_operator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tour_operator (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, grade INT NOT NULL, link VARCHAR(255) NOT NULL, is_premium TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE destination ADD CONSTRAINT FK_3EC63EAA3813CA60 FOREIGN KEY (tour_operator_id) REFERENCES tour_operator (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destination DROP FOREIGN KEY FK_3EC63EAA3813CA60');
        $this->addSql('DROP TABLE destination');
        $this->addSql('DROP TABLE tour_operator');
    }
}
