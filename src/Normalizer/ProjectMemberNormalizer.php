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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Flownative\Harbor\Api\Model\ProjectMember::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Flownative\Harbor\Api\Model\ProjectMember::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Flownative\Harbor\Api\Model\ProjectMember();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('role_id', $data) && $data['role_id'] !== null) {
            $object->setRoleId($data['role_id']);
        } elseif (\array_key_exists('role_id', $data) && $data['role_id'] === null) {
            $object->setRoleId(null);
        }
        if (\array_key_exists('member_user', $data) && $data['member_user'] !== null) {
            $object->setMemberUser($this->denormalizer->denormalize($data['member_user'], \Flownative\Harbor\Api\Model\UserEntity::class, 'json', $context));
        } elseif (\array_key_exists('member_user', $data) && $data['member_user'] === null) {
            $object->setMemberUser(null);
        }
        if (\array_key_exists('member_group', $data) && $data['member_group'] !== null) {
            $object->setMemberGroup($this->denormalizer->denormalize($data['member_group'], \Flownative\Harbor\Api\Model\UserGroup::class, 'json', $context));
        } elseif (\array_key_exists('member_group', $data) && $data['member_group'] === null) {
            $object->setMemberGroup(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('roleId') && null !== $data->getRoleId()) {
            $dataArray['role_id'] = $data->getRoleId();
        }
        if ($data->isInitialized('memberUser') && null !== $data->getMemberUser()) {
            $dataArray['member_user'] = $this->normalizer->normalize($data->getMemberUser(), 'json', $context);
        }
        if ($data->isInitialized('memberGroup') && null !== $data->getMemberGroup()) {
            $dataArray['member_group'] = $this->normalizer->normalize($data->getMemberGroup(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Flownative\Harbor\Api\Model\ProjectMember::class => false];
    }
}
