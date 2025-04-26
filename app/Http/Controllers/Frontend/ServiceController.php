<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Frontend\ServiceFrontendService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public $serviceFrontendService;

    public function __construct(ServiceFrontendService $serviceFrontendService)
    {
        $this->serviceFrontendService = $serviceFrontendService;
    }

    public function index()
    {
        $page = 'services';

        return view('frontend.services.index', compact('page'));
    }

    public function services(Request $request)
    {

        return $this->serviceFrontendService->initActions($request);
    }
}
