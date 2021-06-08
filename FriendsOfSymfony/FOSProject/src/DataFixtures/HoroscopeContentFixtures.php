<?php

namespace App\DataFixtures;

use App\Entity\HoroscopeContent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HoroscopeContentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $json = file_get_contents(dirname(__DIR__)."/horoscope_all_data.json");
        $jsonArray = json_decode($json, true);

        for($i=0;$i<count($jsonArray);$i++) {
            $dataArray = array_values($jsonArray)[$i];
            for($j=0;$j<count($dataArray);$j++) {
                $jsonGroup[$j][$i] = $dataArray[$j];
            }
        }

        foreach($jsonGroup as $data) {
            $horoscope = new HoroscopeContent();
            $horoscope->setVotreCouple($data[0]);
            $horoscope->setVotreVieSolo($data[1]);
            $horoscope->setConseilsAmoureux($data[2]);
            $manager->persist($horoscope);
    
            $manager->flush();
        }

    }
}
