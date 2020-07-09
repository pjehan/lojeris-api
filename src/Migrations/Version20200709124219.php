<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200709124219 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property ADD picture_id INT DEFAULT NULL, DROP picture');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDEEE45BDBF FOREIGN KEY (picture_id) REFERENCES media_object (id)');
        $this->addSql('CREATE INDEX IDX_8BF21CDEEE45BDBF ON property (picture_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDEEE45BDBF');
        $this->addSql('DROP INDEX IDX_8BF21CDEEE45BDBF ON property');
        $this->addSql('ALTER TABLE property ADD picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP picture_id');
    }
}
