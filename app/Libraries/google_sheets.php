<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Google_sheets
{
    public function __construct()
    {
        require_once APPPATH.'third_party/vendorsheets/autoload.php';
        use SheetDB\SheetDB;
    }
}