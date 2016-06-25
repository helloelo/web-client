<?php

namespace AppBundle\Service;

class HelloElo 
{
    private $buzzClient;

    public function __construct(Buzz\Client\Curl $buzzClient)
    {
        $this->buzzClient = $buzzClient;
    }

    public function createUser()
    {
        $request = new Buzz\Message\Request('POST', '/', 'createUser');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }

    public function postNotification()
    {
        $request = new Buzz\Message\Request('POST', '/', 'http://<go-domain>/postNotification');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function postApprove()
    {
        $request = new Buzz\Message\Request('POST', '/', 'http://<go-domain>/postApprove');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function postDecline()
    {
        $request = new Buzz\Message\Request('POST', '/', 'http://<go-domain>/postDecline');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function createMatch()
    {

        $request = new Buzz\Message\Request('POST', '/', 'http://<go-domain>/createMatch');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function postResult()
    {
        $request = new Buzz\Message\Request('POST', '/', 'http://<go-domain>/postResult');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function getUser()
    {
        $request = new Buzz\Message\Request('GET', '/', 'http://<go-domain>/getUser');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);
        
        return $response;
    }
    public function getTopPlayersByGame()
    {
        $request = new Buzz\Message\Request('GET', '/', 'http://<go-domain>/getTopPlayersByGame');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }
    public function getNotifications()
    {
        $request = new Buzz\Message\Request('GET', '/', 'http://<go-domain>/getNotifications');
        $response = new Buzz\Message\Response();
        $this->send($request, $response);

        return $response;
    }

    private function send($request, $response, array $options = array())
    {
        $this->buzzClient->send($request, $response, array $options = array());
    }

}
