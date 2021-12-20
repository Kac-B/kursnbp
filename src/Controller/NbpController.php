<?php

namespace App\Controller;

use App\Entity\Nbp;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\NbpRepository;

//require("../src/Entity/Nbp.php");
/**
 * @Route ("/nbp",name="nbp.")
 */
class NbpController extends AbstractController
{

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
        //dwoload data from nbp 
        $xml = simplexml_load_file('http://www.nbp.pl/kursy/xml/LastA.xml');
        $json = json_encode($xml);
        $array = json_decode($json, true);

        //create new table
        //require("../src/Entity/Nbp.php");
        $kurs = new Nbp();
        $seriealizes_array = serialize($array);
        var_dump($seriealizes_array);

        /*
        $kurs->setNumerTabeli($numer_tabeli);
        $kurs->setDataPublikacji($data_publikacji);
        $kurs->setNazwaWaluty($nazwa_waluty);
        $kurs->setPrzelicznik($przelicznik);
        $kurs->setKodWaluty($kod_waluty);
        $kurs->setKursSredni($kurs_sredni);
        */
        //entity manager
        $em = $doctrine->getManager();
        $em->persist($seriealizes_array);
        $em->flush();

        //show data
        echo '<pre>';
        print_r($array);
        echo '</pre>';


        return new Response(content: 'Numer tabeli ' . $kurs->getNumerTabeli());
    }
}
