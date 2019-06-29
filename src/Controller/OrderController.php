<?php

namespace App\Controller;

use App\Services\ListOrder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="order")
     */
    public function index(ListOrder $listOrder, EntityManagerInterface $em)
    {
        return $this->render('order/index.html.twig', [
            'list_order' => $listOrder->getOrders(),
        ]);
    }
}
