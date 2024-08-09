<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NameValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $validateData =Validator::make($request->all(), [
            'name' => 'required|string'
        ], [
            'name.required' => 'Field is required',
            'name.string' => 'Filed Must be a string'
        ]);
        if($validateData->fails()) {
            return response()->json(['error', $validateData->errors()], 422);
        }

        return $next($request);
    }
}
