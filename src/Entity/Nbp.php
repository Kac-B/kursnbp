<?php

namespace App\Entity;

use App\Repository\NbpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NbpRepository::class)
 */
class Nbp
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $numerTabeli; //TODO: remove _

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $dataPublikacji;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nazwaWaluty;

    /**
     * @ORM\Column(type="integer")
     */
    private $przelicznik;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $kodWaluty;

    /**
     * @ORM\Column(type="integer")
     */
    private $kursSredni;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumerTabeli(): ?string
    {
        return $this->numer_tabeli;
    }

    public function setNumerTabeli(string $numer_tabeli): self
    {
        $this->numer_tabeli = $numer_tabeli;

        return $this;
    }

    public function getDataPublikacji(): ?string
    {
        return $this->data_publikacji;
    }

    public function setDataPublikacji(string $data_publikacji): self
    {
        $this->data_publikacji = $data_publikacji;

        return $this;
    }

    public function getNazwaWaluty(): ?string
    {
        return $this->nazwa_waluty;
    }

    public function setNazwaWaluty(string $nazwa_waluty): self
    {
        $this->nazwa_waluty = $nazwa_waluty;

        return $this;
    }

    public function getPrzelicznik(): ?int
    {
        return $this->przelicznik;
    }

    public function setPrzelicznik(int $przelicznik): self
    {
        $this->przelicznik = $przelicznik;

        return $this;
    }

    public function getKodWaluty(): ?string
    {
        return $this->kod_waluty;
    }

    public function setKodWaluty(string $kod_waluty): self
    {
        $this->kod_waluty = $kod_waluty;

        return $this;
    }

    public function getKursSredni(): ?int
    {
        return $this->kurs_sredni;
    }

    public function setKursSredni(int $kurs_sredni): self
    {
        $this->kurs_sredni = $kurs_sredni;

        return $this;
    }
}