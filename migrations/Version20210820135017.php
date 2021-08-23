<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210820135017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accessory (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE baby (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE boy (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE filter (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE girl (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_baby (products_id INT NOT NULL, baby_id INT NOT NULL, INDEX IDX_B7B4F346C8A81A9 (products_id), INDEX IDX_B7B4F342E288954 (baby_id), PRIMARY KEY(products_id, baby_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_girl (products_id INT NOT NULL, girl_id INT NOT NULL, INDEX IDX_15A918046C8A81A9 (products_id), INDEX IDX_15A91804976414B1 (girl_id), PRIMARY KEY(products_id, girl_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_boy (products_id INT NOT NULL, boy_id INT NOT NULL, INDEX IDX_BB1C81F26C8A81A9 (products_id), INDEX IDX_BB1C81F260AB1C5A (boy_id), PRIMARY KEY(products_id, boy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_toys (products_id INT NOT NULL, toys_id INT NOT NULL, INDEX IDX_3D7448F96C8A81A9 (products_id), INDEX IDX_3D7448F968A10727 (toys_id), PRIMARY KEY(products_id, toys_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_accessory (products_id INT NOT NULL, accessory_id INT NOT NULL, INDEX IDX_F3CCC63A6C8A81A9 (products_id), INDEX IDX_F3CCC63A27E8CC78 (accessory_id), PRIMARY KEY(products_id, accessory_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE toys (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products_baby ADD CONSTRAINT FK_B7B4F346C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_baby ADD CONSTRAINT FK_B7B4F342E288954 FOREIGN KEY (baby_id) REFERENCES baby (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_girl ADD CONSTRAINT FK_15A918046C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_girl ADD CONSTRAINT FK_15A91804976414B1 FOREIGN KEY (girl_id) REFERENCES girl (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_boy ADD CONSTRAINT FK_BB1C81F26C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_boy ADD CONSTRAINT FK_BB1C81F260AB1C5A FOREIGN KEY (boy_id) REFERENCES boy (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_toys ADD CONSTRAINT FK_3D7448F96C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_toys ADD CONSTRAINT FK_3D7448F968A10727 FOREIGN KEY (toys_id) REFERENCES toys (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_accessory ADD CONSTRAINT FK_F3CCC63A6C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_accessory ADD CONSTRAINT FK_F3CCC63A27E8CC78 FOREIGN KEY (accessory_id) REFERENCES accessory (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products_accessory DROP FOREIGN KEY FK_F3CCC63A27E8CC78');
        $this->addSql('ALTER TABLE products_baby DROP FOREIGN KEY FK_B7B4F342E288954');
        $this->addSql('ALTER TABLE products_boy DROP FOREIGN KEY FK_BB1C81F260AB1C5A');
        $this->addSql('ALTER TABLE products_girl DROP FOREIGN KEY FK_15A91804976414B1');
        $this->addSql('ALTER TABLE products_toys DROP FOREIGN KEY FK_3D7448F968A10727');
        $this->addSql('DROP TABLE accessory');
        $this->addSql('DROP TABLE baby');
        $this->addSql('DROP TABLE boy');
        $this->addSql('DROP TABLE filter');
        $this->addSql('DROP TABLE girl');
        $this->addSql('DROP TABLE products_baby');
        $this->addSql('DROP TABLE products_girl');
        $this->addSql('DROP TABLE products_boy');
        $this->addSql('DROP TABLE products_toys');
        $this->addSql('DROP TABLE products_accessory');
        $this->addSql('DROP TABLE toys');
    }
}
