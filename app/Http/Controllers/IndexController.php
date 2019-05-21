<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Index\Shuku;

class IndexController extends Controller
{
	/**
	 *
	 * shouye
	 */
	public function __construct(){
		setcookie("pindao","men");
		setcookie("fenlei","all");
		setcookie("zhuangtai","all");
		setcookie("paixu","paixu1");
		setcookie("islogin","0");
	}
	public function index() 
	{
		$data['css']	= '/css/lit-index.css';
		$data['sousuos'] = array('一','二','三','四');
		return view('index/index',['data'=>$data]);
	}

	public function shuku()
	{
		$data['css']	= '/css/lit-stacks.css';
		$data['sousuos'] = array('一','二','三','四');
		$data['moren1'] = $_COOKIE['pindao'] != '' ? $_COOKIE['pindao'] : 'men';
		$data['moren2'] = $_COOKIE['fenlei'] != '' ? $_COOKIE['fenlei'] : 'all';
		$data['moren3'] = $_COOKIE['zhuangtai'] != '' ? $_COOKIE['zhuangtai'] : 'all';
		$data['moren4'] = $_COOKIE['paixu'] != '' ? $_COOKIE['paixu'] : 'paixu1';

		//echo $data['moren1'].$data['moren2'].$data['moren3'].$data['moren4'];
		$shuku = New Shuku;
		$book = $shuku->getbook($data['moren1'],$data['moren2'],$data['moren3'],$data['moren4']);
		$data['book'] = $book;

		$data['pindao'] = array('men'=>'男生','women'=>'女生'); 

		$data['fenlei'] = array('all'=>'全部','xuanhuan'=>'玄幻','dushi'=>'都市','youxi'=>'游戏');
		$data['fenlei-women'] = array('all'=>'全部','yanqing'=>'言情','qingchun'=>'青春','Nciyuan'=>'N次元');


		$data['zhuangtai'] = array('all'=>'全部','isend'=>'完结','noend'=>'连载');


		$data['paixu'] = array('paixu1'=>'按更新','paixu2'=>'按字数','paixu3'=>'按点击');

		
		return view('index/shuku',['data'=>$data]);
	}

	public function rankList()
	{
		$data['css']	= '/css/lit-rank.css';
		$data['sousuos'] = array('一','二','三','四');
		return view('index/rankList',['data'=>$data]);
	}

	public function bookRack()
	{
		$data['css']	= '/css/lit-bookshelf.css';
		$data['sousuos'] = array('一','二','三','四');
		$data['book']	= array(
			'1'=>array(
				'bookId'=>'123',
				'title'=>'书籍标题',
				'js_rIdx'=>'42252',
				'picUrl'=>'//zzn.zhaozening.cn/picture/bk_100178520_r_601.jpg',
				'readingProgress'=>'4',
				'author'=>'赵同志',
				'js_cateId'=>'3131',
				'js_cateName'=>'玄幻',
				'lastChapterId'=>'12311',
				'lastChapterTitle'=>'第三十五章：死别',
				'chapterId'=>'1212',
				'js_idx'=>'12312',
				),
			'2'=>array(
				'bookId'=>'123',
				'title'=>'书籍标题2',
				'js_rIdx'=>'42252',
				'picUrl'=>'//zzn.zhaozening.cn/picture/bk_100177195_r_601_m2.jpg',
				'readingProgress'=>'4',
				'author'=>'赵同志',
				'js_cateId'=>'3131',
				'js_cateName'=>'玄幻',
				'lastChapterId'=>'12311',
				'lastChapterTitle'=>'第三十五章：死别啊',
				'chapterId'=>'1212',
				'js_idx'=>'12312',
				),
		);
		$data['count'] = 2;
		$data['book'] = '';
		$data['islogin'] = $_COOKIE['islogin'] != '' ? $_COOKIE['islogin'] : '0';
		return view('index/bookRack',['data'=>$data]);
	}

	public function app()
	{
		$data['css']	= '/css/lit-rank.css';
		$data['sousuos'] = array('一','二','三','四');
		return view('index/app',['data'=>$data]);

	}

	public function writer()
	{
		return view('index/writer');

	}

	public function yuedu()
	{
		$data['css']	= '/css/lit-reader.css';
		return view('index/yuedu',['data'=>$data]);

	}
}