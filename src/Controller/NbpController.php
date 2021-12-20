<?php

namespace App\Controller;

use App\Entity\Nbp;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\NbpRepository;

use App\Api\CurrencyNbpApi;

/**
 * @Route ("/nbp",name="nbp.")
 */
class NbpController extends AbstractController
{
    private CurrencyNbpApi $currencyNbpApi;
    private NbpRepository $nbpRepository;

    public function __construct(CurrencyNbpApi $currencyNbpApi, NbpRepository $nbpRepository)
    {
        $this->currencyNbpApi = $currencyNbpApi;
        $this->nbpRepository = $nbpRepository;
    }

    /**
     * @Route ("/",name="nbp.")
     * @param NbpRepository $kursRepository
     * @return Response
     */
    public function index(NbpRepository $kursRepository)
    {
        $kursS = $kursRepository->findAll();

        return $this->render('nbp/index.html.twig', [
            'controller_name' => 'NbpController',
        ]);
    }

    /**
     * @Route ("/createnbp",name="createnbp")
     * @param Request $request
     * @return Response
     */
    public function createnbp(ManagerRegistry $doctrine): Response
    {
        $lastCurrency = $this->currencyNbpApi->getLast();

        if (!empty($lastCurrency)) {
            $this->nbpRepository->create($lastCurrency);
        }

        // return new Response(content: 'Numer tabeli ' . $kurs->getNumerTabeli());
    }
}