<?php

namespace Lefeto\ReservationBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypelogementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('designationLogement',TextType::class)
                ->add('prixLogement',TextType::class)
                ->add('nombreOffresType',TextType::class)
                ->add('residence', EntityType::class, array(
                'class' => 'Lefeto\ReservationBundle\Entity\Residence',
                'choice_label' => 'nomResidence',
                'attr' => array('class' => 'form-control')
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lefeto\ReservationBundle\Entity\Typelogement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lefeto_reservationbundle_typelogement';
    }


}
