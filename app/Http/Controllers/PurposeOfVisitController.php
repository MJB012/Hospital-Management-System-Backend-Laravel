<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PurposeOfVisitService;

class PurposeOfVisitController extends Controller
{
    public function __construct(private PurposeOfVisitService $purposeOfVisitService)
    {

    }

    public function trashedPurposeOfVisit()
    {
        $task = $this->purposeOfVisitService->trashedData();
        return $task;
    }

    public function getPurposeOfVisit()
    {
        $task = $this->purposeOfVisitService->getData();
        return $task;
    }

    public function createPurposeOfVisit(Request $request)
    {
        $task = $this->purposeOfVisitService->createData($request);
        return $task;
    }

    public function updatePurposeOfVisit(Request $request)
    {
        $task = $this->purposeOfVisitService->updateData($request);
        return $task;
    }

    public function deletePurposeOfVisit(Request $request)
    {
        $task = $this->purposeOfVisitService->deleteData($request);
        return $task;
    }

    public function restorePurposeOfVisit(Request $request)
    {
        $task = $this->purposeOfVisitService->restoreData($request);
        return $task;
    }

}
