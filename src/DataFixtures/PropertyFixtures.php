<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PropertyFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $property1 = new Property();
        $property1->setPrice(245000);
        $property1->setCategory($this->getReference("appartement"));
        $property1->setDistrict($this->getReference("sud-gare"));
        $property1->setSurface(80);
        $property1->setBedroom(2);
        $property1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue. Nunc id cursus metus aliquam eleifend mi in nulla posuere. A scelerisque purus semper eget duis at tellus. Suspendisse faucibus interdum posuere lorem ipsum dolor. Lorem donec massa sapien faucibus et molestie ac feugiat sed. Sagittis aliquam malesuada bibendum arcu vitae. Luctus accumsan tortor posuere ac ut consequat semper viverra nam. Elementum eu facilisis sed odio morbi quis commodo odio. Consectetur adipiscing elit duis tristique sollicitudin nibh. Porttitor lacus luctus accumsan tortor.");
        $property1->setPicture("property-01.jpg");
        $property1->setCreatedAt((new \DateTime())->modify("-1 day"));
        $manager->persist($property1);

        $property2 = new Property();
        $property2->setPrice(220000);
        $property2->setCategory($this->getReference("maison"));
        $property2->setDistrict($this->getReference("brequigny"));
        $property2->setSurface(320);
        $property2->setBedroom(3);
        $property2->setDescription("Consectetur a erat nam at lectus. Velit sed ullamcorper morbi tincidunt ornare massa. Lectus urna duis convallis convallis tellus id. Ridiculus mus mauris vitae ultricies leo integer malesuada. Eget nunc lobortis mattis aliquam faucibus purus in massa. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Molestie nunc non blandit massa enim nec. Tristique senectus et netus et. Vel orci porta non pulvinar neque. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Volutpat est velit egestas dui id ornare arcu. Magna fringilla urna porttitor rhoncus dolor purus. Ipsum nunc aliquet bibendum enim facilisis gravida. Dui vivamus arcu felis bibendum ut tristique et egestas. Orci eu lobortis elementum nibh tellus. At auctor urna nunc id cursus. Ultrices dui sapien eget mi proin sed libero enim. Tortor condimentum lacinia quis vel eros donec ac. Nunc lobortis mattis aliquam faucibus purus in massa tempor.");
        $property2->setPicture("property-02.jpg");
        $property2->setCreatedAt((new \DateTime())->modify("-10 day"));
        $manager->persist($property2);

        $property3 = new Property();
        $property3->setPrice(550000);
        $property3->setCategory($this->getReference("maison"));
        $property3->setDistrict($this->getReference("thabor"));
        $property3->setSurface(280);
        $property3->setBedroom(3);
        $property3->setDescription("Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. A scelerisque purus semper eget. Velit dignissim sodales ut eu sem integer vitae justo eget. Aliquam vestibulum morbi blandit cursus risus at ultrices. Egestas diam in arcu cursus euismod quis viverra nibh. Elementum tempus egestas sed sed risus pretium quam vulputate. Et malesuada fames ac turpis egestas maecenas pharetra. Vitae elementum curabitur vitae nunc sed. Rhoncus urna neque viverra justo nec. Sed felis eget velit aliquet. Tempus imperdiet nulla malesuada pellentesque elit eget. Facilisis sed odio morbi quis commodo. Sit amet facilisis magna etiam. In pellentesque massa placerat duis ultricies lacus sed turpis. Et egestas quis ipsum suspendisse ultrices. Consequat semper viverra nam libero. Amet risus nullam eget felis eget nunc lobortis. Sed augue lacus viverra vitae congue. Tortor dignissim convallis aenean et tortor at.");
        $property3->setPicture("property-03.jpg");
        $property3->setCreatedAt((new \DateTime())->modify("-15 day"));
        $manager->persist($property3);

        $property4 = new Property();
        $property4->setPrice(190000);
        $property4->setCategory($this->getReference("appartement"));
        $property4->setDistrict($this->getReference("sud-gare"));
        $property4->setSurface(65);
        $property4->setBedroom(1);
        $property4->setDescription("Pharetra convallis posuere morbi leo urna molestie. Non enim praesent elementum facilisis leo vel fringilla. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Gravida rutrum quisque non tellus. Lacus sed viverra tellus in hac. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Sodales ut eu sem integer vitae justo eget magna. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Sit amet porttitor eget dolor morbi non. Orci phasellus egestas tellus rutrum tellus pellentesque. Turpis egestas pretium aenean pharetra. Eu lobortis elementum nibh tellus. At augue eget arcu dictum varius duis at. Massa tincidunt dui ut ornare lectus. Dui faucibus in ornare quam viverra orci sagittis. Pellentesque elit eget gravida cum sociis natoque penatibus. Senectus et netus et malesuada. Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Leo integer malesuada nunc vel risus. Arcu dui vivamus arcu felis bibendum ut tristique et.");
        $property4->setPicture("property-04.jpg");
        $property4->setCreatedAt((new \DateTime())->modify("-17 day"));
        $manager->persist($property4);

        $property5 = new Property();
        $property5->setPrice(450000);
        $property5->setCategory($this->getReference("maison"));
        $property5->setDistrict($this->getReference("beaulieu"));
        $property5->setSurface(340);
        $property5->setBedroom(3);
        $property5->setDescription("Viverra maecenas accumsan lacus vel facilisis volutpat est. Urna condimentum mattis pellentesque id nibh tortor id. Est velit egestas dui id ornare arcu odio. Urna id volutpat lacus laoreet non curabitur gravida arcu. Ornare suspendisse sed nisi lacus sed viverra tellus. Laoreet suspendisse interdum consectetur libero id. Vitae turpis massa sed elementum tempus egestas sed. In tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Dui id ornare arcu odio ut sem nulla. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat. Dictum fusce ut placerat orci nulla pellentesque dignissim enim sit. Enim nunc faucibus a pellentesque sit amet porttitor eget. Diam quis enim lobortis scelerisque fermentum dui. Sagittis orci a scelerisque purus semper.");
        $property5->setPicture("property-05.jpg");
        $property5->setCreatedAt((new \DateTime())->modify("-20 day"));
        $manager->persist($property5);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            DistrictFixtures::class,
            FeatureFixtures::class,
            UserFixtures::class
        ];
    }
}
