<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Endpoint;

class GetHealth extends \Flownative\Harbor\Api\Runtime\Client\BaseEndpoint implements \Flownative\Harbor\Api\Runtime\Client\Endpoint
{
    use \Flownative\Harbor\Api\Runtime\Client\EndpointTrait;

    /**
     * Check the status of Harbor components. This path does not require authentication.
     *
     * @param array $headerParameters {
     *
     * @var string $X-Request-Id An unique ID for the request
     *             }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/health';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
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
     * @return \Flownative\Harbor\Api\Model\OverallHealthStatus
     *
     * @throws \Flownative\Harbor\Api\Exception\GetHealthInternalServerErrorException
     * @throws \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Flownative\Harbor\Api\Model\OverallHealthStatus', 'json');
        }
        if (500 === $status) {
            throw new \Flownative\Harbor\Api\Exception\GetHealthInternalServerErrorException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        throw new \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['basic'];
    }
}
