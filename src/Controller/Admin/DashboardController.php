<?php

namespace App\Controller\Admin;

use App\Entity\Baby;
use App\Entity\Boy;
use App\Entity\Carrier;
use App\Entity\Girl;
use App\Entity\Order;
use App\Entity\Products;
use App\Entity\Toys;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(OrderCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Tiny and Pretty');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Orders', 'fas fa-shopping-cart', Order::class);
        yield MenuItem::linkToCrud('Baby', 'fas fa-baby', Baby::class);
        yield MenuItem::linkToCrud('Girl', 'fas fa-female', Girl::class);
        yield MenuItem::linkToCrud('Boy', 'fas fa-male', Boy::class);
        yield MenuItem::linkToCrud('Toys', 'fas fa-gamepad', Toys::class);
        yield MenuItem::linkToCrud('Products', 'fas fa-tag', Products::class);
        yield MenuItem::linkToCrud('Carrier', 'fas fa-truck', Carrier::class);
    }
}
