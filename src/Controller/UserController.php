<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route(path: '/users', name: 'user_list')]
    public function list(ManagerRegistry $doctrine): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            $repository = $doctrine->getRepository(User::class);
            $users = $repository->findAll();
    
            return $this->render('user/list.html.twig', [
                'users' => $users,
            ]);
        } else {
            return $this->redirectToRoute('homepage');
        }
    }

    #[Route(path: '/users/create', name: 'user_create')]
    public function create(EntityManagerInterface $entityManager, Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                    )
                );
            $user->setRoles($request->get('user')['roles']);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', "L'utilisateur a bien été ajouté.");

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/create.html.twig', ['form' => $form->createView()]);
    }

    #[Route(path: '/users/{id}/edit', name: 'user_edit')]
    public function edit(User $user, EntityManagerInterface $entityManager, Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );

            $entityManager->flush();

            $this->addFlash('success', "L'utilisateur a bien été modifié");

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/edit.html.twig', ['form' => $form->createView(), 'user' => $user]);
    }
}
