<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Affichage as Affichage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AffichageController extends Controller
{
    /**
     * Lists all entities.
     *
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $salle = $em->getRepository('AppBundle:salle')->findAll();
        $plannings = $em->getRepository('AppBundle:Planning')->findAll();
        $formateurs = $em->getRepository('AppBundle:Formateur')->findAll();

        return $this->render('affichage/affichage.html.twig', array(
            'salles' => $salle,
            'planning' => $plannings,
            'formateur' => $formateurs,
        ));
    }

}