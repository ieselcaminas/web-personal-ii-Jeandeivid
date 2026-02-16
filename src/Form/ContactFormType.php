<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, ['attr' => ['class' => 'contactus', 'placeholder' => 'First Name']])
            ->add('lastName', TextType::class, ['attr' => ['class' => 'contactus', 'placeholder' => 'Last Name']])
            ->add('email', EmailType::class, ['attr' => ['class' => 'contactus', 'placeholder' => 'Email']])
            ->add('subject', TextType::class, ['attr' => ['class' => 'contactus', 'placeholder' => 'Subject']])
            ->add('message', TextareaType::class, ['attr' => ['class' => 'textarea', 'placeholder' => 'Message']])
            ->add('Send', SubmitType::class, ['attr' => ['class' => 'send_btn']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
