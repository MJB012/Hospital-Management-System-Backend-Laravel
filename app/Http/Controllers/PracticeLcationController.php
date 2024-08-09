<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PracticeLcationService;

class PracticeLcationController extends Controller
{
    public function __construct(private PracticeLcationService $practiceLcationService)
    {

    }

    public function trashedPracticeLocation()
    {
        $task = $this->practiceLcationService->trashedData();
        return $task;
    }

    public function getPracticeLocation()
    {
        $task = $this->practiceLcationService->getData();
        return $task;
    }

    public function createPracticeLocation(Request $request)
    {
        $task = $this->practiceLcationService->createData($request);
        return $task;
    }

    public function updatePracticeLocation(Request $request)
    {
        $task = $this->practiceLcationService->updateData($request);
        return $task;
    }

    public function deletePracticeLocation(Request $request)
    {
        $task = $this->practiceLcationService->deleteData($request);
        return $task;
    }

    public function restorePracticeLocation(Request $request)
    {
        $task = $this->practiceLcationService->restoreData($request);
        return $task;
    }
}
