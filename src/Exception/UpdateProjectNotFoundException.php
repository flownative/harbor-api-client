<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Flownative\Harbor\Api\Exception;

class UpdateProjectNotFoundException extends NotFoundException
{
    /**
     * @var \Flownative\Harbor\Api\Model\Errors
     */
    private $errors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Flownative\Harbor\Api\Model\Errors $errors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not found');
        $this->errors = $errors;
        $this->response = $response;
    }

    public function getErrors(): \Flownative\Harbor\Api\Model\Errors
    {
        return $this->errors;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
