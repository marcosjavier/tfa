<?php
/**
 * Description of InscripcionController
 *
 * @author pc
 */
namespace Usuario\InscripcionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Usuario\InscripcionBundle\Entity\Expediente;
use Usuario\InscripcionBundle\Entity\Alumno;
use Usuario\InscripcionBundle\Entity\Director;
use Usuario\InscripcionBundle\Form\Type\ExpedienteType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Doctrine\ORM\Mapping;

class InscripcionController extends Controller
{
    public function  crearExpedienteAction()
    {
            $expediente=new Expediente();
            $expediente->setFechaExpediente(new \DateTime());
            
            $em=  $this->getDoctrine()->getEntityManager();
            $em->persist($expediente);
            $em->flush();
            
            return $this->render('UsuarioInscripcionBundle:Default:Expediente.html.twig',
                    array('expediente' => $expediente));
    }
    public function formularioAction()
    {    
        // obtenemos el request que obtendrá los datos
         $request = $this->getRequest();
     
         //creamos un objeto expediente vacío y le asignamos la fecha actual
         $expediente=new Expediente;
         $expediente->setFecha(new \DateTime());
         
         //creamos el formulario a mostrar
         $form= $this->createForm(new ExpedienteType(),$expediente);
        
         //-- En caso de que el request haya sido invocado por POST
         //   procesaremos el formulario
         if($request->getMethod() == 'POST')
         {   //--pasamos el request al método bindRequest
             //del objeto form 
             $form->bindRequest($request);
             
             //si los datos son válidos los guardamos en la base de datos
             if ($form->isValid())
             {
                 $em=$this->getDoctrine()->getEntityManager();
                 $em->persist($expediente);
                 $alumno=$expediente->getAlumno();
                 $em->persist($alumno);
                 $director=$expediente->getDirector();
                 $em->persist($director);
                 $em->flush();
                 
                 return $this->redirect($this->generateUrl('formulario_listar'));                
                 
             }
                    
          }        
         return $this->render('UsuarioInscripcionBundle:Default:Inscripcion.html.twig',
                array('form'=>$form->createView()));
        
        
    }
    public function listarAction()
    {   
        
        $em=$this->getDoctrine()->getEntityManager();
        $repositorio=$em->getRepository('UsuarioInscripcionBundle:Expediente');
        
        
        $expedientes=$repositorio->findAll();
        
        
       
        
        return $this->render('UsuarioInscripcionBundle:Default:Listar.html.twig', array('expedientes'=> $expedientes));
        
    }
}


