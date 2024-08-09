<?php

namespace App\Http\Controllers;
use App\Services\CaseTypeService;

use Illuminate\Http\Request;

class CaseTypeController extends Controller
{
    public function __construct(private CaseTypeService $caseTypeService) {}

    public function trashedCaseType()
    {
        $task = $this->caseTypeService->trashedData();
        return $task;
    }

    public function getCaseType()
    {
        $task = $this->caseTypeService->getData();
        return $task;
    }

    public function createCaseType(Request $request)
    {
        $task = $this->caseTypeService->createData($request);
        return $task;
    }

    public function updateCaseType(Request $request)
    {
        $task = $this->caseTypeService->updateData($request);
        return $task;
    }

    public function deleteCaseType(Request $request)
    {
        $task = $this->caseTypeService->deleteData($request);
        return $task;
    }

    public function restoreCaseType(Request $request)
    {
        $task = $this->caseTypeService->restoreData($request);
        return $task;
    }
}
