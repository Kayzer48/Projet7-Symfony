<?php

namespace App\Form;

use App\Entity\CategorieProduit;
use App\Entity\Produit;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserProductsRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prodNom', TextType::class, [
                'label' => 'Nom du Produit'
            ])
            ->add('prodDescription', TextareaType::class, [
            'label' => 'Description'
            ])
            ->add('prodQuantiteStock', IntegerType::class,[
                'label' => 'Quantité en stock'
            ])
            ->add('prodPrix', MoneyType::class, [
                'label' => 'Prix'
            ])
            ->add('depositDate', DateType::class, [
                'label' => 'Dâte du dépot'
            ])
            ->add('prodImage',FileType::class, [
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
            ->add('category', EntityType::class, [
                'class'=> CategorieProduit::class,
                'choice_label' => 'catlibelle',
                'label' => 'Catégories'
            ])
            ->add('Ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
