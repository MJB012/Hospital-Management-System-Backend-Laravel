<?php

namespace App\Services;
use App\Models\Category;
use Exception;

/**
 * Class CategoryService.
 */
class CategoryService
{

  public function trashedData()
  {
    $appointmentType = Category::onlyTrashed()->get();
    return response()->json($appointmentType);
  }

  public function getData()
  {
    $appointmentType = Category::all();
    return response()->json($appointmentType);
  }

  public function createData($request)
  {
    $data = [
      'name' => $request->name
    ];
    try {
      Category::create($data);
      return response()->json(['success' => true, 'message' => 'Field Created Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function updateData($request)
  {
    $check = Category::find($request->id);

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name
    ];
    try {
      Category::where('id', $request['id'])->update($data);
      return response()->json(['success' => true, 'message' => 'Field Updated Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

  public function deleteData($request)
  {
    $check = Category::find($request['id']);
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
    $check = Category::withTrashed()->where('id', $request->id)->get();

    if (!$check) {
      return response()->json(['status' => false, 'message' => 'Field Not found']);
    }

    $data = [
      'name' => $request->name
    ];
    try {
      Category::where('id', $request['id'])->restore();
      return response()->json(['success' => true, 'message' => 'Restore Successfully']);
    } catch (Exception $e) {
      return response()->json(['error' => $e->getMessage()], 400);
    }
  }

}
