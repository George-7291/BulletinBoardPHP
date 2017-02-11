<?php

/**
 * Created by PhpStorm.
 * User: k15125kk
 * Date: 2017/02/11
 * Time: 23:48
 */
class Response
{
    private $responseId;
    private $userName;
    private $date;
    private $threadId;
    private $body;

    /**
     * Response constructor.
     * @param $responseId
     * @param $userName
     * @param $date
     * @param $threadId
     * @param $body
     */
    public function __construct($responseId, $userName, $date, $threadId, $body)
    {
        $this->responseId = $responseId;
        $this->userName = $userName;
        $this->date = $date;
        $this->threadId = $threadId;
        $this->body = $body;
    }


    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getThreadId()
    {
        return $this->threadId;
    }

    /**
     * @param mixed $threadId
     */
    public function setThreadId($threadId)
    {
        $this->threadId = $threadId;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * @param mixed $responseId
     * @return Response
     */
    public function setResponseId($responseId)
    {
        $this->responseId = $responseId;
        return $this;
    }
}
