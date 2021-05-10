<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UtilisateursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Utilisateurs::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new("id",'ID')->onlyOnIndex(),
            //TextField::new('user_username','Pseudo'),
            ChoiceField::new('roles', 'Roles')
                ->allowMultipleChoices(true)
                ->autocomplete()
                ->setChoices([
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_ADMIN' => 'ROLE_ADMIN'
                ]),
            //TextField::new('user_nom','Nom de l\'utilisateur'),
            //TextField::new('user_prenom','Prénom de l\'utilisateur'),
            //TextField::new('user_adresse','Adresse'),
            TextField::new('email','Email'),
            TextField::new('password','Mot de passe')->onlyOnIndex(),

        ];
    }

}
