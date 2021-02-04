<?php

namespace App\Controller;

use App\Entity\FamilyKingdom;
use App\Form\FamilyKingdomType;
use App\Repository\FamilyKingdomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/family_kingdom")
 */
class FamilyKingdomController extends AbstractController
{
    /**
     * @Route("/", name="family_kingdom_index", methods={"GET"})
     */
    public function index(FamilyKingdomRepository $familyKingdomRepository): Response
    {
        return $this->render('family_kingdom/index.html.twig', [
            'family_kingdoms' => $familyKingdomRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="family_kingdom_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $familyKingdom = new FamilyKingdom();
        $form = $this->createForm(FamilyKingdomType::class, $familyKingdom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($familyKingdom);
            $entityManager->flush();

            return $this->redirectToRoute('family_kingdom_index');
        }

        return $this->render('family_kingdom/new.html.twig', [
            'family_kingdom' => $familyKingdom,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="family_kingdom_show", methods={"GET"})
     */
    public function show(FamilyKingdom $familyKingdom): Response
    {
        return $this->render('family_kingdom/show.html.twig', [
            'family_kingdom' => $familyKingdom,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="family_kingdom_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FamilyKingdom $familyKingdom): Response
    {
        $form = $this->createForm(FamilyKingdomType::class, $familyKingdom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('family_kingdom_index');
        }

        return $this->render('family_kingdom/edit.html.twig', [
            'family_kingdom' => $familyKingdom,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="family_kingdom_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FamilyKingdom $familyKingdom): Response
    {
        if ($this->isCsrfTokenValid('delete'.$familyKingdom->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($familyKingdom);
            $entityManager->flush();
        }

        return $this->redirectToRoute('family_kingdom_index');
    }
}
