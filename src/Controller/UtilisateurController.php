<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurController extends AbstractController
{
    //#[Route("/utilisateur", name = "app_utilisateur")]
    public function index(Request $request): Response
    {
        $no = $request->query->get('no');
        $nu = $request->query->get('nu');

        // Si $no et $nu sont nuls
        if ($no == null && $nu == null) {
            return $this->render('utilisateur/index.html.twig', [
                'controller_name' => 'UtilisateurController',
                'no' => '',
                'nu' => '',
                'msg' => ''
            ]);
        }

        // Utiliser UtilisateurRepository
        $utilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);

        if ($utilisateurRepository->exists(int($no))) {
            return $this->render('utilisateur/index.html.twig', [
                'controller_name' => 'UtilisateurController',
                'no' => $no,
                'nu' => $nu,
                'msg' => 'Utilisateur existe déjà'
            ]);
        }



        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'no' => '',
            'nu' => '',
            'msg' => ''
        ]);
    }

    public function exists(int $id_utilisateur): bool
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT COUNT(u.id_utilisateur)
            FROM App\Entity\Utilisateur u
            WHERE u.id_utilisateur = :id_utilisateur'
        )->setParameter('id_utilisateur', $id_utilisateur);

        return $query->getSingleScalarResult() > 0;
    }
}
