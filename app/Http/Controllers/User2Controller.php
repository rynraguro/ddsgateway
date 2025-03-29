<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Services\User2Service;

class User2Controller extends Controller {
    use ApiResponser;

    public $user2Service;

    public function __construct(User2Service $user2Service) {
        $this->user2Service = $user2Service;
    }

    // Get all users
    public function index() {
        return $this->successResponse($this->user2Service->obtainUsers2());
    }

    // Create a new user
    public function add(Request $request) {
        return $this->successResponse(
            $this->user2Service->createUser1($request->all()), 
            Response::HTTP_CREATED
        );
    }

    // Get a specific user
    public function show($id) {
        return $this->successResponse($this->user2Service->obtainUsers2($id));
    }

    // Update a user
    public function update(Request $request, $id) {
        return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
    }

    // Delete a user
    public function delete($id) {
        return $this->successResponse($this->user2Service->deleteUser2($id));
    }
}
