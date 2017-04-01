<?php
/**
 * Created by PhpStorm.
 * User: jrojo
 * Date: 30/03/17
 * Time: 12:25
 */

namespace ApiBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
class SampleController extends FOSRestController
{
/* le indicamos el método http, el nombre de la acción y action para decirle que esto es una acción del controlador */
    /**
     * @return array
     */
    public function getSampleAction()
    {
        $data = array("Usuarios" => [
            [
                "nombre" => "Víctor",
                "Apellido" => "Robles"
            ],
            [
                "nombre" => "Antonio",
                "Apellido" => "Martinez"
            ]]);

        return $data;
    }
}