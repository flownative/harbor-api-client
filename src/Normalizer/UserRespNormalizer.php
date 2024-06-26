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
    class UserRespNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\UserResp';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\UserResp';
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\UserResp();
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
            if (\array_key_exists('user_id', $data)) {
                $object->setUserId($data['user_id']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
            }
            if (\array_key_exists('sysadmin_flag', $data)) {
                $object->setSysadminFlag($data['sysadmin_flag']);
            }
            if (\array_key_exists('admin_role_in_auth', $data)) {
                $object->setAdminRoleInAuth($data['admin_role_in_auth']);
            }
            if (\array_key_exists('oidc_user_meta', $data)) {
                $object->setOidcUserMeta($this->denormalizer->denormalize($data['oidc_user_meta'], 'Flownative\\Harbor\\Api\\Model\\OIDCUserInfo', 'json', $context));
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
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('sysadminFlag') && null !== $object->getSysadminFlag()) {
                $data['sysadmin_flag'] = $object->getSysadminFlag();
            }
            if ($object->isInitialized('adminRoleInAuth') && null !== $object->getAdminRoleInAuth()) {
                $data['admin_role_in_auth'] = $object->getAdminRoleInAuth();
            }
            if ($object->isInitialized('oidcUserMeta') && null !== $object->getOidcUserMeta()) {
                $data['oidc_user_meta'] = $this->normalizer->normalize($object->getOidcUserMeta(), 'json', $context);
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
            return ['Flownative\\Harbor\\Api\\Model\\UserResp' => false];
        }
    }
} else {
    class UserRespNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === 'Flownative\\Harbor\\Api\\Model\\UserResp';
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Flownative\\Harbor\\Api\\Model\\UserResp';
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Flownative\Harbor\Api\Model\UserResp();
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
            if (\array_key_exists('user_id', $data)) {
                $object->setUserId($data['user_id']);
            }
            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
            }
            if (\array_key_exists('sysadmin_flag', $data)) {
                $object->setSysadminFlag($data['sysadmin_flag']);
            }
            if (\array_key_exists('admin_role_in_auth', $data)) {
                $object->setAdminRoleInAuth($data['admin_role_in_auth']);
            }
            if (\array_key_exists('oidc_user_meta', $data)) {
                $object->setOidcUserMeta($this->denormalizer->denormalize($data['oidc_user_meta'], 'Flownative\\Harbor\\Api\\Model\\OIDCUserInfo', 'json', $context));
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
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('realname') && null !== $object->getRealname()) {
                $data['realname'] = $object->getRealname();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('userId') && null !== $object->getUserId()) {
                $data['user_id'] = $object->getUserId();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('sysadminFlag') && null !== $object->getSysadminFlag()) {
                $data['sysadmin_flag'] = $object->getSysadminFlag();
            }
            if ($object->isInitialized('adminRoleInAuth') && null !== $object->getAdminRoleInAuth()) {
                $data['admin_role_in_auth'] = $object->getAdminRoleInAuth();
            }
            if ($object->isInitialized('oidcUserMeta') && null !== $object->getOidcUserMeta()) {
                $data['oidc_user_meta'] = $this->normalizer->normalize($object->getOidcUserMeta(), 'json', $context);
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
            return ['Flownative\\Harbor\\Api\\Model\\UserResp' => false];
        }
    }
}
