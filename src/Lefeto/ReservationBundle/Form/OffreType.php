<?php

namespace Lefeto\ReservationBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelleOffre',TextType::class)
                ->add('prixUnitaireOffre',TextType::class)
                ->add('quantiteOffre',TextType::class)
                ->add('typelogement', EntityType::class, array(
                'class' => 'Lefeto\ReservationBundle\Entity\TypeLogement',
                'choice_label' => 'designationLogement'
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lefeto\ReservationBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lefeto_reservationbundle_offre';
    }


}
