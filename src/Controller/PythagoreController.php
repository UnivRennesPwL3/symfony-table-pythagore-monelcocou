<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private PythagoreUtility $pythagore;

    public function __construct(PythagoreUtility $pythagoreUtility){
        $this->pythagore = $pythagoreUtility;
    }


    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'table_html' => $this->pythagore->display(),
            'my_name' => 'MONEL GAFFAN',
        ]);
    }
}
