<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Model;

class ProjectMetadata
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
     * The public status of the project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $public;
    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $enableContentTrust;
    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $enableContentTrustCosign;
    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $preventVul;
    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     *
     * @var string|null
     */
    protected $severity;
    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     *
     * @var string|null
     */
    protected $autoScan;
    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     *
     * @var string|null
     */
    protected $reuseSysCveAllowlist;
    /**
     * The ID of the tag retention policy for the project.
     *
     * @var string|null
     */
    protected $retentionId;

    /**
     * The public status of the project. The valid values are "true", "false".
     */
    public function getPublic(): ?string
    {
        return $this->public;
    }

    /**
     * The public status of the project. The valid values are "true", "false".
     */
    public function setPublic(?string $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }

    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     */
    public function getEnableContentTrust(): ?string
    {
        return $this->enableContentTrust;
    }

    /**
     * Whether content trust is enabled or not. If it is enabled, user can't pull unsigned images from this project. The valid values are "true", "false".
     */
    public function setEnableContentTrust(?string $enableContentTrust): self
    {
        $this->initialized['enableContentTrust'] = true;
        $this->enableContentTrust = $enableContentTrust;

        return $this;
    }

    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     */
    public function getEnableContentTrustCosign(): ?string
    {
        return $this->enableContentTrustCosign;
    }

    /**
     * Whether cosign content trust is enabled or not. If it is enabled, user can't pull images without cosign signature from this project. The valid values are "true", "false".
     */
    public function setEnableContentTrustCosign(?string $enableContentTrustCosign): self
    {
        $this->initialized['enableContentTrustCosign'] = true;
        $this->enableContentTrustCosign = $enableContentTrustCosign;

        return $this;
    }

    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     */
    public function getPreventVul(): ?string
    {
        return $this->preventVul;
    }

    /**
     * Whether prevent the vulnerable images from running. The valid values are "true", "false".
     */
    public function setPreventVul(?string $preventVul): self
    {
        $this->initialized['preventVul'] = true;
        $this->preventVul = $preventVul;

        return $this;
    }

    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     */
    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    /**
     * If the vulnerability is high than severity defined here, the images can't be pulled. The valid values are "none", "low", "medium", "high", "critical".
     */
    public function setSeverity(?string $severity): self
    {
        $this->initialized['severity'] = true;
        $this->severity = $severity;

        return $this;
    }

    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     */
    public function getAutoScan(): ?string
    {
        return $this->autoScan;
    }

    /**
     * Whether scan images automatically when pushing. The valid values are "true", "false".
     */
    public function setAutoScan(?string $autoScan): self
    {
        $this->initialized['autoScan'] = true;
        $this->autoScan = $autoScan;

        return $this;
    }

    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     */
    public function getReuseSysCveAllowlist(): ?string
    {
        return $this->reuseSysCveAllowlist;
    }

    /**
     * Whether this project reuse the system level CVE allowlist as the allowlist of its own.  The valid values are "true", "false". If it is set to "true" the actual allowlist associate with this project, if any, will be ignored.
     */
    public function setReuseSysCveAllowlist(?string $reuseSysCveAllowlist): self
    {
        $this->initialized['reuseSysCveAllowlist'] = true;
        $this->reuseSysCveAllowlist = $reuseSysCveAllowlist;

        return $this;
    }

    /**
     * The ID of the tag retention policy for the project.
     */
    public function getRetentionId(): ?string
    {
        return $this->retentionId;
    }

    /**
     * The ID of the tag retention policy for the project.
     */
    public function setRetentionId(?string $retentionId): self
    {
        $this->initialized['retentionId'] = true;
        $this->retentionId = $retentionId;

        return $this;
    }
}
