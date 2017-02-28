<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fixture
 *
 * @ORM\Table(name="fixture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FixtureRepository")
 */
class Fixture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jornada", type="string", length=255)
     */
    private $jornada;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="equipo1", type="string", length=255)
     */
    private $equipo1;

    /**
     * @var string
     *
     * @ORM\Column(name="equipo2", type="string", length=255)
     */
    private $equipo2;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado1", type="string", length=255)
     */
    private $resultado1;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado2", type="string", length=255)
     */
    private $resultado2;


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
     * Set jornada
     *
     * @param string $jornada
     * @return Fixture
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;

        return $this;
    }

    /**
     * Get jornada
     *
     * @return string 
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return Fixture
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set equipo1
     *
     * @param string $equipo1
     * @return Fixture
     */
    public function setEquipo1($equipo1)
    {
        $this->equipo1 = $equipo1;

        return $this;
    }

    /**
     * Get equipo1
     *
     * @return string 
     */
    public function getEquipo1()
    {
        return $this->equipo1;
    }

    /**
     * Set equipo2
     *
     * @param string $equipo2
     * @return Fixture
     */
    public function setEquipo2($equipo2)
    {
        $this->equipo2 = $equipo2;

        return $this;
    }

    /**
     * Get equipo2
     *
     * @return string 
     */
    public function getEquipo2()
    {
        return $this->equipo2;
    }

    /**
     * Set resultado1
     *
     * @param string $resultado1
     * @return Fixture
     */
    public function setResultado1($resultado1)
    {
        $this->resultado1 = $resultado1;

        return $this;
    }

    /**
     * Get resultado1
     *
     * @return string 
     */
    public function getResultado1()
    {
        return $this->resultado1;
    }

    /**
     * Set resultado2
     *
     * @param string $resultado2
     * @return Fixture
     */
    public function setResultado2($resultado2)
    {
        $this->resultado2 = $resultado2;

        return $this;
    }

    /**
     * Get resultado2
     *
     * @return string 
     */
    public function getResultado2()
    {
        return $this->resultado2;
    }
}
