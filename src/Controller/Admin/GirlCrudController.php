<?php

namespace App\Controller\Admin;

use App\Entity\Girl;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GirlCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Girl::class;
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
