<?php

/**
 * Created by PhpStorm.
 * User: k15125kk
 * Date: 2017/02/11
 * Time: 23:59
 */
class ThreadClass
{
    private $threadTitle;
    private $responses = array();

    /**
     * Thread constructor.
     * @param $threadTitle
     */
    private function __construct($threadTitle)
    {
        $this->threadTitle = $threadTitle;
        $this->responses = Database::getResponsesArray($threadTitle);
    }

    static public function makeThread($title){
        $thread = new ThreadClass($title);
        return $thread;

    }

    /**
     * @return mixed
     */
    public function getThreadTitle()
    {
        return $this->threadTitle;
    }

    /**
     * @return mixed
     */
    public function getResponses()
    {
        return $this->responses;
    }

    public function addResponse($response){
        $this->responses[] = $response;
    }
}
