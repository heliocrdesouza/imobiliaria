<?php


namespace App\Forms;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class UsuarioType
 * @package App\Form
 */
class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
//            ->setAction('../usuario')
//            ->setMethod('POST')
            ->add('nome', TextType::class, [
                'label' => 'Nome',
            ])
            ->add('cpfCnpj', TextType::class, [
                'label' => 'Cpf',
                'attr' => [
                    'style' => 'width: 200px',
                    'data-mask' => '000.000.000-00',
                    'placeholder' => '_ _ _ . _ _ _ . _ _ _ - _ _'
                ]
            ])
            ->add('sexo', TextType::class, [
                'label' => 'Sexto',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('dtNascimento', DateType::class, [
                'label' => 'Data de Nascimento',
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('dtCadastro', DateType::class, [
                'label' => 'Data de Cadastro',
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('tipoUsuario', TextType::class, [
                'label' => 'Tipo De usuário',
            ])
            ->add('endereco', EnderecoType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
