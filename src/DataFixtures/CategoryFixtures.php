<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoryFixtures extends Fixture
{

    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager)
    {
        $names = ["Maison", "Appartement", "Terrain", "Garage"];

        foreach ($names as $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
            $slug = $this->slugger->slug($name)->lower()->toString();
            $this->setReference($slug, $category);
        }

        $manager->flush();
    }
}
