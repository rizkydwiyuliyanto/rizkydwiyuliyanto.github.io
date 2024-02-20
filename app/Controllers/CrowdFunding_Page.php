<?php

namespace App\Controllers;

class CrowdFunding_Page extends BaseController
{
    public function index(): string
    {
        return view("crowdfunding-page.php");
    }
};
