

<?php

$product = ['name' => 'test', 'price' => 'test 2'];      // plus permissif que la class, modifier infos, rajouter éléments !!!! sécurité !!!!!




class Product {                     // but : cloisonner ce qu'on fait, pas comme le tableau ci dessus
    public string $name;            
    public string $description;
    public float $price;

    public function getPrice() {    // en plus des propriétés on peut ajouter des METHODES. ce sont simplement des fonctions dans les classes.

    }                                
}

$product1 = new Product();                      // quand propriété en public, j'y ai acces... si private : pas possible !!!! UTILISE SETTER OU GETTER 
                                                // mettre en PRIVATE permet d'autoriser l'héritage

$product1 ->name = 'ordi lenovo';
