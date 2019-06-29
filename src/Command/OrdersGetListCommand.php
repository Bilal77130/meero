<?php

namespace App\Command;

use App\Entity\Order;
use App\Services\ListOrder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class OrdersGetListCommand extends Command
{
    protected static $defaultName = 'orders:get-list';
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var ListOrder
     */
    private $listOrder;

    public function __construct(string $name = null, EntityManagerInterface $em, ListOrder $listOrder)
    {
        parent::__construct($name);
        $this->em = $em;
        $this->listOrder = $listOrder;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $orders = $this->listOrder->getOrders();

        foreach ($orders as $k => $order) {
            $oOrder = new Order();
            if (is_string($order['marketplace']) && $order['marketplace']) {
                $oOrder->setMarketplace($order['marketplace']);
            }
            if (is_string($order['idFlux']) && $order['idFlux']) {
                $oOrder->setIdFlux($order['idFlux']);
            }
            if (is_string($order['order_items']) && $order['order_items']) {
                $oOrder->setOrderStatus($order['order_items']);
            }
            if (is_string($order['order_id']) && $order['order_id']) {
                $oOrder->setOrderId($order['order_id']);
            }
            $this->em->persist($oOrder);
        }
        $this->em->flush();

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
