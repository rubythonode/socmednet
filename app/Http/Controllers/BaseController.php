<?php

namespace Socmednet\Http\Controllers;

use Illuminate\Http\Request;

use Socmednet\Http\Requests;
use Socmednet\Http\Controllers\Controller;
use Auth;
use Session;

class BaseController extends Controller
{
    protected $data = array();
    
    protected function set_initial_data($new_data) {
        $this->data = array('user' => Auth::user());
        $this->add_to_data($new_data);
    }
    
    protected function add_to_data($new_data) {
        $this->data = array_merge($this->data, $new_data);
    }
}
