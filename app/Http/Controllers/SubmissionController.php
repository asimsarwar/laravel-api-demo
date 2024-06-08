<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Validator;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        ProcessSubmission::dispatch($request->all());

        return response()->json(['message' => 'Submission is being processed'], 202);
    }
}
