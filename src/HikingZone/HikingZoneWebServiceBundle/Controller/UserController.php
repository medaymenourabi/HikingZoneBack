<?php

namespace HikingZone\HikingZoneWebServiceBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Route;
use HikingZone\HikingZoneWebServiceBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class UserController
 * @package HikingZone\HikingZoneWebServiceBundle\Controller
 */
class UserController extends Controller
{
    /**
     * @Route("/api/add")
     * @Method("POST")
     */
    public function AddUserAction(Request $request){
        $body = $request->getContent();
        $data = json_decode($body,true);
        $User = new User();
        $User->setUsername($data["username"]);
        $User->setEmail($data["email"]);
        $User->setPassword($data["password"]);
        $em = $this->getDoctrine()->getManager();
        $em->persist($User);
        $em->flush();
          $response = json_encode("coool");

   return new Response($response);
    }
}
