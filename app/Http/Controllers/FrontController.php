<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
public function home()
{
    return view('welcome');
}
public function about()
{
$users=User::all();
    return view('about', [
        'page_name' => 'About Page',
        'name' => 'Laravel 9',
        'users' => $users,
    ]);
}
public function contact()
{
    $page_name= "Contact Page";
$mobile = "01918300000";
    return view('contact', compact('page_name','mobile'));
}
public function services()
{
    $services_1 = [
        'Web Design',
        'Web Development',
        'App Development',
        'Graphics Design',
        ];

        return view('services', compact('services_1'));
}
}
