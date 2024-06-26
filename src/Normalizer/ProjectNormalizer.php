<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Normalizer;

use Flownative\Harbor\Api\Runtime\Normalizer\CheckArray;
use Flownative\Harbor\Api\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\Project';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\Project';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('registry_id', $data)) {
                $object->setRegistryId($data['registry_id']);
            }
            if (\array_key_exists('creation_time', $data)) {
                $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['creation_time']));
            }
            if (\array_key_exists('update_time', $data)) {
                $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['update_time']));
            }
            if (\array_key_exists('deleted', $data)) {
                $object->setDeleted($data['deleted']);
            }
            if (\array_key_exists('owner_name', $data)) {
                $object->setOwnerName($data['owner_name']);
            }
            if (\array_key_exists('togglable', $data)) {
                $object->setTogglable($data['togglable']);
            }
            if (\array_key_exists('current_user_role_id', $data)) {
                $object->setCurrentUserRoleId($data['current_user_role_id']);
            }
            if (\array_key_exists('current_user_role_ids', $data)) {
                $values = [];
                foreach ($data['current_user_role_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setCurrentUserRoleIds($values);
            }
            if (\array_key_exists('repo_count', $data)) {
                $object->setRepoCount($data['repo_count']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Flownative\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
            }
            if (\array_key_exists('cve_allowlist', $data)) {
                $object->setCveAllowlist($this->denormalizer->denormalize($data['cve_allowlist'], 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist', 'json', $context));
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('ownerId') && null !== $object->getOwnerId()) {
                $data['owner_id'] = $object->getOwnerId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('registryId') && null !== $object->getRegistryId()) {
                $data['registry_id'] = $object->getRegistryId();
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['deleted'] = $object->getDeleted();
            }
            if ($object->isInitialized('ownerName') && null !== $object->getOwnerName()) {
                $data['owner_name'] = $object->getOwnerName();
            }
            if ($object->isInitialized('togglable') && null !== $object->getTogglable()) {
                $data['togglable'] = $object->getTogglable();
            }
            if ($object->isInitialized('currentUserRoleId') && null !== $object->getCurrentUserRoleId()) {
                $data['current_user_role_id'] = $object->getCurrentUserRoleId();
            }
            if ($object->isInitialized('currentUserRoleIds') && null !== $object->getCurrentUserRoleIds()) {
                $values = [];
                foreach ($object->getCurrentUserRoleIds() as $value) {
                    $values[] = $value;
                }
                $data['current_user_role_ids'] = $values;
            }
            if ($object->isInitialized('repoCount') && null !== $object->getRepoCount()) {
                $data['repo_count'] = $object->getRepoCount();
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            if ($object->isInitialized('cveAllowlist') && null !== $object->getCveAllowlist()) {
                $data['cve_allowlist'] = $this->normalizer->normalize($object->getCveAllowlist(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\Project' => false];
        }
    }
} else {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\Project';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\Project';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
            }
            if (\array_key_exists('owner_id', $data)) {
                $object->setOwnerId($data['owner_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('registry_id', $data)) {
                $object->setRegistryId($data['registry_id']);
            }
            if (\array_key_exists('creation_time', $data)) {
                $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['creation_time']));
            }
            if (\array_key_exists('update_time', $data)) {
                $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['update_time']));
            }
            if (\array_key_exists('deleted', $data)) {
                $object->setDeleted($data['deleted']);
            }
            if (\array_key_exists('owner_name', $data)) {
                $object->setOwnerName($data['owner_name']);
            }
            if (\array_key_exists('togglable', $data)) {
                $object->setTogglable($data['togglable']);
            }
            if (\array_key_exists('current_user_role_id', $data)) {
                $object->setCurrentUserRoleId($data['current_user_role_id']);
            }
            if (\array_key_exists('current_user_role_ids', $data)) {
                $values = [];
                foreach ($data['current_user_role_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setCurrentUserRoleIds($values);
            }
            if (\array_key_exists('repo_count', $data)) {
                $object->setRepoCount($data['repo_count']);
            }
            if (\array_key_exists('metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Flownative\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
            }
            if (\array_key_exists('cve_allowlist', $data)) {
                $object->setCveAllowlist($this->denormalizer->denormalize($data['cve_allowlist'], 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist', 'json', $context));
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('ownerId') && null !== $object->getOwnerId()) {
                $data['owner_id'] = $object->getOwnerId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('registryId') && null !== $object->getRegistryId()) {
                $data['registry_id'] = $object->getRegistryId();
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['deleted'] = $object->getDeleted();
            }
            if ($object->isInitialized('ownerName') && null !== $object->getOwnerName()) {
                $data['owner_name'] = $object->getOwnerName();
            }
            if ($object->isInitialized('togglable') && null !== $object->getTogglable()) {
                $data['togglable'] = $object->getTogglable();
            }
            if ($object->isInitialized('currentUserRoleId') && null !== $object->getCurrentUserRoleId()) {
                $data['current_user_role_id'] = $object->getCurrentUserRoleId();
            }
            if ($object->isInitialized('currentUserRoleIds') && null !== $object->getCurrentUserRoleIds()) {
                $values = [];
                foreach ($object->getCurrentUserRoleIds() as $value) {
                    $values[] = $value;
                }
                $data['current_user_role_ids'] = $values;
            }
            if ($object->isInitialized('repoCount') && null !== $object->getRepoCount()) {
                $data['repo_count'] = $object->getRepoCount();
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            if ($object->isInitialized('cveAllowlist') && null !== $object->getCveAllowlist()) {
                $data['cve_allowlist'] = $this->normalizer->normalize($object->getCveAllowlist(), 'json', $context);
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\Project' => false];
        }
    }
}
