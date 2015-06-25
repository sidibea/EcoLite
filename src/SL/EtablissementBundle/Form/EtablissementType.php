<?php

namespace SL\EtablissementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Intl\Intl;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtablissementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $countries = Intl::getRegionBundle()->getCountryNames();
            //Intl::getRegionBundle()->getCountryNames();
        $builder
            ->add('type')
            ->add('nom')
            ->add('pays', 'country', array(
                'choices' => $countries,
            ))
            ->add('ville')
            ->add('adresse')
            ->add('academie')
            ->add('email')
            ->add('telephone')
            ->add('logo')
            ->add('devise')
            ->add('nomDirecteur')
            ->add('loginDirecteur')
            ->add('signatureDirecteur')
            ->add('siteweb')
            ->add('Enregistrer', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SL\EtablissementBundle\Entity\Etablissement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sl_etablissementbundle_etablissement';
    }
}
