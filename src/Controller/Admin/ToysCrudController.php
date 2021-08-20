<?php

namespace App\Controller\Admin;

use App\Entity\Toys;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ToysCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Toys::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
