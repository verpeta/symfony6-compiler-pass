<?php

declare(strict_types=1);

namespace App\Service\Game;

class EventResultDto
{
    private string $handlerClass;
    private string $response;

    public function __construct(string $handlerClass, string $response)
    {
        $this->setHandlerClass($handlerClass);
        $this->setResponse($response);
    }

    /**
     * @return string
     */
    public function getHandlerClass(): string
    {
        return $this->handlerClass;
    }

    /**
     * @param string $handlerClass
     * @return EventResultDto
     */
    public function setHandlerClass(string $handlerClass): EventResultDto
    {
        $this->handlerClass = $handlerClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return EventResultDto
     */
    public function setResponse(string $response): EventResultDto
    {
        $this->response = $response;
        return $this;
    }

}