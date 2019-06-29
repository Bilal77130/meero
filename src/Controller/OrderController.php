<?php

namespace App\Controller;

use App\Services\ListOrder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="order")
     */
    public function index(ListOrder $listOrder)
    {
        return $this->render('order/index.html.twig', [
            'list_order' => $listOrder->getOrders(),
        ]);
    }
}
