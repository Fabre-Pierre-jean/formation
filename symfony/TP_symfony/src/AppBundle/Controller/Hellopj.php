<?php

namespace AppBundle\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Twig\Environment;


    class Hellopj
{
    public function indexAction(Environment $twig)
    {

        $content = $content = $twig->render('default/hello.html.twig', ['name' => 'PJ']);

    return new Response($content);
  }
}