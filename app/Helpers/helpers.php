<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



if (!function_exists('active_link')) {

    function active_link(string $name, string $class = 'active'): string
    {
        return  Route::is("$name*") ? $class : '';
    }
}

if (!function_exists('hasRole')) {

    function hasRole(string $role): bool
    {
        if (Auth::guard('admin')->user()) {

            return Auth::guard('admin')->user()->role === $role;
        }

        return false;
    }
}
if (!function_exists('clearTags')) {

    function clearTags(array $data): array
    {
        foreach ($data as $key => $value) {
            $data[$key] = strip_tags($value);
        }

        return $data;
    }
}

if (!function_exists('alert')) {

    function alert(string $value, string $type = 'success')
    {
        session(['alert' => $value, 'alert_type' => $type]);
    }
}

if (!function_exists('codeGenerator')) {

    function codeGenerator()
    {
        // $chars = "ABCDEFGHIJKMNOPQRSTUVWXYZ";
        $chars = "ABCDEFGHIJKMNPQRSTUVWXYZ";
        // $numbers = '1234567890';
        $numbers = '123456789';
        $code = '';
        for ($i = 0; $i < 3; $i++) {
            if ($i > 0) {
                $code .= '-';
            }
            for ($y = 0; $y < 4; $y++) {

                $str = rand(0, 1) == 1 ? $chars[rand(0, strlen($chars) - 1)] : $numbers[rand(0, strlen($numbers) - 1)];
                $code .= $str;
            }
        }
        return $code;
    }
}
if (!function_exists('promocodeGenerator')) {

    function promocodeGenerator()
    {
        $chars = "ABCDEFGHIJKMNPQRSTUVWXYZ";
        $numbers = '123456789';
        $code = '';
        for ($i = 0; $i < 3; $i++) {
            if ($i > 0) {
                $code .= '-';
            }
            for ($y = 0; $y < 3; $y++) {

                $str = rand(0, 1) == 1 ? $chars[rand(0, strlen($chars) - 1)] : $numbers[rand(0, strlen($numbers) - 1)];
                $code .= $str;
            }
        }
        return $code;
    }
}