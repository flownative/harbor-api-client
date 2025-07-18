<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Endpoint;

class ListProjectMetadatas extends \Flownative\Harbor\Api\Runtime\Client\BaseEndpoint implements \Flownative\Harbor\Api\Runtime\Client\Endpoint
{
    use \Flownative\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $project_name_or_id;

    /**
     * Get the metadata of the specific project.
     *
     * @param string $projectNameOrId  The name or id of the project
     * @param array  $headerParameters {
     *
     * @var string $X-Request-Id An unique ID for the request
     * @var bool   $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     *             }
     */
    public function __construct(string $projectNameOrId, array $headerParameters = [])
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{project_name_or_id}'], [$this->project_name_or_id], '/projects/{project_name_or_id}/metadatas/');
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
        $optionsResolver->setDefined(['X-Request-Id', 'X-Is-Resource-Name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['X-Is-Resource-Name' => false]);
        $optionsResolver->addAllowedTypes('X-Request-Id', ['string']);
        $optionsResolver->addAllowedTypes('X-Is-Resource-Name', ['bool']);

        return $optionsResolver;
    }

    /**
     * @return null
     *
     * @throws \Flownative\Harbor\Api\Exception\ListProjectMetadatasBadRequestException
     * @throws \Flownative\Harbor\Api\Exception\ListProjectMetadatasUnauthorizedException
     * @throws \Flownative\Harbor\Api\Exception\ListProjectMetadatasForbiddenException
     * @throws \Flownative\Harbor\Api\Exception\ListProjectMetadatasNotFoundException
     * @throws \Flownative\Harbor\Api\Exception\ListProjectMetadatasInternalServerErrorException
     * @throws \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListProjectMetadatasBadRequestException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListProjectMetadatasUnauthorizedException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListProjectMetadatasForbiddenException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListProjectMetadatasNotFoundException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListProjectMetadatasInternalServerErrorException($serializer->deserialize($body, 'Flownative\Harbor\Api\Model\Errors', 'json'), $response);
        }
        throw new \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['basic'];
    }
}
