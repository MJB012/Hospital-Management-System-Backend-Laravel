<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AppointmentTimeService;

class AptTimeController extends Controller
{
    public function __construct(private AppointmentTimeService $appointmentTimeService)
    {

    }
    public function trashedAppointmentTime()
    {
        $task = $this->appointmentTimeService->trashedData();
        return $task;
    }

    public function getAppointmentTime()
    {
        $task = $this->appointmentTimeService->getData();
        return $task;
    }

    public function createAppointmentTime(Request $request)
    {
        $task = $this->appointmentTimeService->createData($request);
        return $task;
    }

    public function updateAppointmentTime(Request $request)
    {
        $task = $this->appointmentTimeService->updateData($request);
        return $task;
    }

    public function deleteAppointmentTime(Request $request)
    {
        $task = $this->appointmentTimeService->deleteData($request);
        return $task;
    }

    public function restoreAppointmentTime(Request $request)
    {
        $task = $this->appointmentTimeService->restoreData($request);
        return $task;
    }
}
