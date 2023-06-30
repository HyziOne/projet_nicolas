<?php
// src/Form/DevisType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vousEtes', ChoiceType::class, [
                'choices'  => [
                    'Particulier' => 'Particulier',
                    'Professionel' => 'Professionel',
                    'Association' => 'Association',
                    'Autres' => 'Autres',
                ],
            ])
            ->add('natureDuProjet', ChoiceType::class, [
                'choices'  => [
                    'Création' => 'Création',
                    'Refonte' => 'Refonte',
                    'Ajout de fonctionnalités sur un site existant' => 'Ajout de fonctionnalités sur un site existant',
                    'Formation / Assistance' => 'Formation / Assistance',
                    'Autres' => 'Autres',
                ],
            ])
            ->add('typeDeSite', ChoiceType::class, [
                'choices'  => [
                    'Site vitrine / Site institutionnel d\'entreprise / Site de marque' => 'Site vitrine / Site institutionnel d\'entreprise / Site de marque',
                    'Blog' => 'Blog',
                    'E-Commerce / Boutique en ligne' => 'E-Commerce / Boutique en ligne',
                    'Autres' => 'Autres',
                ],
            ])
            ->add('graphismeARealiser', ChoiceType::class, [
                'choices'  => [
                    'Sur mesure' => 'Sur mesure',
                    'Utilisation d\'un template' => 'Utilisation d\'un template',
                    'Basique' => 'Basique',
                    'Autres' => 'Autres',
                ],
            ])
            ->add('urlDuSite', TextType::class, [
                'required' => false,
            ])
            ->add('save', SubmitType::class, ['label' => 'Envoyer'])
        ;
    }
}
