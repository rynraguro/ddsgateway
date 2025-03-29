<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the User1 Service.
     *
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }


 /**
    * Obtain the full list of Users from Site1
    * @return string
    */
    public function obtainUsers1()
    {
        $response = $this->performRequest('GET', '/users');
        return json_decode($response, true); // decode it to an array
    }
    

    public function createUser1($data)
    {
        return $this->performRequest('POST', '/users', $data);
    }

    public function obtainUser1($id)
    {
    return $this->performRequest('GET', "/users/{$id}");
    }

    public function editUser1($data, $id)
    {
    return $this->performRequest('PUT', "/users/{$id}", $data);
    }

    public function deleteUser1($id)
    {
    return $this->performRequest('DELETE', "/users/{$id}");
    }

}