<?php
namespace App\Util;

use Illuminate\Support\Facades\Request;

class ImageRoute
{
    static public function imageStorageRoute(){

        //获取当前的url
        $realpath = Request::path();

        $path = storage_path() . '/'. $realpath;

        $path = str_replace('\\','/',$path);

        if(!file_exists($path)){
            //报404错误
            header("HTTP/1.1 404 Not Found");
            header("Status: 404 Not Found");
            exit;
        }
        //输出图片
        header('Content-type: image/jpg');
        echo file_get_contents($path);
        exit;
    }
}