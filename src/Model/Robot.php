<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class Robot
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
     * @var int
     */
    protected $id;
    /**
     * The name of the robot.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the robot.
     *
     * @var string
     */
    protected $description;
    /**
     * The secret of the robot.
     *
     * @var string
     */
    protected $secret;
    /**
     * The level of the robot, project or system.
     *
     * @var string
     */
    protected $level;
    /**
     * The duration of the robot in days.
     *
     * @var int
     */
    protected $duration;
    /**
     * The editable status of the robot.
     *
     * @var bool
     */
    protected $editable;
    /**
     * The disable status of the robot.
     *
     * @var bool
     */
    protected $disable;
    /**
     * The expiration date of the robot.
     *
     * @var int
     */
    protected $expiresAt;
    /**
     * @var list<RobotPermission>
     */
    protected $permissions;
    /**
     * The creation time of the robot.
     *
     * @var \DateTimeInterface
     */
    protected $creationTime;
    /**
     * The update time of the robot.
     *
     * @var \DateTimeInterface
     */
    protected $updateTime;

    /**
     * The ID of the robot.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The ID of the robot.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the robot.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the robot.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The description of the robot.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * The description of the robot.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The secret of the robot.
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * The secret of the robot.
     */
    public function setSecret(string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;

        return $this;
    }

    /**
     * The level of the robot, project or system.
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * The level of the robot, project or system.
     */
    public function setLevel(string $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    /**
     * The duration of the robot in days.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * The duration of the robot in days.
     */
    public function setDuration(int $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    /**
     * The editable status of the robot.
     */
    public function getEditable(): bool
    {
        return $this->editable;
    }

    /**
     * The editable status of the robot.
     */
    public function setEditable(bool $editable): self
    {
        $this->initialized['editable'] = true;
        $this->editable = $editable;

        return $this;
    }

    /**
     * The disable status of the robot.
     */
    public function getDisable(): bool
    {
        return $this->disable;
    }

    /**
     * The disable status of the robot.
     */
    public function setDisable(bool $disable): self
    {
        $this->initialized['disable'] = true;
        $this->disable = $disable;

        return $this;
    }

    /**
     * The expiration date of the robot.
     */
    public function getExpiresAt(): int
    {
        return $this->expiresAt;
    }

    /**
     * The expiration date of the robot.
     */
    public function setExpiresAt(int $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * @return list<RobotPermission>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param list<RobotPermission> $permissions
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * The creation time of the robot.
     */
    public function getCreationTime(): \DateTimeInterface
    {
        return $this->creationTime;
    }

    /**
     * The creation time of the robot.
     */
    public function setCreationTime(\DateTimeInterface $creationTime): self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * The update time of the robot.
     */
    public function getUpdateTime(): \DateTimeInterface
    {
        return $this->updateTime;
    }

    /**
     * The update time of the robot.
     */
    public function setUpdateTime(\DateTimeInterface $updateTime): self
    {
        $this->initialized['updateTime'] = true;
        $this->updateTime = $updateTime;

        return $this;
    }
}