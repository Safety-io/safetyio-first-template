<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PullRequestController extends Controller
{
    private String $event = "pull_request";
    public function handle(Request $request): JsonResponse
    {
        $event = $request->header('X-GitHub-Event');
        if ($event === $this->event) {
            Artisan::call('app:pull_request');
        } elseif ($event === 'ping') {
            return response()->json(['message' => 'pong'], 200);
        } else {
            return response()->json(['message' => 'not push'], 200);
        }
        return response()->json(['message' => 'ok'], 201);
    }
}
