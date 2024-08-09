<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InsuranceService;

class InsuranceController extends Controller
{
    public function __construct(private InsuranceService $insuranceService)
    {

    }

    public function trashedInsurance()
    {
        $task = $this->insuranceService->trashedData();
        return $task;
    }

    public function getInsurance()
    {
        $task = $this->insuranceService->getData();
        return $task;
    }

    public function createInsurance(Request $request)
    {
        $task = $this->insuranceService->createData($request);
        return $task;
    }

    public function updateInsurance(Request $request)
    {
        $task = $this->insuranceService->updateData($request);
        return $task;
    }

    public function deleteInsurance(Request $request)
    {
        $task = $this->insuranceService->deleteData($request);
        return $task;
    }

    public function restoreInsurance(Request $request)
    {
        $task = $this->insuranceService->restoreData($request);
        return $task;
    }
}
