<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class Access
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
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     *
     * @var string
     */
    protected $resource;
    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     *
     * @var string
     */
    protected $action;
    /**
     * The effect of the access.
     *
     * @var string
     */
    protected $effect;

    /**
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     */
    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     */
    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }

    /**
     * The effect of the access.
     */
    public function getEffect(): string
    {
        return $this->effect;
    }

    /**
     * The effect of the access.
     */
    public function setEffect(string $effect): self
    {
        $this->initialized['effect'] = true;
        $this->effect = $effect;

        return $this;
    }
}