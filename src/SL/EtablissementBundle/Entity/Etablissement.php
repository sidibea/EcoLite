<?php

namespace SL\EtablissementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SL\EtablissementBundle\Entity\EtablissementRepository")
 */
class Etablissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="academie", type="string", length=255)
     */
    private $academie;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @return string
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * @param string $devise
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=14)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="SL\EtablissementBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $logo;

    /**
     * @ORM\OneToOne(targetEntity="SL\EtablissementBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $cachet;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_directeur", type="string", length=255)
     */
    private $nomDirecteur;

    /**
     * @ORM\OneToOne(targetEntity="SL\EtablissementBundle\Entity\Users", cascade={"persist", "remove"})
     */
    private $loginDirecteur;


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
     * Set type
     *
     * @param string $type
     * @return Etablissement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etablissement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Etablissement
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Etablissement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Etablissement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }



    /**
     * Set academie
     *
     * @param string $academie
     * @return Etablissement
     */
    public function setAcademie($academie)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return string 
     */
    public function getAcademie()
    {
        return $this->academie;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Etablissement
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Etablissement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function setLogo(Image $logo)
    {
        $this->logo = $logo;

        return $this;
    }


    public function getLogo()
    {
        return $this->logo;
    }


    public function setCachet(Image $cachet)
    {
        $this->cachet = $cachet;

        return $this;
    }

    /**
     * Get cachet
     *
     * @return string 
     */
    public function getCachet()
    {
        return $this->cachet;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Etablissement
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set nomDirecteur
     *
     * @param string $nomDirecteur
     * @return Etablissement
     */
    public function setNomDirecteur($nomDirecteur)
    {
        $this->nomDirecteur = $nomDirecteur;

        return $this;
    }

    /**
     * Get nomDirecteur
     *
     * @return string 
     */
    public function getNomDirecteur()
    {
        return $this->nomDirecteur;
    }


    public function setLoginDirecteur(Users $users)
    {
        $this->loginDirecteur = $users;

        return $this;
    }


    public function getLoginDirecteur()
    {
        return $this->loginDirecteur;
    }
}
