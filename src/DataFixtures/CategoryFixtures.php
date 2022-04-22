<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CategoryFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName("category 1");
        $manager->persist($category);
        $this->addReference('cate1', $category);


        $manager->flush();
    }
    public function getOrder(){         
        return 1;     
    }
}
