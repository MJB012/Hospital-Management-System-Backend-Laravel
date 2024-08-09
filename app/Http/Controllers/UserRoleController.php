<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserRoleService;

class UserRoleController extends Controller
{
    public function __construct(private UserRoleService $userRoleService)
    {

    }

    public function trashedUserRole()
    {
        $task = $this->userRoleService->trashedData();
        return $task;
    }

    public function getUserRole()
    {
        $task = $this->userRoleService->getData();
        return $task;
    }

    public function createUserRole(Request $request)
    {
        $task = $this->userRoleService->createData($request);
        return $task;
    }

    public function updateUserRole(Request $request)
    {
        $task = $this->userRoleService->updateData($request);
        return $task;
    }

    public function deleteUserRole(Request $request)
    {
        $task = $this->userRoleService->deleteData($request);
        return $task;
    }

    public function restoreUserRole(Request $request)
    {
        $task = $this->userRoleService->restoreData($request);
        return $task;
    }
}
