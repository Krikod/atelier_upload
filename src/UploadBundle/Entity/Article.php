<?php

namespace UploadBundle\Entity;

/**
 * Article
 */
class Article
{

    /**
     * Article constructor.
     * Set date to new datetime(now)
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;


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
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @var \UploadBundle\Entity\Picture
     */
    private $picture;


    /**
     * Set picture
     *
     * @param \UploadBundle\Entity\Picture $picture
     *
     * @return Article
     */
    public function setPicture(\UploadBundle\Entity\Picture $picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \UploadBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
