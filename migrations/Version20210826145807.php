<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210826145807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products_baby DROP FOREIGN KEY FK_B7B4F342E288954');
        $this->addSql('ALTER TABLE products_girl DROP FOREIGN KEY FK_15A91804976414B1');
        $this->addSql('CREATE TABLE maison (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mode (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_mode (products_id INT NOT NULL, mode_id INT NOT NULL, INDEX IDX_1BDD89A16C8A81A9 (products_id), INDEX IDX_1BDD89A177E5854A (mode_id), PRIMARY KEY(products_id, mode_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_maison (products_id INT NOT NULL, maison_id INT NOT NULL, INDEX IDX_7F3F3D476C8A81A9 (products_id), INDEX IDX_7F3F3D479D67D8AF (maison_id), PRIMARY KEY(products_id, maison_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products_mode ADD CONSTRAINT FK_1BDD89A16C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_mode ADD CONSTRAINT FK_1BDD89A177E5854A FOREIGN KEY (mode_id) REFERENCES mode (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_maison ADD CONSTRAINT FK_7F3F3D476C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_maison ADD CONSTRAINT FK_7F3F3D479D67D8AF FOREIGN KEY (maison_id) REFERENCES maison (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE baby');
        $this->addSql('DROP TABLE girl');
        $this->addSql('DROP TABLE products_baby');
        $this->addSql('DROP TABLE products_girl');
        $this->addSql('ALTER TABLE products ADD size VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products_maison DROP FOREIGN KEY FK_7F3F3D479D67D8AF');
        $this->addSql('ALTER TABLE products_mode DROP FOREIGN KEY FK_1BDD89A177E5854A');
        $this->addSql('CREATE TABLE baby (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE girl (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE products_baby (products_id INT NOT NULL, baby_id INT NOT NULL, INDEX IDX_B7B4F346C8A81A9 (products_id), INDEX IDX_B7B4F342E288954 (baby_id), PRIMARY KEY(products_id, baby_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE products_girl (products_id INT NOT NULL, girl_id INT NOT NULL, INDEX IDX_15A918046C8A81A9 (products_id), INDEX IDX_15A91804976414B1 (girl_id), PRIMARY KEY(products_id, girl_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE products_baby ADD CONSTRAINT FK_B7B4F342E288954 FOREIGN KEY (baby_id) REFERENCES baby (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_baby ADD CONSTRAINT FK_B7B4F346C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_girl ADD CONSTRAINT FK_15A918046C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_girl ADD CONSTRAINT FK_15A91804976414B1 FOREIGN KEY (girl_id) REFERENCES girl (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE maison');
        $this->addSql('DROP TABLE mode');
        $this->addSql('DROP TABLE products_mode');
        $this->addSql('DROP TABLE products_maison');
        $this->addSql('ALTER TABLE products DROP size');
    }
}
