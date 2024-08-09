<?php

namespace App\Services;
use App\Models\UserRole;
use Exception;

/**
 * Class UserRoleService.
 */
class UserRoleService
{

  public function trashedData()
  {
    $appointmentType = UserRole::onlyTrashed()->get();
    return response()->json($appointmentType);
  }

  public function getData()
  {
    $appointmentType = UserRole::where('id', '!=', 1)->get();
    return response()->json($appointmentType);
  }

  public function createData($request)
  {
    $data = [
      'name' => $request->name
    ];
    try {
      UserRole::create($data);
      return response()->json(['success' => true, 'message' => 'Field Created Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function updateData($request)
  {
    $check = UserRole::find($request->id);

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name
    ];
    try {
      UserRole::where('id', $request['id'])->update($data);
      return response()->json(['success' => true, 'message' => 'Field Updated Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function deleteData($request)
  {
    $check = UserRole::find($request['id']);
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
    $check = UserRole::withTrashed()->where('id', $request->id)->get();

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name
    ];
    try {
      UserRole::where('id', $request['id'])->restore();
      return response()->json(['success' => true, 'message' => 'Restore Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }
}
