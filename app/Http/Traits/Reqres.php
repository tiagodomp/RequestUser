<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait Reqres
{

    private function url(string $params) : string
    {
        return 'https://reqres.in' . Str::endsWith(Str::startsWith($params, '/'), '/');
    }

    public function getAllUsers()
    {

    }
}
