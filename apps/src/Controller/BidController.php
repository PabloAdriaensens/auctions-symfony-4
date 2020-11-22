<?php

namespace App\Controller;

use App\Repository\AuctionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BidController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage", methods={"GET"})
     */
    public function homepage(AuctionRepository $auctionRepository): Response
    {
        return $this->render(
            'bid/bid.html.twig',
            [
                'auctions' => $auctionRepository->findAll(),
            ]
        );
    }

}
