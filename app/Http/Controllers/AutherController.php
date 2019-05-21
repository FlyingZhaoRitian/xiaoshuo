<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Index\Shuku;

class AutherController extends Controller
{
	public function index() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'index';
		$model = 'zhuye';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function publish() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'publish';
		$model = 'fabu';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function writings() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'zuopinguanli';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function Literaturedata() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'Literaturedata';
		$model = 'wenxueshuju';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function uidset() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'uidset';
		$model = 'zhanghaoshezhi';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function Myfans() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'Myfans';
		$model = 'wodefensi';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function interactions() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'interactions';
		$model = 'pinglunguanli';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function accounts() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'accounts';
		$model = 'jiesuanzhongxin';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function addbook() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'xinjianzuopin';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function addchapter() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'xiexinzhangjie';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function chapterlist() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'zhangjieguanli';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function updatechapter() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'xiugaizuopin';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}

	public function previewbook() 
	{
		$data['conter'] = '123123';
		$data['id'] = 'writings';
		$model = 'zaixianyulan';
		return view('auther/autherAdmin',['data'=>$data,'model'=>$model]);
	}
}