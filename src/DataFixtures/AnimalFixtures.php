<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Animal;
use App\Entity\Espece;
use App\Entity\Continent;
use App\Entity\Personne;
use App\Entity\Dispose;

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

         $p1 = new Personne();
         $p1->setNom("Kevin");
         $manager->persist($p1);

         $p2 = new Personne();
         $p2->setNom("Yanis");
         $manager->persist($p2);
        
         $p3 = new Personne();
         $p3->setNom("jeremy");
         $manager->persist($p3);

         $d1 = new Dispose();
         $d1->setPersonne($p1)->setAnimal($a1)->setNombre(10);
         $manager->persist($d1);

         $d2 = new Dispose();
         $d2->setPersonne($p2)->setAnimal($a2)->setNombre(3);
         $manager->persist($d2);

         $d2 = new Dispose();
         $d2->setPersonne($p3)->setAnimal($a3)->setNombre(5);
         $manager->persist($d2);


        $manager->flush();
    }
}
