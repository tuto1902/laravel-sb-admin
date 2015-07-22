<?php

namespace App\Http\Controllers;


class PagesController extends Controller{

    public function getIndex(){
        return view('pages.index');
    }

    public function getFlot(){
        return view('pages.flot');
    }

    public function getMorris(){
        return view('pages.morris');
    }

    public function getTables(){
        return view('pages.tables');
    }

    public function getForms(){
        return view('pages.forms');
    }

    public function getPanelsWells(){
        return view('pages.panels-wells');
    }

    public function getButtons(){
        return view('pages.buttons');
    }

    public function getNotifications(){
        return view('pages.notifications');
    }

    public function getTypography(){
        return view('pages.typography');
    }

    public function getIcons(){
        return view('pages.icons');
    }

    public function getGrid(){
        return view('pages.grid');
    }

    public function getBlank(){
        return view('pages.blank');
    }

} 