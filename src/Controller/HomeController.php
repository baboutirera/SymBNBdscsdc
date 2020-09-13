<?php


    namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
    {

        /**
         * @Route("/hello/{prenom}/{age}", name="hello")
         * @Route("/hello", name="hello_base")
         * @Route("/hello/{prenom}", name="hello_prenom")
         * 
         * Montre la page qui dit bonjours
         * 
         * @return void
         */

        public function hello($prenom="anonyme",$age=0)
        {
            return $this->render(
                'hello.html.twig',
                [
                    'prenom' => $prenom,
                    'age' => $age
                ]
            );
            # code...
        }

        /**
         * @Route("/", name="homepage")
         *
         */
        public function home()
        {
            $prenoms = ["Lior"=>31,"Joseph"=>12,"Anne"=>33];
            return $this->render(
                'home.html.twig',
                [
                    'title'=>"Bonjours tatle",
                    'age'=> 20,
                    'tableau'=> $prenoms
                ]
            );
            # code...
        }
    }
    
?>
