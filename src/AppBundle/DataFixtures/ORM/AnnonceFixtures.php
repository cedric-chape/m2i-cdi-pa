<?php


namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Annonce;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AnnonceFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $annonce = new Annonce();

    }

    public function getOrder()
    {

    }

}