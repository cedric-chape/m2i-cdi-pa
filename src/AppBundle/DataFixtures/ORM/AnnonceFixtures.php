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
        $annonce->setTitle("Belle Maison de campagne à vendre")
            ->setCodePostal(62980)
            ->setPrice(88000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à vendre maison de campagne style fermette 80 m² habitable 
                superficie terrain 1500 m² séjour salle salon cuisine aménagée 
                2 chambres salle de bains toilettes chauffage centrale fioul");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Belle Maison en bord de mer à vendre")
            ->setCodePostal(62152)
            ->setPrice(175000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à vendre maison en bord de mer  125 m² habitable 
                superficie terrain 950 m² séjour salle salon cuisine aménagée 
                3 chambres 2 salles de bains  2 toilettes chauffage poêle à granulés");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Appartement à louer")
            ->setCodePostal(62400)
            ->setPrice(680)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à louer appartement type T3 40m² en centre ville 
                comprenant salon séjour cuisine aménagée 2 chambres 
                salle de bains toilettes chauffage centrale fioul");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Bureaux à louer")
            ->setCodePostal(59000)
            ->setPrice(400)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à louer bureaux neufs 30m² cloisonnés dans un hôtel d'entreprises
                 à proximité d'EuraLille pas de frais d'agence");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Loft 156 m² à vendre")
            ->setCodePostal(62000)
            ->setPrice(337400)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "a vendre loft dans une petite copropriété de 5 logements 
                où les communs et les terrasses seront complétement réhabilités, 
                un plateau brut au deuxième étage, offrant une surface de 156 m2 et une terrasse de 22 m2 exposée plein sud. 
                Un ascenseur, une cave et les commodités de centre ville à deux pas du beffroi. Copropriété de 18 lots");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Terrain constructible de 2000m² à vendre")
            ->setCodePostal(62820)
            ->setPrice(147000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à vendre terrain constructible de 2000 m² + immeuble à réhabiliter
                 de 150m² habitable (possibilité loft)");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Magnifique longère de 110m² à vendre")
            ->setCodePostal(59188)
            ->setPrice(228000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "à vendre magnifique longère de 110 m² avec dépendance offrant vaste hall d'entrée, 
                séjour, salon avec poêle, cuisine équipée, vaste salle de bains, buanderie; 
                à l'étage : 3 chambres, 1 bureaux; cave, terrasse, jardin, cour, chauffage central gaz. 
                L'ensemble est bâti sur une parcelle de 2 670 m². Belles prestations, pas de travaux à prévoir.");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Chambre étudiant en colocation à louer")
            ->setCodePostal(59000)
            ->setPrice(355)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "Vous êtes étudiant et vous recherchez une chambre dans un esprit colocation, la villa Capucine 
                vous propose une maison entièrement restaurée qui a conservé son cachet authentique.
                Cette maison peut accueillir 6 étudiants. Elle comprend 4 chambres individuelles de 17m² comprenant
                 un séjour (avec TV) , une cuisine équipée (four , plaques, micro-ondes), un salle de bains (lavabo et
                 douche) et une lingerie avec machine à laver.");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Commerce bar à vendre")
            ->setCodePostal(59300)
            ->setPrice(88000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "a vendre établissement situé en centre ville sans concurrence de proximité, disposant de 40 places, 
                 avec logement. Affaire à développer");
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitle("Commerce type prêt-à-porter")
            ->setCodePostal(59240)
            ->setPrice(11000)
            ->setDate(new \DateTime('now'))
            ->setDescription(
                "Fonds de commerce dans un local commercial bien situé, proche de la place César.
                 Le bien se compose d'une première pièce d'environ 50m², d'une seconde pièce de 30m²
                 (actuellement utilisée comme réserve) et d'une troisième pièce d'environ 8m² avec évier. 
                 Et un WC. Idéal pour commerce ou profession libérale.");
        $manager->persist($annonce);

        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }

}