<?php

namespace App\Models\Index;

use Illuminate\Database\Eloquent\Model;

class Shuku extends Model
{
    //
    public function getbook($pindao,$fenlei,$zhuangtai,$paixu) 
    {
    	if ($fenlei!='all' && $zhuangtai!='all') {//都细查
    		$sql = "select * from book where pindao='$pindao',fenlei='$fenlei',zhuangtai='$zhuangtai' order by '$paixu'";
    		$book=array(
	    		'4'=>array(
	    			'id'=>'1',
	    			'name'=>'玄幻',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'玄幻',
	    			'zhuangtai'=>'连载',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		)
    		);
    	} else if ($fenlei=='all' && $zhuangtai!='all') {//不细查分类
    		$sql = "select * from book where pindao='$pindao',zhuangtai='$zhuangtai' order by '$paixu'";
    		$book=array(
	    		'2'=>array(
	    			'id'=>'1',
	    			'name'=>'都市',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'都市',
	    			'zhuangtai'=>'完结',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		)
    		);
    	}else if ($fenlei!='all' && $zhuangtai=='all') {//不细查状态
    		$sql = "select * from book where pindao='$pindao',fenlei='$fenlei' order by '$paixu'";
    		$book=array(
	    		'3'=>array(
	    			'id'=>'1',
	    			'name'=>'游戏',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'游戏',
	    			'zhuangtai'=>'完结',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		)
    		);
    	}else {//不细查状态、分类
    		$sql = "select * from book where pindao='$pindao' order by '$paixu'";
    		$book=array(
    			'1'=>array(
	    			'id'=>'1',
	    			'name'=>'玄幻',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'玄幻',
	    			'zhuangtai'=>'完结',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		),
	    		'2'=>array(
	    			'id'=>'1',
	    			'name'=>'都市',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'都市',
	    			'zhuangtai'=>'完结',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		),
	    		'3'=>array(
	    			'id'=>'1',
	    			'name'=>'游戏',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'游戏',
	    			'zhuangtai'=>'完结',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		),
	    		'4'=>array(
	    			'id'=>'1',
	    			'name'=>'玄幻',
	    			'url'=>'',
	    			'img'=>'picture/bk_100059476_r_601_m6.jpg',
	    			'fenlei'=>'玄幻',
	    			'zhuangtai'=>'连载',
	    			'size'=>'30万字',
	    			'writerName'=>'赵同志',
	    			'detail'=>'盗墓三元素：热血颜值加基情！他们雇佣民间手艺人开棺...',
	    			'newchapter'=>'第23章 最熟悉的陌生人',
	    		)
    		);
    	}


    	return $book;	
    }
}
