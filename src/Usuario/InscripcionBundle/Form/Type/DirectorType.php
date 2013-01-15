<?php

namespace Usuario\InscripcionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;




class DirectorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
            {
                $builder->add('dni');                
                $builder->add('apellido');
                $builder->add('nombre');
                $builder->add('direccion');
                $builder->add('telefono');
                $builder->add('adjuntosDire', 'file');
            }
            
    public function getName()
            {
                return 'formDirector';
            }
    public function getDefaultOptions(array $opciones)
            {
                return array(
                    'data_class'=>'Usuario\InscripcionBundle\Entity\Director',
                ) ;
            } 
}

?>
