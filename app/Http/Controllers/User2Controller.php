<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class UserController extends Controller
{
    use ApiResponser;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    // Clear out the code for the API Gateway logic.
    public function getUsers()
    {
        // TODO: Implement API Gateway logic to fetch users from Site1.
    }

    public function index()
    {
        // TODO: Implement API Gateway logic to fetch all users.
    }

    public function addUser(Request $request)
    {
        // TODO: Implement API Gateway logic to add a new user.
    }

    public function show($id)
    {
        // TODO: Implement API Gateway logic to display a single user by ID.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement API Gateway logic to update user information.
    }

    public function delete($id)
    {
        // TODO: Implement API Gateway logic to delete a user.
    }
}
