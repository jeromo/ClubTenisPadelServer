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
class ApiController extends FOSRestController
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
    public function postTokenauthenticationAction(Request $request)
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $user = $this->getDoctrine()->getRepository('AppBundle:User')
            ->findOneBy(['username' => $username]);

        if(!$user) {
            throw $this->createNotFoundException();
        }

        // password check
        if(!$this->get('security.password_encoder')->isPasswordValid($user, $password)) {
            throw $this->createAccessDeniedException();
        }

        // Use LexikJWTAuthenticationBundle to create JWT token that hold only information about user name
        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);

        // Return genereted tocken
        return ['token' => $token];
    }

}