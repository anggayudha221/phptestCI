<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Libraries\Slug;
use App\Libraries\CryptoJsAes;

class Home extends BaseController
{   
  public function __construct()
  {
    helper('form');

  }
  public function index()
  {
      $data = [
                'nama'      => '',
                'pass'      => '',
                'result'    => 0
            ];
    return view('form_insert', $data);
  }
   public function encrypt()
  {
    $username   = $this->request->getPost('name');
    $password   = $this->request->getPost('password');
       $data = [
                'nama'      => $username,
                'pass'      => $password,
                'result'    => 1
            ];
    return $this->response->setJSON($data);


     
  }
  public function send(){
    $username   = $this->request->getPost('namea');
    $password   = $this->request->getPost('password');
    $passcode   = "123456";
    $call       = new CryptoJsAes();

    $decryptuser =$call->decrypt($username, $passcode);
    $decryptpass =$call->decrypt($password, $passcode);

    $data = [
                'nama'      => $decryptuser,
                'pass'      => $decryptpass,
                'result'    => 1
            ];
    return view('masuk', $data);
  }
}
