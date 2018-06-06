<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PruebasController
 * @package AppBundle\Controller
 */
class PruebasController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render(
            'AppBundle:Pruebas:index.html.twig',
            array(
                'texto' => 'Te lo envío desde la acción del controlador'
                )
        );
    }
}