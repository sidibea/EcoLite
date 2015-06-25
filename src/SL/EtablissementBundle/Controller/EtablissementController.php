<?php

namespace SL\EtablissementBundle\Controller;

use SL\EtablissementBundle\Entity\Etablissement;
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


        $form = $this->createForm(new EtablissementType(), $etablissement);

        if ($form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Information bien enregistrée.');

            return $this->redirect($this->generateUrl('sl_configuration_etablissement'));
        }

        return $this->render('SLEtablissementBundle:etablissement:config.html.twig', array(
            'form'   => $form->createView(),
            'etablissement' => $etablissement
        ));
    }
}
