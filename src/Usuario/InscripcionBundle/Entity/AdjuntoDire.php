<?php

namespace Usuario\InscripcionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario\InscripcionBundle\Entity\AdjuntoDire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AdjuntoDire
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
     * @ORM\ManytoOne(targetEntity="Director", inversedBy="adjuntosDire")
     * @ORM\JoinColumn(name="director_id",referencedColumnName="id")
     * @return integer
     *  
     */
    private $director;


    /**
     * Set director
     *
     * @param Usuario\InscripcionBundle\Entity\director $director
     */
    public function setDirector(\Usuario\InscripcionBundle\Entity\director $director)
    {
        $this->director = $director;
    }

    /**
     * Get director
     *
     * @return Usuario\InscripcionBundle\Entity\director 
     */
    public function getDirector()
    {
        return $this->director;
    }
}