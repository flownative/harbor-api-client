<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class OIDCUserInfo
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
     * the ID of the OIDC info record.
     *
     * @var int
     */
    protected $id;
    /**
     * the ID of the user.
     *
     * @var int
     */
    protected $userId;
    /**
     * the concatenation of sub and issuer in the ID token.
     *
     * @var string
     */
    protected $subiss;
    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts.
     *
     * @var string
     */
    protected $secret;
    /**
     * The creation time of the OIDC user info record.
     *
     * @var \DateTimeInterface
     */
    protected $creationTime;
    /**
     * The update time of the OIDC user info record.
     *
     * @var \DateTimeInterface
     */
    protected $updateTime;

    /**
     * the ID of the OIDC info record.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * the ID of the OIDC info record.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * the ID of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * the ID of the user.
     */
    public function setUserId(int $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * the concatenation of sub and issuer in the ID token.
     */
    public function getSubiss(): string
    {
        return $this->subiss;
    }

    /**
     * the concatenation of sub and issuer in the ID token.
     */
    public function setSubiss(string $subiss): self
    {
        $this->initialized['subiss'] = true;
        $this->subiss = $subiss;

        return $this;
    }

    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts.
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * the secret of the OIDC user that can be used for CLI to push/pull artifacts.
     */
    public function setSecret(string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;

        return $this;
    }

    /**
     * The creation time of the OIDC user info record.
     */
    public function getCreationTime(): \DateTimeInterface
    {
        return $this->creationTime;
    }

    /**
     * The creation time of the OIDC user info record.
     */
    public function setCreationTime(\DateTimeInterface $creationTime): self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;

        return $this;
    }

    /**
     * The update time of the OIDC user info record.
     */
    public function getUpdateTime(): \DateTimeInterface
    {
        return $this->updateTime;
    }

    /**
     * The update time of the OIDC user info record.
     */
    public function setUpdateTime(\DateTimeInterface $updateTime): self
    {
        $this->initialized['updateTime'] = true;
        $this->updateTime = $updateTime;

        return $this;
    }
}