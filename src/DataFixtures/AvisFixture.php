<?php

namespace App\DataFixtures;

use App\Data\ListeAvis;
use App\Entity\Avis;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class AvisFixture extends Fixture
{
    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        foreach (ListeAvis::$mesAvis as $monAvis) {
            $avis = new Avis(
                $monAvis['auteurAvis'],
                $monAvis['noteAvis'],
                $monAvis['contenuAvis'],
                new DateTime($monAvis['dateAvis'])
            );

            $manager->persist($avis);

        }

        $manager->flush();
    }
}
