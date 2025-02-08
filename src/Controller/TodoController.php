<?php

namespace App\Controller;

use App\Entity\Todo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    #[Route('/todos', name: 'get_todos', methods: ['GET'])]
    public function getTodos(EntityManagerInterface $em): Response
    {
        $todos = $em->getRepository(Todo::class)->findAll();

        if (!$todos) {
            $this->addFlash('error', 'No todos found');
            return $this->render('todo.html.twig', ['todos' => []]);
        }

        return $this->render('todo.html.twig', [
            'todos' => $todos,
        ]);
    }
}
