<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\UserProductsRegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;

class UserProductsRegistryController extends AbstractController
{
    /**
     * @Route("/user/products/registry", name="user_products_registry")
     */
    /*public function index(): Response
    {
        return $this->render('user_products_registry/index.html.twig', [
            'controller_name'=>'user_products_registryController',
        ]);
    }*/


    /*public function new(Request $request): Response{
        //1ere technique "Creating forms in controller" pour créer un form sans une classe formtype
        // creates a task object and initializes some data for this example
        $produit = new Produit();
        $produit->setTask('write a blog post');
        $produit->setDueDate(new \DateTime('tomorrrow'));

        $form = $this->createFormBuilder($produit)
            ->add('task',TextType::class)
            ->add('dueDate',DateType::class)
            ->add('save',SubmitType::class, ['label'=>'Create task'])
            ->getForm();
    }*/
    public function new():Response{
        //2eme technique "Creating form in classes"  créer un form avec l'utilisation de la classe TaskType ( il faut priviligier cette technique
        // pour qu'il y ai le moins de code au niveau du controlleur
        // creates a task object and initializes some data for this example
        $produit = new Produit();
        $produit->setProdNom('le nom de votre produit', 'Nom du Produit');
        $produit->setDepositDate(new \DateTime('tomorrow'));
        $form = $this->createForm(UserProductsRegisterType::class,$produit);

        return $this->render('user_products_registry/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }

}
