<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['attr' => ['class'=>'form-control']])
            ->add('email', EmailType::class, ['attr' => ['class'=>'form-control']])
            ->add('text', TextareaType::class, [
                'label' => 'Type Your Comment', 
                'attr' => ['class'=>'form-control']
            ])
            ->add('Send', SubmitType::class, [
                'label' => 'Send', 
                'attr' => ['class'=>'pull-right btn btn-lg sr-button']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
