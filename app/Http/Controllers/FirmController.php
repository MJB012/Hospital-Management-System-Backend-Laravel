<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirmService;

class FirmController extends Controller
{
    public function __construct(private FirmService $firmService)
    {

    }

    public function trashedFirm()
    {
        $task = $this->firmService->trashedData();
        return $task;
    }

    public function getFirm()
    {
        $task = $this->firmService->getData();
        return $task;
    }

    public function createFirm(Request $request)
    {
        $task = $this->firmService->createData($request);
        return $task;
    }

    public function updateFirm(Request $request)
    {
        $task = $this->firmService->updateData($request);
        return $task;
    }

    public function deleteFirm(Request $request)
    {
        $task = $this->firmService->deleteData($request);
        return $task;
    }

    public function restoreFirm(Request $request)
    {
        $task = $this->firmService->restoreData($request);
        return $task;
    }
}
