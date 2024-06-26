<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class Statistic
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The count of the private projects.
     *
     * @var int
     */
    protected $privateProjectCount;
    /**
     * The count of the private repositories.
     *
     * @var int
     */
    protected $privateRepoCount;
    /**
     * The count of the public projects.
     *
     * @var int
     */
    protected $publicProjectCount;
    /**
     * The count of the public repositories.
     *
     * @var int
     */
    protected $publicRepoCount;
    /**
     * The count of the total projects, only be seen by the system admin.
     *
     * @var int
     */
    protected $totalProjectCount;
    /**
     * The count of the total repositories, only be seen by the system admin.
     *
     * @var int
     */
    protected $totalRepoCount;
    /**
     * The total storage consumption of blobs, only be seen by the system admin.
     *
     * @var int
     */
    protected $totalStorageConsumption;

    /**
     * The count of the private projects.
     */
    public function getPrivateProjectCount(): int
    {
        return $this->privateProjectCount;
    }

    /**
     * The count of the private projects.
     */
    public function setPrivateProjectCount(int $privateProjectCount): self
    {
        $this->initialized['privateProjectCount'] = true;
        $this->privateProjectCount = $privateProjectCount;

        return $this;
    }

    /**
     * The count of the private repositories.
     */
    public function getPrivateRepoCount(): int
    {
        return $this->privateRepoCount;
    }

    /**
     * The count of the private repositories.
     */
    public function setPrivateRepoCount(int $privateRepoCount): self
    {
        $this->initialized['privateRepoCount'] = true;
        $this->privateRepoCount = $privateRepoCount;

        return $this;
    }

    /**
     * The count of the public projects.
     */
    public function getPublicProjectCount(): int
    {
        return $this->publicProjectCount;
    }

    /**
     * The count of the public projects.
     */
    public function setPublicProjectCount(int $publicProjectCount): self
    {
        $this->initialized['publicProjectCount'] = true;
        $this->publicProjectCount = $publicProjectCount;

        return $this;
    }

    /**
     * The count of the public repositories.
     */
    public function getPublicRepoCount(): int
    {
        return $this->publicRepoCount;
    }

    /**
     * The count of the public repositories.
     */
    public function setPublicRepoCount(int $publicRepoCount): self
    {
        $this->initialized['publicRepoCount'] = true;
        $this->publicRepoCount = $publicRepoCount;

        return $this;
    }

    /**
     * The count of the total projects, only be seen by the system admin.
     */
    public function getTotalProjectCount(): int
    {
        return $this->totalProjectCount;
    }

    /**
     * The count of the total projects, only be seen by the system admin.
     */
    public function setTotalProjectCount(int $totalProjectCount): self
    {
        $this->initialized['totalProjectCount'] = true;
        $this->totalProjectCount = $totalProjectCount;

        return $this;
    }

    /**
     * The count of the total repositories, only be seen by the system admin.
     */
    public function getTotalRepoCount(): int
    {
        return $this->totalRepoCount;
    }

    /**
     * The count of the total repositories, only be seen by the system admin.
     */
    public function setTotalRepoCount(int $totalRepoCount): self
    {
        $this->initialized['totalRepoCount'] = true;
        $this->totalRepoCount = $totalRepoCount;

        return $this;
    }

    /**
     * The total storage consumption of blobs, only be seen by the system admin.
     */
    public function getTotalStorageConsumption(): int
    {
        return $this->totalStorageConsumption;
    }

    /**
     * The total storage consumption of blobs, only be seen by the system admin.
     */
    public function setTotalStorageConsumption(int $totalStorageConsumption): self
    {
        $this->initialized['totalStorageConsumption'] = true;
        $this->totalStorageConsumption = $totalStorageConsumption;

        return $this;
    }
}