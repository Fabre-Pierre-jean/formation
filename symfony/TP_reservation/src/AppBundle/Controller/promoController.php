<?php

namespace AppBundle\Controller;

use AppBundle\Entity\promo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Promo controller.
 *
 * @Route("promo")
 */
class promoController extends Controller
{
    /**
     * Lists all promo entities.
     *
     * @Route("/", name="promo_index", methods={"GET", "POST"})
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promos = $em->getRepository('AppBundle:promo')->findAll();

        return $this->render('promo/index.html.twig', array(
            'promos' => $promos,
        ));
    }

    /**
     * Creates a new promo entity.
     *
     * @Route("/new", name="promo_new", methods={"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $promo = new Promo();
        $form = $this->createForm('AppBundle\Form\promoType', $promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promo);
            $em->flush();

            return $this->redirectToRoute('promo_show', array('id' => $promo->getId()));
        }

        return $this->render('promo/new.html.twig', array(
            'promo' => $promo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a promo entity.
     *
     * @Route("/{id}", name="promo_show", methods={"GET", "POST"})
     */
    public function showAction(promo $promo)
    {
        $deleteForm = $this->createDeleteForm($promo);

        return $this->render('promo/show.html.twig', array(
            'promo' => $promo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing promo entity.
     *
     * @Route("/{id}/edit", name="promo_edit", methods={"GET", "POST"})
     */
    public function editAction(Request $request, promo $promo)
    {
        $deleteForm = $this->createDeleteForm($promo);
        $editForm = $this->createForm('AppBundle\Form\promoType', $promo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('promo_edit', array('id' => $promo->getId()));
        }

        return $this->render('promo/edit.html.twig', array(
            'promo' => $promo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a promo entity.
     *
     * @Route("/{id}", name="promo_delete", methods={"DELETE"})
     */
    public function deleteAction(Request $request, promo $promo)
    {
        $form = $this->createDeleteForm($promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promo);
            $em->flush();
        }

        return $this->redirectToRoute('promo_index');
    }

    /**
     * Creates a form to delete a promo entity.
     *
     * @param promo $promo The promo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(promo $promo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('promo_delete', array('id' => $promo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
