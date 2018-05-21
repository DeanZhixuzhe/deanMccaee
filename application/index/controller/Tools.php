<?php
namespace app\index\controller;

/**
* 
*/
class Tools extends Base
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function incomeassessment($title){
		if (strlen($title) < 6) {
			return $this->error('商品名称错误');
		}else{
			$datetime = substr($title,-6);
		}
		if (is_numeric($datetime)) {
			$year = '20'.substr($datetime,0,2);
			$month = substr($datetime,2,2);
			$day = substr($datetime,-2);
			$EstimatedEarningsTime = date('Y-m-d',strtotime($year.$month.$day)+3600*24*64);
			$investmentCycle = ceil((strtotime($EstimatedEarningsTime)-time())/86400);
			
			$this->assign('EstimatedEarningsTime',$EstimatedEarningsTime);
			$this->assign('investmentCycle',$investmentCycle);
		}else{
			return $this->error('商品名称错误');
		}
		return $this->fetch();
	}
}