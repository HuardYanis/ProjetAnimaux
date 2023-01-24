<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Animal;
use App\Entity\Espece;
use App\Entity\Continent;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $continent1=new Continent() ;
        $continent1->setLibelle("Europe");
        $manager->persist($continent1);

        $continent2=new Continent() ;
        $continent2->setLibelle("Afrique");
        $manager->persist($continent2);

        $continent3=new Continent() ;
        $continent3->setLibelle("Amerique");
        $manager->persist($continent3);


        $e1 = new Espece();
        $e1->setLibelle("felin");
        $manager->persist($e1);

        $e2 = new Espece();
        $e2->setLibelle("Canin");
        $manager->persist($e2);

        $e3 = new Espece();
        $e3->setLibelle("Equidé");
        $manager->persist($e3);

        $a1 = new Animal();
        $a1->setNom('chien')->setDescription("lorem ipsum 1…")->setImg("chien.png")->setCouleur("noir")->setPoid(30)->setEspece($e2)->addContinent($continent1)  ;
        $manager->persist($a1);

        $a2 = new Animal();
	 	$a2->setNom('chat')->setDescription("lorem ipsum 2…")->setImg("chat.png")->setCouleur("blanc")->setPoid(9)->setEspece($e1)->addContinent($continent1)->addContinent($continent2)    ;
	 	$manager->persist($a2);

        $a3 = new Animal();
	 	$a3->setNom('cheval')->setDescription("lorem ipsum 3…")->setImg("cheval.png")->setCouleur("marron")->setPoid(450)->setEspece($e3)->addContinent($continent1)->addContinent($continent2)->addContinent($continent3)     ;
	 	$manager->persist($a3);

        $manager->flush();
    }
}
