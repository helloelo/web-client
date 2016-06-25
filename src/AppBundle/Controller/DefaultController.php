<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/createUser")
     */
    public function createUser()
    {
        return $this->getContainer('hello.elo')->createUser();
    }

    /**
     * @Route("/postNotification")
     */
    public function postNotification()
    {
        return $this->getContainer('hello.elo')->postNotification();
    }

    /**
     * @Route("/postApprove")
     */
    public function postApprove()
    {
        return $this->getContainer('hello.elo')->postApprove();
    }
    
    /**
     * @Route("/postDecline")
     */
    public function postDecline()
    {
        return $this->getContainer('hello.elo')->postDecline();
    }
    
    /**
     * @Route("/createMatch")
     */
    public function createMatch()
    {
        return $this->getContainer('hello.elo')->createMatch();
    }
    
    /**
     * @Route("/postResult")
     */
    public function postResult()
    {
        return $this->getContainer('hello.elo')->postResult();
    }
     
    /**
     * @Route("/getTopPlayersByGame")
     */
    public function getUser()
    {
        return $this->getContainer('hello.elo')->getUser();
    }
    
    /**
     * @Route("/getTopPlayersByGame")
     */
    public function getTopPlayersByGame()
    {
        return $this->getContainer('hello.elo')->getTopPlayersByGame();
    }
    
    /**
     * @Route("/getNotifications")
     */
    public function getNotifications()
    {
        return $this->getContainer('hello.elo')->getNotifications();
    }

}
