<?php

namespace App\Ship\Controller\Abstracts;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as LaravelBaseController;

/**
 * Class ShipController.
 *
 * A.K.A (app/Http/Controllers/Controller.php)
 *
 * You are not allowed to extend from this class directly.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class ShipController extends LaravelBaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}