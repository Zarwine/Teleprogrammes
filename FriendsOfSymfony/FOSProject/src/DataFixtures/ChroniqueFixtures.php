<?php

namespace App\DataFixtures;

use App\Entity\Chronique;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ChroniqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $signe = [
            "Capricorne",
            "Verseau",
            "Poissons",
            "Bélier",
            "Taureau",
            "Gémeaux",
            "Cancer",
            "Lion",
            "Vierge",
            "Balance",
            "Scorpion",
            "Sagitaire",
        ];

        for ($i=0; $i < count($signe) ; $i++) { 
            $chronique = new Chronique();
            $chronique->setSigneAstro($signe[$i]);
            $chronique->setCouple("Ceci est le texte de base");
            $chronique->setVie("Ceci est le texte de base");
            $chronique->setConseils("Ceci est le texte de base");
            $manager->persist($chronique);
    
            $manager->flush();
        }
    }
}
