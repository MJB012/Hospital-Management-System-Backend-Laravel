<?php

namespace App\Services;
use App\Models\Insurance;
use Exception;

/**
 * Class InsuranceService.
 */
class InsuranceService
{

  public function trashedData()
  {
    $appointmentType = Insurance::onlyTrashed()->get();
    return response()->json($appointmentType);
  }
  public function getData()
  {
    $appointmentType = Insurance::all();
    return response()->json($appointmentType);
  }

  public function createData($request)
  {
    $data = [
      'name' => $request->name,
      'city' => $request->city,
      'state' => $request->state,
      'zip_code' => $request->zip_code
    ];
    try {
      Insurance::create($data);
      return response()->json(['success' => true, 'message' => 'Field Created Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function updateData($request)
  {
    $check = Insurance::find($request->id);

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name,
      'city' => $request->city,
      'state' => $request->state,
      'zip_code' => $request->zip_code
    ];
    try {
      Insurance::where('id', $request['id'])->update($data);
      return response()->json(['success' => true, 'message' => 'Field Updated Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function deleteData($request)
  {
    $check = Insurance::find($request['id']);
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
    $check = Insurance::withTrashed()->where('id', $request->id)->get();

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name,
      'city' => $request->city,
      'state' => $request->state,
      'zip_code' => $request->zip_code
    ];
    try {
      Insurance::where('id', $request['id'])->restore();
      return response()->json(['success' => true, 'message' => 'Restore Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }
}
