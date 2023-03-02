<?php

namespace App\Controller;

Class Controller                    // controller principal : les requetes vont arriver en premier a lui 

{
    public function route(): void {

        if(isset($_GET['controller'])) {
            switch($_GET['controller']) {
                case 'page':
                    // charger controlleur page
                    var_dump('on charge controller');
                    break;
                case 'book':
                    //charger controller bool
                    break;
                default:
                    //erreur
                break;
        }

    } else {
        // Charger la page d'accueil
    }
}

}

?>