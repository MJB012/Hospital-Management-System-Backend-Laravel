<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentType;
use App\Services\AppointmentTypeService;

class AppointmentTypeController extends Controller
{

    public function __construct(private AppointmentTypeService $appointmentTypeService)
    {
        
    }

    public function trashedAppointmentType()
    {
        $task = $this->appointmentTypeService->trashedData();
        return $task;
    }
    
    public function getAppointmentType()
    {
        $task = $this->appointmentTypeService->getData();
        return $task;
    }

    public function createAppointmentType(Request $request) {
        $task = $this->appointmentTypeService->createData($request);
        return $task;
    }

    public function updateAppointmentType(Request $request) {
        $task = $this->appointmentTypeService->updateData($request);
        return $task;        
    }

    public function deleteAppointmentType(Request $request) {
        $task = $this->appointmentTypeService->deleteData($request);
        return $task;
    }

    public function restoreAppointmentType(Request $request)
    {
        $task = $this->appointmentTypeService->restoreData($request);
        return $task;
    }
}
