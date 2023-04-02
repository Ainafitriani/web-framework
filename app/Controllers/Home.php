<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'dasboard',
            'title' => 'Dasboard| Web NonReg'
        ];
        return view('dasboard', $data);
    }

    public function employee_data()
    {
        $data = [
            'page' => 'employee_data',
            'title' => 'Employee Data | Web NonReg'
        ];
        return view('employee_data', $data);
    }
}
