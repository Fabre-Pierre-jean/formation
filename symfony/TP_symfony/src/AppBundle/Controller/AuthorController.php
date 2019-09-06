<?php


namespace AppBundle\Controller;



use AppBundle\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Author controller.
 *
 * @Route("author")
 */

class AuthorController extends Controller
{
    /**
     * Lists all author entities.
     *
     * @Route("/", name="author.index",methods={"GET"})
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository('AppBundle:Author')->findAllAuthorByNameAsc();

        return $this->render('author/index.html.twig', array(
            'author' => $author,
        ));
    }

    /**
     * Creates a new author entity.
     *
     * @Route("/new", name="author.new",methods={"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $author = new Author();
        $form = $this->createForm('AppBundle\Form\AuthorType', $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('author.show', array('id' => $author->getId()));
        }

        return $this->render('author/new.html.twig', array(
            'author' => $author,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a author entity.
     *
     * @Route("/{id}", name="author.show",methods={"GET"})
     */

    public function showAction(Author $author){
        $deleteForm = $this->createDeleteForm($author);

        return $this->render('author/show.html.twig', [
            'author' => $author,
            'delete_form' => $deleteForm->createView()
        ]);
    }

    /**
     * Displays a form to edit an existing author entity.
     *
     * @Route("/{id}/edit", name="author.edit",methods={"GET", "POST"})
     */

    public function editAction(Request $request, Author $author){
        $deleteForm = $this->createDeleteForm($author);
        $editForm = $this->createForm('AppBundle\Form\AuthorType', $author);

        if($editForm->isSubmitted() && $editForm->isValid()){
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute( 'author.edit', [
                'id' => $author->getId()
            ]);
        }

        return $this->render('author/edit.html.twig', [
           'author' => $author,
           'edit_form' => $editForm->createView(),
           'delete_form' => $deleteForm->createView()
        ]);
    }

    /**
     * Deletes a author entity.
     *
     * @Route("/{id}", name="author.delete", methods={"DELETE"})
     */
    public function deleteAction(Request $request, Author $author)
    {
        $form = $this->createDeleteForm($author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($author);
            $em->flush();
        }

        return $this->redirectToRoute('author.index');
    }

    /**
     * Creates a form to delete a author entity.
     *
     * @param Author $author The author entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Author $author)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('author.delete', array('id' => $author->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}