<?php

namespace Usuario\InscripcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Usuario\InscripcionBundle\Entity\Expediente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Usuario\InscripcionBundle\Entity\ExpedienteRepository")
 */
class Expediente
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;
    
    /**
     * lado propietarrio de una relacion, determina las modificaciones de la 
     * relación en la base de datos haciendo referencia al lado inverso con el
     * atributo inversedBy
     * 
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="expedientes")
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     * @return integer
     * 
     */
   protected $alumno;
   
    /**
     * lado propietarrio de una relacion, determina las modificaciones de la 
     * relación en la base de datos haciendo referencia al lado inverso con el
     * atributo inversedBy
     * 
     * @ORM\ManyToOne(targetEntity="Director", inversedBy="expedientes")
     * @ORM\JoinColumn(name="director_id", referencedColumnName="id")
     * @return integer
     */
    protected $director;
   
   


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
      
   

    /**
     * Set alumno
     *
     * @param Usuario\InscripcionBundle\Entity\Alumno $alumno
     */
    public function setAlumno(\Usuario\InscripcionBundle\Entity\Alumno $alumno)
    {
        $this->alumno = $alumno;
    }

    /**
     * Get alumno
     *
     * @return Usuario\InscripcionBundle\Entity\Alumno 
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set director
     *
     * @param Usuario\InscripcionBundle\Entity\Director $director
     */
    public function setDirector(\Usuario\InscripcionBundle\Entity\Director $director)
    {
        $this->director = $director;
    }

    /**
     * Get director
     *
     * @return Usuario\InscripcionBundle\Entity\Director 
     */
    public function getDirector()
    {
        return $this->director;
    }
}