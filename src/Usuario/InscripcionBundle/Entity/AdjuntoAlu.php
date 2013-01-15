<?php

namespace Usuario\InscripcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario\InscripcionBundle\Entity\AdjuntoAlu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AdjuntoAlu
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $ruta
     *
     * @ORM\Column(name="ruta", type="string", length=255, nullable=true)
     */
    private $ruta;


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
     * Set ruta
     *
     * @param string $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }
    
    /**
     * ruta absoluta al archivo
     */
    public function getAbsolutePath()
    {
        return null===$this->ruta ? null : $this->getUploadRootDir().'/'.$this->ruta;
    }
    
    /**
     *ruta Web al archivo 
     */
    public function getWebPath()
    {
        return null ===$this->ruta ? null : $this->getUploadDir().'/'.$this->ruta;
    }
    
    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../InscripcionBundle'.$this->getUploadDir();
    }

    /**
     * @ORM\ManytoOne(targetEntity="Alumno", inversedBy="adjuntosAlu")
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     * 
     *  
     */
    private $alumno;

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
}