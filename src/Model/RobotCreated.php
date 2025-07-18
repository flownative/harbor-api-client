<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class RobotCreated
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
     * The ID of the robot.
     *
     * @var int|null
     */
    protected $id;
    /**
     * The name of the robot.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The secret of the robot.
     *
     * @var string|null
     */
    protected $secret;
    /**
     * The creation time of the robot.
     *
     * @var \DateTimeInterface|null
     */
    protected $creationTime;
    /**
     * The expiration date of the robot.
     *
     * @var int|null
     */
    protected $expiresAt;

    /**
     * The ID of the robot.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * The ID of the robot.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the robot.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the robot.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The secret of the robot.
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * The secret of the robot.
     */
    public function setSecret(?string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;

        return $this;
    }

    /**
     * The creation time of the robot.
     */
    public function getCreationTime(): ?\DateTimeInterface
    {
        return $this->creationTime;
    }

    /**
     * The creation time of the robot.
     */
    public function setCreationTime(?\DateTimeInterface $creationTime): self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * The expiration date of the robot.
     */
    public function getExpiresAt(): ?int
    {
        return $this->expiresAt;
    }

    /**
     * The expiration date of the robot.
     */
    public function setExpiresAt(?int $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }
}
