<?php

namespace SL\EtablissementBundle\Controller;

use SL\EtablissementBundle\Form\EtablissementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class EtablissementController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $etablissement = $em->getRepository('SLEtablissementBundle:Etablissement')->find(1);

        if (null === $etablissement) {
            throw new BadRequestHttpException("YAY! La base de donne vide ou mal configurer. {entite}: Etablissement");
        }

        $form = $this->createForm(new EtablissementType(), $etablissement);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Information bien modifiée.');

            return $this->redirect($this->generateUrl('sl_etablissement_homepage', array('id' => $etablissement->getId())));
        }

        return $this->render('SLEtablissementBundle:Etablissement:index.html.twig', array(
            'form'   => $form->createView(),
            'etablissement' => $etablissement // Je passe également l'etablissement à la vue si jamais elle veut l'afficher
        ));
    }
}
