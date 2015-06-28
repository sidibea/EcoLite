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
        $builder
            ->add('type', 'choice', array(
                'choices' => array(
                    'Ecole Privee' => 'Ecole Prive',
                    'Groupe Scolaire' => 'Groupe Scolaire',
                    'Centre de Formation' => 'Centre de Formation',
                    'Universite' => 'Universite'),
                'expanded' => false,
                'multiple' => false
            ))
            ->add('nom')
            ->add('pays', 'country', array(
                'choices' => $countries,
                'preferred_choices' => array(
                    'ML', // Mali
                    'SN', // Senegal
                ),
                'expanded' => false,
                'multiple' => false
            ))
            ->add('ville')
            ->add('adresse')
            ->add('academie')
            ->add('telephone')
            ->add('email')
            ->add('logo', new ImageType())
            ->add('cachet', new ImageType())
            ->add('devise')
            ->add('siteweb')
            ->add('nomDirecteur')
            ->add('loginDirecteur', new UsersType())
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
