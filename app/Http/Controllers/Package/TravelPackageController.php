<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package\TravelPackage;

/**
 * @OA\Info(
 *    title="APIs For Tour and Travel Server by AslanAsilon",
 *    version="1.0.0",
 *    description = "API documentation for the My Tour and Travel Package App such as Aurofil, Plonia, and Travelix"
 * ),
 * 
 *  * @OA\Get(
 *      path="/api/travel-package",
 *      operationId="getTravelPackageList",
 *      tags={"TravelPackages"},
 *      summary="Get list of travel packages",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent()
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthorized",
 *      ),
 * )
**/

class TravelPackageController extends Controller
{
    public function index()
    {
        $travelpackages = TravelPackage::all();
        return $travelpackages;
    }
}
