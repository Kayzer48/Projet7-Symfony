<?php

namespace App\Controller\SuperAdmin;

use App\Controller\ProduitCrudController;
use App\Entity\CategorieProduit;
use App\Entity\Produit;
use App\Entity\Utilisateurs;
use App\Entity\Ville;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperAdminDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder= $this->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(ProduitCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Projet7 Symfony');
    }

    public function configureMenuItems(): iterable
    {
        return[
        MenuItem::section('Utilisateurs'),
            MenuItem::linkToCrud('Utilisateurs','fa fa-user', Utilisateurs::class),
            MenuItem::section('Produits'),
            MenuItem::linkToCrud('Produits','fa fa-tags', Produit::class),
            MenuItem::section('Villes'),
            MenuItem::linkToCrud('Villes','fa fa-tags', Ville::class),
            MenuItem::section('Catégories'),
            MenuItem::linkToCrud('Catégories','fa fa-tags', CategorieProduit::class),
        ];
    }
}
