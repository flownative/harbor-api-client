<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class ProjectMember
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
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer.
     *
     * @var int
     */
    protected $roleId;
    /**
     * @var UserEntity
     */
    protected $memberUser;
    /**
     * @var UserGroup
     */
    protected $memberGroup;

    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer.
     */
    public function getRoleId(): int
    {
        return $this->roleId;
    }

    /**
     * The role id 1 for projectAdmin, 2 for developer, 3 for guest, 4 for maintainer.
     */
    public function setRoleId(int $roleId): self
    {
        $this->initialized['roleId'] = true;
        $this->roleId = $roleId;

        return $this;
    }

    public function getMemberUser(): UserEntity
    {
        return $this->memberUser;
    }

    public function setMemberUser(UserEntity $memberUser): self
    {
        $this->initialized['memberUser'] = true;
        $this->memberUser = $memberUser;

        return $this;
    }

    public function getMemberGroup(): UserGroup
    {
        return $this->memberGroup;
    }

    public function setMemberGroup(UserGroup $memberGroup): self
    {
        $this->initialized['memberGroup'] = true;
        $this->memberGroup = $memberGroup;

        return $this;
    }
}
