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
    class StatisticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\Statistic';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\Statistic';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\Statistic();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('private_project_count', $data)) {
                $object->setPrivateProjectCount($data['private_project_count']);
            }
            if (\array_key_exists('private_repo_count', $data)) {
                $object->setPrivateRepoCount($data['private_repo_count']);
            }
            if (\array_key_exists('public_project_count', $data)) {
                $object->setPublicProjectCount($data['public_project_count']);
            }
            if (\array_key_exists('public_repo_count', $data)) {
                $object->setPublicRepoCount($data['public_repo_count']);
            }
            if (\array_key_exists('total_project_count', $data)) {
                $object->setTotalProjectCount($data['total_project_count']);
            }
            if (\array_key_exists('total_repo_count', $data)) {
                $object->setTotalRepoCount($data['total_repo_count']);
            }
            if (\array_key_exists('total_storage_consumption', $data)) {
                $object->setTotalStorageConsumption($data['total_storage_consumption']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('privateProjectCount') && null !== $object->getPrivateProjectCount()) {
                $data['private_project_count'] = $object->getPrivateProjectCount();
            }
            if ($object->isInitialized('privateRepoCount') && null !== $object->getPrivateRepoCount()) {
                $data['private_repo_count'] = $object->getPrivateRepoCount();
            }
            if ($object->isInitialized('publicProjectCount') && null !== $object->getPublicProjectCount()) {
                $data['public_project_count'] = $object->getPublicProjectCount();
            }
            if ($object->isInitialized('publicRepoCount') && null !== $object->getPublicRepoCount()) {
                $data['public_repo_count'] = $object->getPublicRepoCount();
            }
            if ($object->isInitialized('totalProjectCount') && null !== $object->getTotalProjectCount()) {
                $data['total_project_count'] = $object->getTotalProjectCount();
            }
            if ($object->isInitialized('totalRepoCount') && null !== $object->getTotalRepoCount()) {
                $data['total_repo_count'] = $object->getTotalRepoCount();
            }
            if ($object->isInitialized('totalStorageConsumption') && null !== $object->getTotalStorageConsumption()) {
                $data['total_storage_consumption'] = $object->getTotalStorageConsumption();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\Statistic' => false];
        }
    }
} else {
    class StatisticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\Statistic';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\Statistic';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\Statistic();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('private_project_count', $data)) {
                $object->setPrivateProjectCount($data['private_project_count']);
            }
            if (\array_key_exists('private_repo_count', $data)) {
                $object->setPrivateRepoCount($data['private_repo_count']);
            }
            if (\array_key_exists('public_project_count', $data)) {
                $object->setPublicProjectCount($data['public_project_count']);
            }
            if (\array_key_exists('public_repo_count', $data)) {
                $object->setPublicRepoCount($data['public_repo_count']);
            }
            if (\array_key_exists('total_project_count', $data)) {
                $object->setTotalProjectCount($data['total_project_count']);
            }
            if (\array_key_exists('total_repo_count', $data)) {
                $object->setTotalRepoCount($data['total_repo_count']);
            }
            if (\array_key_exists('total_storage_consumption', $data)) {
                $object->setTotalStorageConsumption($data['total_storage_consumption']);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('privateProjectCount') && null !== $object->getPrivateProjectCount()) {
                $data['private_project_count'] = $object->getPrivateProjectCount();
            }
            if ($object->isInitialized('privateRepoCount') && null !== $object->getPrivateRepoCount()) {
                $data['private_repo_count'] = $object->getPrivateRepoCount();
            }
            if ($object->isInitialized('publicProjectCount') && null !== $object->getPublicProjectCount()) {
                $data['public_project_count'] = $object->getPublicProjectCount();
            }
            if ($object->isInitialized('publicRepoCount') && null !== $object->getPublicRepoCount()) {
                $data['public_repo_count'] = $object->getPublicRepoCount();
            }
            if ($object->isInitialized('totalProjectCount') && null !== $object->getTotalProjectCount()) {
                $data['total_project_count'] = $object->getTotalProjectCount();
            }
            if ($object->isInitialized('totalRepoCount') && null !== $object->getTotalRepoCount()) {
                $data['total_repo_count'] = $object->getTotalRepoCount();
            }
            if ($object->isInitialized('totalStorageConsumption') && null !== $object->getTotalStorageConsumption()) {
                $data['total_storage_consumption'] = $object->getTotalStorageConsumption();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\Statistic' => false];
        }
    }
}
