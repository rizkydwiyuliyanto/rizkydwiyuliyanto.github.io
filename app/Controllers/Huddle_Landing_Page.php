<?php

namespace App\Controllers;

class Huddle_Landing_Page extends BaseController
{
    public function index(): string
    {
        return view("huddle_landing_page");
    }
};
