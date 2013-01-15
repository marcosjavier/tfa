<?php
namespace Usuario\InscripcionBundle\Controller;

use Usuario\InscripcionBundle\Entidades\Inscripcion;
use Usuario\InscripcionBundle\Form\InscripcionType;

use Symfony\Component\Form\FormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return new Response('hola, capo');
    }
    public function inscripcionAction()
    {
        $inscripcion=new Inscripcion;
        $form=$this->createForm(new InscripcionType(),$inscripcion);
        return $this->render('UsuarioInscripcionBundle:Default:inscripcion.html.twig',array('form'=>$form->createView()));
    }
    public function otracosaAction()
    {
        return new Response('otra_cosa');
    }
}

?>