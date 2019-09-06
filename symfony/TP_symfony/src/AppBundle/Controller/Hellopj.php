<?php

namespace AppBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

/**
 * Hellopj controller.
 *
 * @Route("hello")
 */

    class Hellopj extends AbstractController
{
        /**
         *
         * @Route("/", name="hello.index",methods={"GET"})
         */

    public function indexAction()
    {
        $content = $this->render('default/hello.html.twig', ['name' => 'PJ']);
        return new Response($content);
  }
}