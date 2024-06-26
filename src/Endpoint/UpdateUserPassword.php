<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Endpoint;

class UpdateUserPassword extends \Flownative\Harbor\Api\Runtime\Client\BaseEndpoint implements \Flownative\Harbor\Api\Runtime\Client\Endpoint
{
    use \Flownative\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $user_id;

    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Regular users can change only their own password.
     *
     * @param \Flownative\Harbor\Api\Model\PasswordReq $password         password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator
     * @param array                                    $headerParameters {
     *
     * @var string $X-Request-Id An unique ID for the request
     *             }
     */
    public function __construct(int $userId, \Flownative\Harbor\Api\Model\PasswordReq $password, array $headerParameters = [])
    {
        $this->user_id = $userId;
        $this->body = $password;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{user_id}'], [$this->user_id], '/users/{user_id}/password');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Request-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Request-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Flownative\Harbor\Api\Exception\UpdateUserPasswordBadRequestException
     * @throws \Flownative\Harbor\Api\Exception\UpdateUserPasswordUnauthorizedException
     * @throws \Flownative\Harbor\Api\Exception\UpdateUserPasswordForbiddenException
     * @throws \Flownative\Harbor\Api\Exception\UpdateUserPasswordInternalServerErrorException
     * @throws \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Flownative\Harbor\Api\Exception\UpdateUserPasswordBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Flownative\Harbor\Api\Exception\UpdateUserPasswordUnauthorizedException($serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Flownative\Harbor\Api\Exception\UpdateUserPasswordForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Flownative\Harbor\Api\Exception\UpdateUserPasswordInternalServerErrorException($serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['basic'];
    }
}