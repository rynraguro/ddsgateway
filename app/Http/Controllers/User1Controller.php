<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Services\User1Service;

class User1Controller extends Controller {
    use ApiResponser;

    public $user1Service;

    public function __construct(User1Service $user1Service) {
        $this->user1Service = $user1Service;
    }

    // Get all users
    public function index() {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }

    // Create a new user
    public function add(Request $request) {
        return $this->successResponse(
            $this->user1Service->createUser1($request->all()), 
            Response::HTTP_CREATED
        );
    }

    // Get a specific user
    public function show($id) {
        return $this->successResponse($this->user1Service->obtainUser1($id));
    }

    // Update a user
    public function update(Request $request, $id) {
        return $this->successResponse($this->user1Service->editUser1($request->all(), $id));
    }

    // Delete a user
    public function delete($id) {
        return $this->successResponse($this->user1Service->deleteUser1($id));
    }
}
