<?php

namespace App\DataFixtures;

use App\Entity\Feature;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class FeatureFixtures extends Fixture
{

    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager)
    {
        $names = ["Terrasse", "Cave", "Dressing", "Garage"];

        foreach ($names as $name) {
            $feature = new Feature();
            $feature->setName($name);
            $manager->persist($feature);
            $slug = $this->slugger->slug($name)->lower()->toString();
            $this->setReference($slug, $feature);
        }

        $manager->flush();
    }

}
