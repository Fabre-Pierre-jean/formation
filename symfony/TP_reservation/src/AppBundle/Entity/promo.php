<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\promoRepository")
 */
class promo
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
     * @var int
     *
     * @ORM\Column(name="nb_eleve", type="integer")
     */
    private $nbEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="course_title", type="string", length=255)
     */
    private $courseTitle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbEleve
     *
     * @param integer $nbEleve
     *
     * @return promo
     */
    public function setNbEleve($nbEleve)
    {
        $this->nbEleve = $nbEleve;

        return $this;
    }

    /**
     * Get nbEleve
     *
     * @return int
     */
    public function getNbEleve()
    {
        return $this->nbEleve;
    }

    /**
     * Set courseTitle
     *
     * @param string $courseTitle
     *
     * @return promo
     */
    public function setCourseTitle($courseTitle)
    {
        $this->courseTitle = $courseTitle;

        return $this;
    }

    /**
     * Get courseTitle
     *
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->courseTitle;
    }
}

