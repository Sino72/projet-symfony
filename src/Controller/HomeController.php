<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{

    /**
     * @Route("/bnjour/{prenom}/age/{age}", name= "hello")
     * @Route("/salut", name= "hello_base")
     * @Route("/bonjour/{prenom}", name= "hello_prenom")
     * 
     * Montre la page qui dit bonjour
     * 
     * @return void
     */

    public function hello($prenom = "anonyme", $age = 0) {

        return $this-> render (
            'hello.html.twig',
            [
                'prenom'=> $prenom,
                'age' => $age
            ]
            );


    }

    /**
     * @Route("/", name="homepage")
     */

    public function home(){
        $prenoms = ["Sino" => 47, "Noé" => 8, "Maya" => 12];
        
        return $this->render(

            'home.html.twig',
            ['title'=>"Aurevoir tout le  monde",
             'age'=> 12,
             'tableau'=> $prenoms
            ]
        );
    }

}


?>