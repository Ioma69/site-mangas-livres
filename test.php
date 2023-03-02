

<?php

$product = ['name' => 'test', 'price' => 'test 2'];      // plus permissif que la class, modifier infos, rajouter éléments !!!! sécurité !!!!!




class Product {                     // but : cloisonner ce qu'on fait, pas comme le tableau ci dessus
    public string $name;            
    public string $description;             // quand propriété en public, j'y ai acces... si private : pas possible !!!! UTILISE SETTER OU GETTER 
                                            // mettre en PROTECTED permet d'autoriser l'héritage
    public float $price;


    public function setPrice(float $price):void {                  //  SETTER : prend en parametre une donnée et la mettre sur la propriété de notre objet
                                                                    // ne retourne rien, son role est juste d'écrire une donnée

        $this->price = $price;  
    }


    public function setDescription(string $description):self {       // SELF VEUT DIRE QUE L ON RETOURNE  QUEQUE CHOSE QUI EST DU MEME TYPE QUE LA CLASSE OU L ON EST     
        
        if ($description > 0) {                                     // UN SETTET PERMET DE RAJOUTER DES TESTS

            $this->description = $description;

        }
        
        return $this; 
}





    public function getPrice() {                        // GETTER sert a retourner une valeur; 

        return $this->price;
    }





    public function getdescription() {    // en plus des propriétés on peut ajouter des METHODES. ce sont simplement des fonctions dans les classes.
        
    }                                
}

$product1 = new Product();                      

$product1 ->name = 'ordi lenovo';





// HERITAGE et INTERFACE
interface IVehicule                     // guide de ce qu'il faut faire : méthodes qui vont etre nécessaires
{
    public function accelerer();
    public function freiner();
}

class Vehicule implements IVehicule {
    protected string $marque;
    protected float $vitesse_max;

    public function __construct(string $marque, float $vitesse_max)             //Methode magique : CONSTRUCT appeller directement quand on fait un new

    {
        $this->marque = $marque;
        $this->vitesse_max = $vitesse_max;

    }

    public function getVitesseMax(): float { 
        return $this->vitesse_max;
    } 

    public function setVitesseMax (float $vitesse_max): self 
    
    {
        if($vitesse_max > 0) {
            $this->vitesse_max = $vitesse_max;
        }
        return $this;
    } 



    public function accelerer() {           // je contraint la class vehicule, elle doit implementer les méthodes de l'interface
        echo 'la voiture accélère';
    }

    public function freiner() {
        echo 'la voiture freine';
    }

}


trait Moteur {
    function demarrer()
    {
        echo 'demarrage du moteur';
    }

    function arreter()
    {
        echo 'arret du moteur';
    }

}


trait Klaxonne {
    function klaxonner()
    {
        echo 'klaxonner';
    }


}


class Voiture extends Vehicule {
    use Moteur, klaxonne;                           // ma classe aura acces a demarrer, arreter, klaxonner  // HERITAGE HORIZONTAL // 
    protected int $nombre_roues;
}

class Bateau extends Vehicule {
    protected int $nombre_cabiness;
}


$voiture1 = new Voiture('Toyota', 275);

echo $voiture1->getVitesseMax();

