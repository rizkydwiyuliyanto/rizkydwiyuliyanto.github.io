<?php

namespace App\Controllers;

class Rock_Paper_Scissor_Game extends BaseController{
    public function index(): string{
        return view("rock-paper-scissor-game.php");
    }
}