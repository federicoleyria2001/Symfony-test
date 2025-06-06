<?php

namespace App\Controller;

use App\Entity\Jugadores;
use App\Form\JugadoresType;
use App\Repository\JugadoresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/jugadores')]
final class JugadoresController extends AbstractController
{
    #[Route(name: 'app_jugadores_index', methods: ['GET'])]
    public function index(JugadoresRepository $jugadoresRepository): Response
    {
        return $this->render('jugadores/index.html.twig', [
            'jugadores' => $jugadoresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_jugadores_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $jugadore = new Jugadores();
        $form = $this->createForm(JugadoresType::class, $jugadore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($jugadore);
            $entityManager->flush();

            return $this->redirectToRoute('app_jugadores_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jugadores/new.html.twig', [
            'jugadore' => $jugadore,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jugadores_show', methods: ['GET'])]
    public function show(Jugadores $jugadore): Response
    {
        return $this->render('jugadores/show.html.twig', [
            'jugadore' => $jugadore,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_jugadores_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Jugadores $jugadore, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JugadoresType::class, $jugadore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_jugadores_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('jugadores/edit.html.twig', [
            'jugadore' => $jugadore,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jugadores_delete', methods: ['POST'])]
    public function delete(Request $request, Jugadores $jugadore, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jugadore->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($jugadore);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_jugadores_index', [], Response::HTTP_SEE_OTHER);
    }
}
