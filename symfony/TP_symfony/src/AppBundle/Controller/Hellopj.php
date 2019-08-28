<?php

namespace AppBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    class Hellopj extends AbstractController
{
    public function indexAction()
    {
        $content = $this->render('default/hello.html.twig', ['name' => 'PJ']);
        return new Response($content);
  }
}