<?php

namespace App\DataFixtures;

use App\Data\ListeActus;
use App\Data\ListeAvis;
use App\Entity\Actus;
use App\Entity\Avis;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class ActusFixture extends Fixture
{
    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        foreach (ListeActus::$mesActus as $monActus) {
            $actus = new Actus(
                $monActus['titreActus'],
                $monActus['contenuActus'],
                new DateTime($monActus['dateActus'])
            );

            $manager->persist($actus);

        }

        $manager->flush();
    }
}
