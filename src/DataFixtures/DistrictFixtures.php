<?php

namespace App\DataFixtures;

use App\Entity\District;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class DistrictFixtures extends Fixture
{

    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager)
    {
        $names = ["Centre", "Sud gare", "Thabor", "Bréquigny", "Le Blosne", "Villejean", "Beaulieu"];

        foreach ($names as $name) {
            $district = new District();
            $district->setName($name);
            $manager->persist($district);
            $slug = $this->slugger->slug($name)->lower()->toString();
            $this->setReference($slug, $district);
        }

        $manager->flush();
    }
}
