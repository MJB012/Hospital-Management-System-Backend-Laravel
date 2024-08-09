<?php

namespace App\Services;

use App\Models\AppointmentType;
use Exception;

/**
 * Class AppointmentTypeService.
 */
class AppointmentTypeService
{

	public function trashedData()
	{
		$appointmentType = AppointmentType::onlyTrashed()->get();
		return response()->json($appointmentType);
	}
	public function getData()
	{
		$appointmentType = AppointmentType::all();
		return response()->json($appointmentType);
	}

	public function createData($request)
	{
		$data = [
			'name' => $request->name
		];
		try {
			AppointmentType::create($data);
			return response()->json(['success' => true, 'message' => 'Field Created Successfully']);
		} catch (Exception $e) {
			return response()->json(['error' => $e->getMessage()], 400);
		}
	}

	public function updateData($request)
	{
		$check = AppointmentType::find($request->id);

		if (!$check) {
			return response()->json(['status' => false, 'message' => 'Field Not found']);
		}

		$data = [
			'name' => $request->name
		];
		try {
			AppointmentType::where('id', $request['id'])->update($data);
			return response()->json(['success' => true, 'message' => 'Field Updated Successfully']);
		} catch (Exception $e) {
			return response()->json(['error' => $e->getMessage()], 400);
		}
	}

	public function deleteData($request)
	{
		$check = AppointmentType::find($request['id']);
		if (!$check) {
			return response()->json(['success' => false, 'message' => "Field Not Found"], 404);
		}

		try {
			$check->delete();
			return response()->json(['success' => true, 'message' => "Field Deleted Successfully"], 201);
		} catch (Exception $e) {
			return response()->json(['message' => $e->getMessage()], 400);
		}
	}

	public function restoreData($request)
	{
		$check = AppointmentType::withTrashed()->where('id', $request->id)->get();

		if (!$check) {
			return response()->json(['status' => false, 'message' => 'Field Not found']);
		}
		try {
			AppointmentType::where('id', $request['id'])->restore();
			return response()->json(['success' => true, 'message' => 'Restore Successfully']);
		} catch (Exception $e) {
			return response()->json(['error' => $e->getMessage()], 400);
		}
	}

}
