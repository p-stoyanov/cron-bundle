<?php

declare(strict_types=1);

namespace Shapecode\Bundle\CronBundle\Entity;

use DateTime;

abstract class AbstractEntity implements AbstractEntityInterface
{
    /**
     * @var string|int|null
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id = null) : void
    {
        $this->id = $id;
    }

    public function setCreatedAt(DateTime $createdAt) : void
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt() : DateTime
    {
        return $this->createdAt;
    }

    public function setUpdatedAt(DateTime $updatedAt) : void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt() : DateTime
    {
        return $this->updatedAt;
    }
}
