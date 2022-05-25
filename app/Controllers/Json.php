<?php

namespace App\Controllers;

class Json extends BaseController
{
    public function index()
    {   
        
        
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
       
        
        $this->create();

        
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "Accept-language: en\r\n" .
                    "Cookie: foo=bar\r\n" .
                    "app-id:628c468d9e29dfc7c7043ed9"  
            ]
        ];
        // $decode = json_decode($data, TRUE);
        // $encode = json_encode($data);
        $context = stream_context_create($opts);
        $file = file_get_contents('https://dummyapi.io/data/v1/user?limit=100', false, $context);
        $decode = json_decode($file, TRUE);
        
        echo $file;
        foreach ($decode['data'] as $key => $value) {
         
        }
        
    }
    public function jsonapi(){
        // $test   =   file_get_contents('https://sheetdb.io/api/v1/rgxcxhww9qnuy/');
        // $test2  =   file_get_contents('https://sheetsu.com/apis/v1.0su/2971c1d86ad4');
        // $take   =   json_decode( file_get_contents('https://sheetsu.com/apis/v1.0su/2971c1d86ad4'));
        // $decode = json_decode($test);
         
        //     echo $test;
        //     foreach ($decode as $key => $value) {
        //         echo "Nama: {$value->Name} <br>";
        //         echo "email: {$value->Email} <br>";
        //     }
           
            // echo view('json',$array);
        // $url = "http://jsonplaceholder.typicode.com/posts";
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url, TRUE);
        // $array = [
        // 'title'=> 'test wp dengan json',
        // 'data' => $data
        // ];


        //   $url = "https://dummyapi.io/data/v1";
        // $get_url = file_get_contents("https://dummyapi.io/data/v1/user?limit=10");

        // $decode = json_decode($get_url);
        // header('Content-Type: application/json;app-id:62847b5f1285a13431fab67f', TRUE);
    }
    function delete($id){

        $opts_delete = [
            "http" => [
                "method" => "DELETE",
                "header" => "Accept-language: en\r\n" .
                    "Cookie: foo=bar\r\n" .
                    "app-id:628c468d9e29dfc7c7043ed9" ,
            ]
        ];
        $con_del = stream_context_create($opts_delete);
        $delete = file_get_contents('https://dummyapi.io/data/v1/user/'.$id, false, $con_del);

        return index();
    }
    function create(){

        $postData = array(
            'firstName' => 'namasayaaaa',
            'lastName' => 'sayanaaama',
            'email' => 'emaieeeeel@email.com'
        );
        $opts_create = [
            "http" => [
                "method" => "POST",
                "header" => "Accept-language: en\r\n" .
                    "Cookie: foo=bar\r\n" .
                    "Content-Type: application/x-www-form-urlencoded".
                    "app-id:628c468d9e29dfc7c7043ed9" ,
                
            ]
        ];
        $con = stream_context_create($opts_create);

        try{
            file_get_contents('https://dummyapi.io/data/v1/user/create', false, $con);
        }
        catch (excepton $e){
            $e->getMessage();
            echo $e;
        }
    }
}
?>

