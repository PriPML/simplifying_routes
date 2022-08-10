<?php

namespace Pripml\SimpleRoute\Core\Requests;

class Request implements RequestInterface
{

    public $request;

    public $raw;

    public function __construct()
    {
        $this->raw = json_decode(file_get_contents("php://input"), true) ?: [];
        $this->request = array_merge($_REQUEST, $this->raw);
    }

    public function input($key = false)
    {
        if ($key) {
            return isset($this->request[$key])
                ? $this->request[$key]
                : false;
        };

        return $this->request;
    }

    public function has($key): bool
    {
        if (!isset($this->request[$key])) {
            return false;
        };

        return true;
    }

    public function file(string $key = '')
    {
    }

    public function hasFile(string $key): bool
    {
        // Not implemented
        return false;
    }

    public function baseUrl(): string
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function path(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function method() : string 
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function accepts() : array 
    {
        return RequestService::explodeAccepts($_SERVER['HTTP_ACCEPT']);
    }
    
    public function ip() :string 
    {
        return $_SERVER['SERVER_ADDR'];
    }
    
        /**
     * server
     * return all server variables that was got over request
     *
     * @return array
     */
    public function server() : array
    {
        return $_SERVER;
    }
}