<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {

    }

    public function trashedCategory()
    {
        $task = $this->categoryService->trashedData();
        return $task;
    }

    public function getCategory()
    {
        $task = $this->categoryService->getData();
        return $task;
    }

    public function createCategory(Request $request)
    {
        $task = $this->categoryService->createData($request);
        return $task;
    }

    public function updateCategory(Request $request)
    {
        $task = $this->categoryService->updateData($request);
        return $task;
    }

    public function deleteCategory(Request $request)
    {
        $task = $this->categoryService->deleteData($request);
        return $task;
    }

    public function restoreCategory(Request $request)
    {
        $task = $this->categoryService->restoreData($request);
        return $task;
    }
}
