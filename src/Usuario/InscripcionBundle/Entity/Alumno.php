<?php

namespace Usuario\InscripcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario\InscripcionBundle\Entity\Alumno
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Usuario\InscripcionBundle\Entity\AlumnoRepository")
 */
class Alumno
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
     * @var integer $dni
     *
     * @ORM\Column(name="dni", type="integer")
     * 
     * @Assert\Type(type="integer", message="alumno.dni.ty_pe")
     * @Assert\NotNull()
     */
    private $dni;

    /**
     * @var integer $lu
     *
     * @ORM\Column(name="lu", type="integer")
     * @Assert\NotNull()
     * @Assert\Type(type="integer", message="el valor {{valor}} no es un {{tipo}} válido")
     */
    private $lu;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotNull()
     * 
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     * @Assert\NotNull()
     */
    private $apellido;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     * @Assert\NotNull()
     */
    private $direccion;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     * @Assert\NotNull()
     */
    private $telefono;


    /**
     * Get id
     *
     * @return integer 
     * 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dni
     *
     * @param integer $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return integer 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set lu
     *
     * @param integer $lu
     */
    public function setLu($lu)
    {
        $this->lu = $lu;
    }

    /**
     * Get lu
     *
     * @return integer 
     */
    public function getLu()
    {
        return $this->lu;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direcciion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    
    /**
     * @ORM\OneToMany(targetEntity="Expediente", mappedBy="alumno")
     */
    protected $expedientes;
    
    /**
     * @ORM\OneToMany(targetEntity="AdjuntoAlu", mappedBy="alumno")
     */
    protected $adjuntosAlu;
    
    public function __construct()
    {
        $this->expedientes=new ArrayCollection();
        $this->adjuntosAlu=new ArrayCollection();
    }
   
   

    /**
     * Add expedientes
     *
     * @param Usuario\InscripcionBundle\Entity\Expediente $expedientes
     */
    public function addExpediente(\Usuario\InscripcionBundle\Entity\Expediente $expedientes)
    {
        $this->expedientes[] = $expedientes;
    }    

    /**
     * Add adjuntoAlu
     *
     * @param Usuario\InscripcionBundle\Entity\AdjuntoAlu $adjuntosAlu
     */
    public function addAdjuntoAlu(\Usuario\InscripcionBundle\Entity\AdjuntoAlu $adjuntosAlu)
    {
        $this->adjuntosAlu[] = $adjuntosAlu;
    }

    /**
     * Get adjuntosAlu
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAdjuntosAlu()
    {
        return $this->adjuntosAlu;
    }

    /**
     * Get expedientes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExpedientes()
    {
        return $this->expedientes;
    }
}