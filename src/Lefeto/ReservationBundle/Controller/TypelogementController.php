<?php

namespace Lefeto\ReservationBundle\Controller;

use Lefeto\ReservationBundle\Entity\Typelogement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typelogement controller.
 *
 * @Route("typelogement")
 */
class TypelogementController extends Controller
{
    /**
     * Lists all typelogement entities.
     *
     * @Route("/", name="typelogement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typelogements = $em->getRepository('ReservationBundle:Typelogement')->findAll();

        return $this->render('typelogement/index.html.twig', array(
            'typelogements' => $typelogements,
        ));
    }

    /**
     * Creates a new typelogement entity.
     *
     * @Route("/new", name="typelogement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typelogement = new Typelogement();
        $form = $this->createForm('Lefeto\ReservationBundle\Form\TypelogementType', $typelogement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typelogement);
            $em->flush();

            return $this->redirectToRoute('typelogement_show', array('id' => $typelogement->getId()));
        }

        return $this->render('typelogement/new.html.twig', array(
            'typelogement' => $typelogement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typelogement entity.
     *
     * @Route("/{id}", name="typelogement_show")
     * @Method("GET")
     */
    public function showAction(Typelogement $typelogement)
    {
        $deleteForm = $this->createDeleteForm($typelogement);

        return $this->render('typelogement/show.html.twig', array(
            'typelogement' => $typelogement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typelogement entity.
     *
     * @Route("/{id}/edit", name="typelogement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Typelogement $typelogement)
    {
        $deleteForm = $this->createDeleteForm($typelogement);
        $editForm = $this->createForm('Lefeto\ReservationBundle\Form\TypelogementType', $typelogement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typelogement_edit', array('id' => $typelogement->getId()));
        }

        return $this->render('typelogement/edit.html.twig', array(
            'typelogement' => $typelogement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typelogement entity.
     *
     * @Route("/{id}", name="typelogement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Typelogement $typelogement)
    {
        $form = $this->createDeleteForm($typelogement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typelogement);
            $em->flush();
        }

        return $this->redirectToRoute('typelogement_index');
    }

    /**
     * Creates a form to delete a typelogement entity.
     *
     * @param Typelogement $typelogement The typelogement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Typelogement $typelogement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typelogement_delete', array('id' => $typelogement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
