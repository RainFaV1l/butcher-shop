<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('index.home');
    }
    public function profile() {
        return view('index.profile');
    }
    public function login() {
        return view('index.login');
    }
    public function reg() {
        return view('index.reg');
    }
    public function cart() {
        return view('index.cart');
    }
    public function admin() {
        return view('index.admin');
    }
    public function admin_tovars() {
        return view('index.admin_tovars');
    }
    public function add() {
        return view('index.add');
    }
    public function edit() {
        return view('index.edit');
    }
}
