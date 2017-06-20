<?php

namespace UploadBundle\Entity;



/**
 * Picture
 */
class Picture
{

    /**
     * @var UploadedFile $file
     */
    public $file;

    /**
     * @param UploadedFile $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }


    public function preUpload()
    {
        //On donne un nom unique au fichier grace à uniqid et on récupère l'extension
        $this->src = uniqid(). '.' . $this->file->guessExtension();
        //définition de la balise alt
        $this->alt = $this->file->getClientOriginalName();
    }

    public function upload()
    {
        // upload du fichier
        $this->file->move($this->getUploadDir(), $this->src);
    }


    public function remove()
    {
        unlink($this->getUploadDir() . $this->src);
    }

    private function getUploadDir()
    {
        return __DIR__ . '/../../../web/uploads/images/';
    }

    // GENERATED CODE

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $src;

    /**
     * @var string
     */
    private $alt;


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
     * Set src
     *
     * @param string $src
     *
     * @return Picture
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Picture
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
