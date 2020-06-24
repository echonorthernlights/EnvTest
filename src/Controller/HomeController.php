<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);*/
        $homeEntity = new HomeEntity();
        $homeEntity->setFisrtName('aaaa');
        $homeEntity->SetLastName('bbb');
        $homeEntity->setAge(55);
        $homeEntity->setVocation('ccc');

        
        return $this->render('home_index.html.twig', ['homeEntity' => $homeEntity]);
    }
}
