<?php
namespace wzorce\composite\listitem;

abstract class Item
{
    protected $description;
    protected $dateDue;
    protected $dateCreated;
    protected $dateCompleted;

    public function __construct(string $description, \DateTime $dateDue)
    {
        $this->description = $description;
        $this->dateDue = $dateDue;
        $this->dateCreated = new \DateTime();
    }

    public function getComposite()
    {
        return null;

    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDateDue(): string
    {
        return $this->dateDue;
    }

    /**
     * @param string $dateDue
     */
    public function setDateDue(string $dateDue): void
    {
        $this->dateDue = $dateDue;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return mixed
     */
    public function getDateCompleted()
    {
        return $this->dateCompleted;
    }

    /**
     * @param mixed $dateCompleted
     */
    public function setDateCompleted($dateCompleted): void
    {
        $this->dateCompleted = $dateCompleted;
    }


}