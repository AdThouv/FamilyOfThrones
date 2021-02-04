<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Family;

class FamilyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $family = new Family();


        $manager->flush();
    }
}
