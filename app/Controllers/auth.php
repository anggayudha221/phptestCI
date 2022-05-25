<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Libraries\Two_FactorAuth;

class Auth extends BaseController {
	

	public function index()
    {	
    	$google_auth			= new \Google\Authenticator\GoogleAuthenticator();
        $message                = $this->check_2fa();
        $user_2fa_secret_code   = 'WBZX7CHOAPPJNZ7R';//$google_auth->generateSecret();

        $data = [
            'page_title'            => 'Google Authenticator',
            'message'               => $message,
            'user_2fa_secret_code'  => $user_2fa_secret_code,
            'user_2fa_qrCode'       => $google_auth->getURL('username', 'example.com', $user_2fa_secret_code),
        ];

        echo view('2fa_method', $data);
    }
    public function check_2fa()
    {	
    	$google_auth			= new \Google\Authenticator\GoogleAuthenticator();
        if ( $this->request->getMethod() === "post" ) {            
            $code = $this->request->getVar('code');
            $secret_code = $this->request->getVar('secret_code');

             if ($google_auth->checkCode($secret_code, $code) ) {
                $data = [
	            'message'            => 'berhasil masuk'
	            
	        ];

             echo view('masuk', $data);
            } else {
                $data = [
	            'message'            => 'gagal masuk'
	            
	        ];

             echo view('masuk', $data);
            }

            	
        }
    }
}