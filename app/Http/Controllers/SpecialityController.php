<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SpecialityService;

class SpecialityController extends Controller
{
    public function __construct(private SpecialityService $specialityService)
    {

    }

    public function trashedSpeciality()
    {
        $task = $this->specialityService->trashedData();
        return $task;
    }

    public function getSpeciality()
    {
        $task = $this->specialityService->getData();
        return $task;
    }

    public function createSpeciality(Request $request)
    {
        $task = $this->specialityService->createData($request);
        return $task;
    }

    public function updateSpeciality(Request $request)
    {
        $task = $this->specialityService->updateData($request);
        return $task;
    }

    public function deleteSpeciality(Request $request)
    {
        $task = $this->specialityService->deleteData($request);
        return $task;
    }

    public function restoreSpeciality(Request $request)
    {
        $task = $this->specialityService->restoreData($request);
        return $task;
    }
}
