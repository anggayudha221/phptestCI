<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Libraries\Slug;
// use App\Libraries\Google_sheets;


class Welcome extends BaseController
{   
  // public function __construct()
  // {
  //   helper('form');

  // }
  public function index()
  {   
      $sheetdb = new SheetDB('rgxcxhww9qnuy');
      $response = $sheetdb->get();
       // returns all spreadsheets data
      
     
     dd($sheetdb->get());

  }
  public function create(){
    $sheetdb = new SheetDB('rgxcxhww9qnuy');
    $sheetdb->create(
            [
                'Name' => 'test',
                'Email' => 'test',
                'Phone' => 'test'  
            ]
        );
    dd($sheetdb->get());
  }
}
