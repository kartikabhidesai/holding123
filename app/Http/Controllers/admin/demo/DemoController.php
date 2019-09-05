<?php

namespace App\Http\Controllers\admin\demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function __construct() {
        
    }
    public function demo(){
        
        $data['title'] = 'Demo | holding';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array('datatable.js');
        $data['funinit'] = array('Datatable.init()'); 
        return view('admin.pages.demo.demo',$data);
    }
}
