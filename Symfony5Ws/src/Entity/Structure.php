<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity
 * @ApiResource
 */
class Structure
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="RUE", type="string", length=200, nullable=false)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=5, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=100, nullable=false)
     */
    private $ville;

    /**
     * @var bool
     *
     * @ORM\Column(name="ESTASSO", type="boolean", nullable=false)
     */
    private $estasso;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_DONATEURS", type="integer", nullable=true)
     */
    private $nbDonateurs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_ACTIONNAIRES", type="integer", nullable=true)
     */
    private $nbActionnaires;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     */
    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return bool
     */
    public function isEstasso(): bool
    {
        return $this->estasso;
    }

    /**
     * @param bool $estasso
     */
    public function setEstasso(bool $estasso): void
    {
        $this->estasso = $estasso;
    }

    /**
     * @return int|null
     */
    public function getNbDonateurs(): ?int
    {
        return $this->nbDonateurs;
    }

    /**
     * @param int|null $nbDonateurs
     */
    public function setNbDonateurs(?int $nbDonateurs): void
    {
        $this->nbDonateurs = $nbDonateurs;
    }

    /**
     * @return int|null
     */
    public function getNbActionnaires(): ?int
    {
        return $this->nbActionnaires;
    }

    /**
     * @param int|null $nbActionnaires
     */
    public function setNbActionnaires(?int $nbActionnaires): void
    {
        $this->nbActionnaires = $nbActionnaires;
    }


}
