<!DOCTYPE html>
<html>
<head>
<title>原创书法投资收益评估模拟器</title>
<link rel="stylesheet" type="text/css" href="http://www.1314theone.com__STATIC__/libs/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="http://www.1314theone.com__STATIC__/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.1314theone.com__STATIC__/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.1314theone.com__STATIC__/libs/bootstrap/datetimepicker/css/bootstrap-datetimepicker.min.css"></script>
<script type="text/javascript" src="http://www.1314theone.com__STATIC__/libs/bootstrap/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="http://www.1314theone.com__STATIC__/libs/bootstrap/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<style type="text/css">
	.content{width: 970px; margin: 20px auto; position: relative;}
	.bg div{border-bottom: 1px solid #ddd;border-right: 1px solid #ddd; text-align: center; padding:10px 0; height: 40px; overflow: hidden; font-size: 16px}
	.firstCol{height: 150px; display: block;}
	.left-border{border-left: 1px solid #ddd}
	.top-border{border-top: 1px solid #ddd}
	.pgbutton{position: absolute; top: 0; right: 10px;}
	.container{margin-top: 50px;}
</style>
</head>
<body>
<div class="content" id="app">
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-1 control-label">买入价</label>
			<div class="col-sm-2">
				<input type="number" v-model="buyingPrice" name="buyingPrice" id="buyingPrice" class="form-control" placeholder="输入买入价">
			</div>
			<label class="col-sm-1 control-label">买入量</label>
			<div class="col-sm-2">
				<input type="number" v-model="buyingNumber" name="buyingNumber" id="buyingNumber" class="form-control" placeholder="输入买入量">
			</div>
			<label class="col-sm-1 control-label">售出价</label>
			<div class="col-sm-2">
				<input type="number" v-model="sellPrice" name="sellPrice" id="sellPrice" class="form-control" placeholder="输入售出价">
			</div>
		</div>
		<!-- <div class="form-group">
			<label>交易时间</label>
			<input type="text" name="time" id="time" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label>交易类型</label>
			<select name="type" id="type" class="form-control">
				<option value="">买入</option>
				<option value="">卖出</option>
			</select>
		</div> -->
	</form>
	<div class="pgbutton">
		<button v-on:click="sypg" class="btn btn-default">评估收益</button>
	</div>
	<h2>投资回报概览</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>投资金额</th>
				<th>现金收益</th>
				<th>赠送积分</th>
				<th>回报率</th>
				<th>投资周期</th>
				<th>日均收益</th>
				<th>月均收益</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{investment}}</td>
				<td>{{earnings}}</td>
				<td>{{integral}}</td>
				<td>{{roi}}</td>
				<td>{{investmentCycle}}天</td>
				<td>{{averageDailyIncome}}</td>
				<td>{{averageMonthlyIncome}}</td>
			</tr>
		</tbody>
	</table>

	<h2>收益回报明细</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>总收益</th>
				<th>现金收益</th>
				<th>赠送积分</th>
				<th>投资回报率</th>
				<th>预计收益时间</th>
				<th>投资周期</th>
				<th>日均收益</th>
				<th>月均收益</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{earnings+integral}}</td>
				<td>{{earnings}}</td>
				<td>{{integral}}</td>
				<td>{{roi}}</td>
				<td>{{EstimatedEarningsTime}}</td>
				<td>{{investmentCycle}}天</td>
				<td>{{averageDailyIncome}}</td>
				<td>{{averageMonthlyIncome}}</td>
			</tr>
		</tbody>
	</table>

	<h2>投资成本明细</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th colspan="4">本期投资</th>
				<th colspan="4">下期投资</th>
				<th rowspan="2">总投资金额</th>
			</tr>
			<tr>
				<th>买入量</th>
				<th>买入价</th>
				<th>交易手续费</th>
				<th>本期资金额</th>
				<th>买入量</th>
				<th>买入价</th>
				<th>交易手续费</th>
				<th>下期资金额</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{buyingNumber}}</td>
				<td>{{buyingPrice}}</td>
				<td>{{commissionCharges}}</td>
				<td>{{investmentAmount}}</td>
				<td>{{nextBuyingNumber}}</td>
				<td>{{nextBuyingPrice}}</td>
				<td>{{nextCommissionCharges}}</td>
				<td>{{nextInvestmentAmount}}</td>
				<td>{{investment}}</td>
			</tr>
		</tbody>
	</table>
	
	<h2>业务员提成</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>总计</th>
				<th>客户交易量</th>
				<th>单幅提成金额</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{commission}}</td>
				<td>{{buyingNumber}}</td>
				<td>{{commissionOne}}</td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$('#time').datetimepicker({
		language:'zh-CN',
		weekStart:1
	});
	var app = new Vue({
		el:'#app',
		data:{
			investment:'',
			earnings:'',
			integral:'',
			roi:'',
			investmentCycle:'',
			averageDailyIncome:'',
			averageMonthlyIncome:'',

			buyingNumber:'',
			buyingPrice:'',
			commissionCharges:'',
			investmentAmount:'',
			nextBuyingNumber:'',
			nextBuyingPrice:'',
			nextCommissionCharges:'',
			nextInvestmentAmount:'',
			totalInvestmentAmount:'',

			EstimatedEarningsTime:'{$EstimatedEarningsTime}',
			investmentCycle:'{$investmentCycle}',

			commission:'',
			commissionOne:'',
		},
		methods:{
			sypg:function(){
				//投资成本计算
				this.commissionCharges = this.buyingPrice * this.buyingNumber * 0.003
				this.investmentAmount = this.buyingPrice * this.buyingNumber + this.commissionCharges
				this.nextBuyingNumber = this.buyingNumber * 3
				this.nextBuyingPrice = 299
				this.nextCommissionCharges = this.nextBuyingPrice * this.nextBuyingNumber * 0.01
				this.nextInvestmentAmount = this.nextBuyingPrice * this.nextBuyingNumber + this.nextCommissionCharges
				this.investment = this.investmentAmount + this.nextInvestmentAmount

				//收益回报计算
				this.earnings = (this.sellPrice * this.nextBuyingNumber - this.nextBuyingPrice * this.nextBuyingNumber) * 0.7 - this.sellPrice * this.nextBuyingNumber * 0.003 - this.investmentAmount
				this.integral = (this.sellPrice * this.nextBuyingNumber - this.nextBuyingPrice * this.nextBuyingNumber) * 0.3	
				this.roi = ((this.earnings / this.investment) * 100).toFixed(2) + '%'
				this.averageDailyIncome = this.earnings/this.investmentCycle
				this.averageMonthlyIncome = this.averageDailyIncome*31

				//业务员佣金
				this.commission = this.integral * 0.08
				this.commissionOne = this.commission / this.buyingNumber
			}
		}
	})
</script>
</body>
</html>