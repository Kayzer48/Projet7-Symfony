<?php

namespace App\Controller;

use App\Entity\Ville;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VilleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ville::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('ville_nom_commune', 'Nom de la commune'),
            TextField::new('ville_nom_departement', 'Nom du département'),
            TextField::new('ville_nom_region', 'Nom de la region'),
            TextField::new('ville_cp', 'Code Postal'),
        ];
    }

}
