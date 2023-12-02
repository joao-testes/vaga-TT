<?php

namespace App\Http\Controllers;

use App\Contracts\ApiRandomServiceContract;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexRandomDataController extends Controller
{
    public function __construct(
        private ApiRandomServiceContract $randomDataService
    ) {
    }

    public function __invoke(): View
    {
        try {
            return view('dashboard', [
                'users' => $this->randomDataService->Users()->users,
            ]);
        }catch (\Exception $exception) {
            return view('dashboard', [
                'users' => [],
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
