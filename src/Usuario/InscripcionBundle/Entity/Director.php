<?php

namespace Usuario\InscripcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario\InscripcionBundle\Entity\Director
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Usuario\InscripcionBundle\Entity\DirectorRepository")
 */
class Director
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
     * @Assert\Type(type="integer",message="el valor {{valor}} no es un {{tipo}} válido")
     */
    private $dni;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     * 
     */
    private $apellido;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotNull()
     */
    private $nombre;

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
     * 
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
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
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
     * @ORM\OneToMany(targetEntity="Expediente", mappedBy="director")
     * 
     */
    protected $expedientes;
    
    /**
     * @ORM\OnetoMany(targetEntity="AdjuntoDire", mappedBy="director") 
     */
    protected $adjuntosDire;
    
    public function __construct()
    {
        $this->expedientes=new ArrayCollection();
        $this->adjuntosDire=new ArrayCollection();
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
     * Get expedientes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getExpedientes()
    {
        return $this->expedientes;
    }

    /**
     * Add adjuntosDire
     *
     * @param Usuario\InscripcionBundle\Entity\AdjuntoDire $adjuntosDire
     */
    public function addAdjuntoDire(\Usuario\InscripcionBundle\Entity\AdjuntoDire $adjuntosDire)
    {
        $this->adjuntosDire[] = $adjuntosDire;
    }

    /**
     * Get adjuntosDire
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAdjuntosDire()
    {
        return $this->adjuntosDire;
    }
}