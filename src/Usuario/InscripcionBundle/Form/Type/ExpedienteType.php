<?php

namespace Usuario\InscripcionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;



class ExpedienteType extends AbstractType{
    public function buildForm(FormBuilder $builder, array $options)
    {
                $builder->add('fecha');              
                $builder->add('alumno',new AlumnoType());
                
                $builder->add('director',new DirectorType());
                
    }
            
    public function getName()
    {
                return 'formExpediente';
    }
    public function getDefaultOptions(array $opciones)
    {
                return array(
                    'data_class'=>'Usuario\InscripcionBundle\Entity\Expediente',
                ) ;
    } 
    
    
    
}
?>
