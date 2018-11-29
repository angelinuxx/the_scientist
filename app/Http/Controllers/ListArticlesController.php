<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ListArticlesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        return response()->json();
    }
}
