<?php

namespace App\Controller\Admin;


use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')->setTargetFieldName('name'),
            TextField::new('File')->setFormType(VichImageType::class),
            ImageField::new('File')
                ->setBasePath('uploads/images/')
                ->setUploadDir('public/uploads/images/')
                ->setRequired(false),
            TextField::new('Subtitle'),
            TextareaField::new('description'),
            BooleanField::new('isBest'),
            BooleanField::new('isNew'),
            BooleanField::new('soldOut'),
            MoneyField::new('price')->setCurrency('EUR'),
            AssociationField::new('baby'),
            AssociationField::new('girl'),
            AssociationField::new('boy'),
            AssociationField::new('toys')
            ];
    }

}
