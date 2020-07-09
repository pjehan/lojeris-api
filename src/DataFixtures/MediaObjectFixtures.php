<?php

namespace App\DataFixtures;

use App\Entity\MediaObject;
use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MediaObjectFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $fileNames = ["property-01.jpg", "property-02.jpg", "property-03.jpg", "property-04.jpg", "property-05.jpg"];

        foreach ($fileNames as $key => $fileName) {
            $photo = new MediaObject();
            $photo->filePath = $fileName;
            $manager->persist($photo);
            $this->addReference("photo" . ($key + 1), $photo);
        }

        $manager->flush();
    }

}
