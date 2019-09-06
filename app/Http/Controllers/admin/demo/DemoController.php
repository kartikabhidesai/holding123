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
        $data['plugincss'] = array('css/dataTables.bootstrap4.min.css');
        $data['pluginjs'] = array('js/jquery.dataTables.min.js','js/dataTables.bootstrap4.min.js');
        $data['js'] = array('datatable.js');
        $data['funinit'] = array('Datatable.init()'); 
        $data['header'] = array(
           'title' => 'Inventory',
            'breadcrumb' => array(
                'Home' => route("dashboard"),
                'Inventory' => 'Inventory'));
        return view('admin.pages.demo.demo',$data);
    }
}
