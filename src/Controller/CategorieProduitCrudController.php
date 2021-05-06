<?php

namespace App\Controller;

use App\Entity\CategorieProduit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategorieProduit::class;
    }


    public function configureFields(string $pageName): iterable
    {
         return [
            IntegerField::new('id','ID')->onlyOnIndex(),
            TextField::new('cat_libelle','Libellé'),
        ];
    }

}
