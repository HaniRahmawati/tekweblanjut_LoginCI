<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Hello extends Controller
{
	public function index()
	{
	$data['title'] = 'Helloworld'
	$data['hello'] = 'Helloworld from CodeIgniter 4';
	return view('hello_view',$data);
	}
}