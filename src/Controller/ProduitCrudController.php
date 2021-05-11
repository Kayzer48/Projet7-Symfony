<?php

namespace App\Controller;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }



    public function configureFields(string $pageName): iterable
    {
         return [
            IntegerField::new("id",'ID')->onlyOnIndex(),
            TextField::new('prod_nom', 'Nom du Produit'),
            AssociationField::new('produit', 'Nom de l\'utilisateur')->onlyOnIndex(),
            ImageField::new('prod_image','Image')->setBasePath("/images/")->setUploadDir("public\images"),
            TextField::new('category', 'Catégorie')->onlyOnIndex(),
            TextEditorField::new('prod_description', 'Description'),
            IntegerField::new('prod_quantite_stock', 'Quantité en stock'),
            MoneyField::new('prod_prix','Prix')-> setCurrency('EUR'),
            //BooleanField::new('stock_product', 'En Stock'),
            DateField::new('deposit_date', 'Date du dépôt'),


        ];
    }

}
