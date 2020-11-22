<?php

namespace App\Form;

use App\Entity\Auction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuctionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('image', null, ['data_class' => null], ["attr" => [], 'required' => false])
            ->add('initialPrice')
            ->add('finalBid');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Auction::class,
            ]
        );
    }
}
