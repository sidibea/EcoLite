<?php

namespace SL\EtablissementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Length(
     *      min = 8,
     *      max = 50,
     *      minMessage = "Le nom de l'etablissement doit etre au moins {{ limit }} caracteres de long",
     *      maxMessage = "Le nom de l'etablissement ne doit pas depasser {{ limit }} caracteres"
     * )
     *@Assert\NotBlank(message="Le nom de l'etablissement ne peut pas etre vide")
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @Assert\Country()
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     * @Assert\NotBlank(message="Le champ {Ville} ne peut pas etre vide")
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     * @Assert\NotBlank(message="Le champ {Adresse} ne peut pas etre vide")
     * @Assert\Length(
     *      min = 8,
     *      max = 50,
     *      minMessage = "L'adresse ne doit etre au moins {{ limit }} caracteres de long",
     *      maxMessage = "L'adresse ne doit pas depasser {{ limit }} caracteres"
     * )
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     * @Assert\NotBlank(message="Le champ {Academie} ne peut pas etre vide")
     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Le nom de l'academie doit etre au moins {{ limit }} caracteres de long",
     *      maxMessage = "Le nom de l'academie ne doit pas depasser {{ limit }} caracteres"
     * )
     * @ORM\Column(name="academie", type="string", length=255)

     */
    private $academie;

    /**
     * @var string
     * @Assert\Email(
     *     message = "L'adresse email '{{ value }}'  n'est pas une adresse email vailde.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "La devise doit etre au moins {{ limit }} caracteres de long",
     *      maxMessage = "Le devis ne doit pas depasser {{ limit }} caracteres"
     * )
     * @Assert\NotBlank(message="Le champ {devise} ne peut pas etre vide")
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_directeur", type="string", length=255)
     */
    private $nomDirecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="login_directeur", type="string", length=255)
     */
    private $loginDirecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="signature_directeur", type="string", length=255)
     */
    private $signatureDirecteur;

    /**
     * @var string
     * @Assert\Url()
     * @ORM\Column(name="siteweb", type="string", length=255)
     */
    private $siteweb;


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
     * Set logo
     *
     * @param string $logo
     * @return Etablissement
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return Etablissement
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string 
     */
    public function getDevise()
    {
        return $this->devise;
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

    /**
     * Set loginDirecteur
     *
     * @param string $loginDirecteur
     * @return Etablissement
     */
    public function setLoginDirecteur($loginDirecteur)
    {
        $this->loginDirecteur = $loginDirecteur;

        return $this;
    }

    /**
     * Get loginDirecteur
     *
     * @return string 
     */
    public function getLoginDirecteur()
    {
        return $this->loginDirecteur;
    }

    /**
     * Set signatureDirecteur
     *
     * @param string $signatureDirecteur
     * @return Etablissement
     */
    public function setSignatureDirecteur($signatureDirecteur)
    {
        $this->signatureDirecteur = $signatureDirecteur;

        return $this;
    }

    /**
     * Get signatureDirecteur
     *
     * @return string 
     */
    public function getSignatureDirecteur()
    {
        return $this->signatureDirecteur;
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
}
