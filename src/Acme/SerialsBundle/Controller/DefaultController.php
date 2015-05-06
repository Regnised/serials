<?php

namespace Acme\SerialsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\SerialsBundle\Entity\Serial;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeSerialsBundle:Default:index.html.twig');
    }

    public function createAction()
    {
        $serial = new Serial();
        $serial->setNameSerial('Little dog');
        $serial->setPicture('picture1.jpg');
        $serial->setGanre('For kids');
        $serial->setCountry('Canada');
        $serial->setStudio('Disney');
        $serial->setProducer('Walt Disney');
        $serial->setActors('Little dog and other');
        $serial->setDateStart(new \DateTime("2015-06-02 18:54:12"));
        $serial->setDescription('This is serial about little dog');

        $em = $this->getDoctrine()->getManager();

        $em->persist($serial);
        $em->flush();

        return new Response('Created product id '.$serial->getId());
    }
}
