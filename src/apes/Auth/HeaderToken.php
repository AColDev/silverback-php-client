<?php

/**
 * Authentication with a token inside the authorization header
 */
class apes_Auth_HeaderToken extends Google_Auth_Abstract
{
    private $client;
    private $key = null;


    public function __construct(Google_Client $client, $config = null)
    {
        $this->client = $client;
    }

    public function authenticatedRequest(Google_Http_Request $request)
    {
        $request = $this->sign($request);
        return $this->io->makeRequest($request);
    }

    public function sign(Google_Http_Request $request)
    {
        $this->key = $this->client->getClassConfig($this, 'key');
        if ($this->key) {
            $request->setRequestHeaders(
                array('Authorization' => $this->key)
            );
        }
        return $request;
    }
}
