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
    public function AddUserAction(Request $request)
    {
        $body = $request->getContent();
        $data = json_decode($body, true);
        $User = new User();
        $User->setUsername($data["username"]);
        $User->setEmail($data["email"]);
        $User->setPassword($data["password"]);
        $em = $this->getDoctrine()->getManager();


        $rand = $this->generateRandomString();
        $message = \Swift_Message::newInstance()
            ->setSubject('Welcome to Hiking Zone ')->setFrom('erandopi14@gmail.com')
            ->setTo($data["email"])
            ->setBody(

                'please click on this link to activate your account
 "http://127.0.0.1:8000/api/token/' . $rand . '"'
            );
        $this->get('mailer')->send($message);
        $User->setEnabled(0);
        $User->setPasswordToken($rand);
        $em->persist($User);
        $em->flush();
        $response = json_encode("coool");

        return new Response($response);
    }

    function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    /**
     * @Route("/api/token/{token}")
     * @Method("GET")
     */
    function  ActivateAccountAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('HikingZoneHikingZoneWebServiceBundle:User')->findOneBy(array('passwordToken' => $token));
        if ($user) {
            $user->setPasswordToken(null);
            $user->setEnabled(1);
            $em->persist($user);
            $em->flush();

          return  $this->render('@HikingZoneHikingZoneWebService/Default/index.html.twig');
        }
        return $this->render('@HikingZoneHikingZoneWebService/Default/404notfound.html.twig');
    }
}
