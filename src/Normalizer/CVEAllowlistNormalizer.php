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
    class CVEAllowlistNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\CVEAllowlist();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
            }
            if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
                $object->setExpiresAt($data['expires_at']);
            } elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
                $object->setExpiresAt(null);
            }
            if (\array_key_exists('items', $data)) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Flownative\\Harbor\\Api\\Model\\CVEAllowlistItem', 'json', $context);
                }
                $object->setItems($values);
            }
            if (\array_key_exists('creation_time', $data)) {
                $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['creation_time']));
            }
            if (\array_key_exists('update_time', $data)) {
                $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['update_time']));
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['items'] = $values;
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\CVEAllowlist' => false];
        }
    }
} else {
    class CVEAllowlistNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\CVEAllowlist';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\CVEAllowlist();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
            }
            if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
                $object->setExpiresAt($data['expires_at']);
            } elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
                $object->setExpiresAt(null);
            }
            if (\array_key_exists('items', $data)) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Flownative\\Harbor\\Api\\Model\\CVEAllowlistItem', 'json', $context);
                }
                $object->setItems($values);
            }
            if (\array_key_exists('creation_time', $data)) {
                $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['creation_time']));
            }
            if (\array_key_exists('update_time', $data)) {
                $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vp', $data['update_time']));
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('expiresAt') && null !== $object->getExpiresAt()) {
                $data['expires_at'] = $object->getExpiresAt();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['items'] = $values;
            }
            if ($object->isInitialized('creationTime') && null !== $object->getCreationTime()) {
                $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:s.vp');
            }
            if ($object->isInitialized('updateTime') && null !== $object->getUpdateTime()) {
                $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:s.vp');
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\CVEAllowlist' => false];
        }
    }
}
