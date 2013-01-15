<?php

namespace Usuario\InscripcionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;



class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
                $builder->add('dni');
                $builder->add('lu');
                $builder->add('nombre');
                $builder->add('apellido');
                $builder->add('direccion');
                $builder->add('telefono');
                $builder->add('adjuntosAlu','file');
    }
            
    
    public function getDefaultOptions(array $options)
    {
                return array(
                    'data_class'=>'Usuario\InscripcionBundle\Entity\Alumno',
                ) ;
    } 
    public function getName()
    {
         return 'formAlumno';
    }
}
?>
