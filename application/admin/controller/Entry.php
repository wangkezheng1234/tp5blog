<?php

namespace app\admin\controller;

use think\Controller;

class Entry extends Controller
{
    //
    public function index(){
        return $this->fetch();
    }
}