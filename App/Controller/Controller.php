<?php

namespace App\Controller;

Class Controller                    // controller principal : les requetes vont arriver en premier a lui 

{
    public function route(): void {

        if(isset($_GET['controller'])) {
            switch($_GET['controller']) {                                   // 2) selon ce qu'il detecte, il va creer une instance du bon controlleur exemple : page controller
                case 'page':
                    // charger controller page
                    $pageController = new PageController();
                    $pageController->route();                               // 3)  va appeller route qui va analyser le parametre action dans pageController.php
                    break;
                case 'book':
                    //charger controller book
                    break;
                default:
                    //erreur
                break;
        }

    } else {
        // Charger la page d'accueil
    }
}


    protected function render(string $path, array $params = []):void 
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';
        
        try {

            if (!file_exists($filePath)) {
                throw new \Exception("Fichier non trouvé : ".$filePath);            //EXCEPTION BACKLASH CAR FONCTION QUI N EST PAS DANS LE NAMESPACE : RACINE DE PHP
                //générer erreur
            } else {
                // extrait chaque ligne du tableau et crée des variables pour chacune
                extract($params);
                require_once $filePath;
            }

        } catch(\Exception $e) {
            echo $e->getMessage();
        }

    }
}

?>