<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * This is to load static templates for the front end guys
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function statics($name)
    {
        if (file_exists(resource_path('views/statics')
                . '/' . $name . '.blade.php')) {
            return view('statics.' . $name);
        }

        abort(404);
    }
}
