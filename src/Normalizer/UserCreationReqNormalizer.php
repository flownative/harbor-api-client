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
    class UserCreationReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\UserCreationReq';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\UserCreationReq';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\UserCreationReq();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('realname', $data)) {
                $object->setRealname($data['realname']);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('password', $data)) {
                $object->setPassword($data['password']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('password') && null !== $object->getPassword()) {
                $data['password'] = $object->getPassword();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\UserCreationReq' => false];
        }
    }
} else {
    class UserCreationReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\UserCreationReq';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\UserCreationReq';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\UserCreationReq();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('realname', $data)) {
                $object->setRealname($data['realname']);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('password', $data)) {
                $object->setPassword($data['password']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('password') && null !== $object->getPassword()) {
                $data['password'] = $object->getPassword();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['Flownative\\Harbor\\Api\\Model\\UserCreationReq' => false];
        }
    }
}
