<?php


namespace App\Forms;

use App\Entity\Endereco;
use App\Entity\Usuario;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class EnderecoType
 * @package App\Forms
 */
class EnderecoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('logradouro', TextType::class, [
                'label' => 'Logradouro:'
            ])
            ->add('bairro', TextType::class, [
                'label' => 'Bairro:',
            ])
            ->add('numero', TextType::class, [
                'label' => 'Numero:',
            ])
            ->add('cep', TextType::class, [
                'label' => 'CEP:',
                'attr' => [
                    'data-mask' => '00000-000',
                    'placeholder' => '_ _ _ _ _ . _ _ _'
                ]
            ])
            ->add('complemento', TextType::class, [
                'label' => 'Complemento',
            ])
            ->add('uf', ChoiceType::class, [
                'label' => 'UF:',
                'choices' => [
                    'Acre' => 'AC',
                    'Alagoas' => 'AL',
                    'Amazonas' => 'AM',
                    'Amapá' => 'AP',
                    'Bahia' => 'BA',
                    'Ceará' => 'CE',
                    'Distrito Federal' => 'DF',
                    'Espírito Santo' => 'ES',
                    'Goiás' => 'GO',
                    'Maranhão' => 'MA',
                    'Mato Grosso' => 'MT',
                    'Mato Grosso do Sul' => 'MS',
                    'Minas Gerais' => 'MG',
                    'Pará' => 'PA',
                    'Paraíba' => 'PB',
                    'Paraná' => 'PR',
                    'Pernambuco' => 'PE',
                    'Piauí' => 'PI',
                    'Rio de Janeiro' => 'RJ',
                    'Rio Grande do Norte' => 'RN',
                    'Rio Grande do Sul' => 'RS',
                    'Rondônia' => 'RO',
                    'Roraima' => 'RR',
                    'Santa Catarina' => 'SC',
                    'São Paulo' => 'SP',
                    'Sergipe' => 'SE',
                    'Tocantins' => 'TO'
                ],
            ])
            ->add('cidade', TextType::class, [
                'label' => 'Cidade:',
            ])
            ->add('dddTelefone', TextType::class, [
                'label' => 'DDD:',
                'attr' => [
                    'data-mask' => '00',
                    'placeholder' => '(_ _)'
                ]
            ])
            ->add('telefone', TelType::class, [
                'label' => 'Telefone:',
                'attr' => [
                    'data-mask' => '000-0000',
                    'placeholder' => '_ _ _ - _ _ _ _'
                ]
            ])
            ->add('dddCelular', TextType::class, [
                'label' => 'DDD Celular:',
                'attr' => [
                    'data-mask' => '00',
                    'placeholder' => '(_ _)'
                ]
            ])
            ->add('celular', TextType::class, [
                'label' => 'Celular:',
                'attr' => [
                    'data-mask' => '00000-0000',
                    'placeholder' => '_ _ _ _ _  - _ _ _ _'
                ]
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Endereco::class,
        ]);
    }
}
