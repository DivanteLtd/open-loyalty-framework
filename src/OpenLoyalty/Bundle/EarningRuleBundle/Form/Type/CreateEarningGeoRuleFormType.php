<?php
/**
 * Copyright © 2018 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace OpenLoyalty\Bundle\EarningRuleBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use OpenLoyalty\Bundle\EarningRuleBundle\Model\EarningGeoRule;

/**
 * Class CreateEarningReoRuleFormType.
 */
class CreateEarningGeoRuleFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('latitude', NumberType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Type([
                        'type' => 'numeric',
                    ]),
                ],
            ])
            ->add('longitude', NumberType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Type([
                        'type' => 'numeric',
                    ]),
                ],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => EarningGeoRule::class,
        ));
    }
}
