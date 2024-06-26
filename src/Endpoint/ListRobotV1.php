<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Endpoint;

class ListRobotV1 extends \Flownative\Harbor\Api\Runtime\Client\BaseEndpoint implements \Flownative\Harbor\Api\Runtime\Client\Endpoint
{
    use \Flownative\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $project_name_or_id;

    /**
     * Get all robot accounts of specified project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array  $queryParameters {
     *
     * @var int    $page The page number
     * @var int    $page_size The size of per page
     * @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     * @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $X-Request-Id An unique ID for the request
     * @var bool   $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     *             }
     */
    public function __construct(string $projectNameOrId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{project_name_or_id}'], [$this->project_name_or_id], '/projects/{project_name_or_id}/robots');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'page_size', 'q', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 10]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_size', ['int']);
        $optionsResolver->addAllowedTypes('q', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);

        return $optionsResolver;
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
     * @return \Flownative\Harbor\Api\Model\Robot[]
     *
     * @throws \Flownative\Harbor\Api\Exception\ListRobotV1BadRequestException
     * @throws \Flownative\Harbor\Api\Exception\ListRobotV1NotFoundException
     * @throws \Flownative\Harbor\Api\Exception\ListRobotV1InternalServerErrorException
     * @throws \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Robot[]', 'json');
        }
        if (400 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListRobotV1BadRequestException($serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListRobotV1NotFoundException($serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Flownative\Harbor\Api\Exception\ListRobotV1InternalServerErrorException($serializer->deserialize($body, 'Flownative\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Flownative\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }

    public function getAuthenticationScopes(): array
    {
        return ['basic'];
    }
}
