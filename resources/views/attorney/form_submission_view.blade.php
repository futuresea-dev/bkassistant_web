@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<div class="card">
	<div class="card-header">
		<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0"> Basic Information</h3>
		<a onclick="window.print();"
			class="back-btn btn btn-theme-black float-right ml-2 print-hide">
			Print</a> &nbsp;
		<a href="{{ route('attorney_dashboard')}}"
			class="back-btn btn btn-theme-black float-right ml-2 print-hide">
			Back</a> &nbsp;
		<a href="{{ route('download_attorney_csv', ['id'=> $client_id])}}"
			class="back-btn btn btn-theme-black float-right ml-2 print-hide">
			CSV</a> &nbsp;
		<a href="{{ route('download_attorney_bci', ['id'=> $client_id])}}"
			class="back-btn btn btn-theme-black float-right ml-2 print-hide">
			BCI</a> &nbsp;
	</div>
	<div class="card-body px-0">
			@include("attorney.form_elements.basic_info",$basic_info)			
		<hr>		
		<!-- Property section like this -->
		<div class="main-title pt-3">
			<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0 px-3"> Property</h3>
			<hr>
		</div>
			@include("attorney.form_elements.property",$property_info)
		<hr>
		<div class="main-title pt-3">
			<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0 px-3"> Debts</h3>
			<hr>
		</div>
			@include("attorney.form_elements.debts",$debts)
		<hr>
		<div class="main-title pt-3">
			<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0 px-3"> Current Income</h3>
			<hr>
		</div>
			@include("attorney.form_elements.income",$income_info)
		<hr>
		<div class="main-title pt-3">
			<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0 px-3"> Current Expenses</h3>
			<hr>
		</div>
			@include("attorney.form_elements.expenses",$expenses_info)
		<hr>
		<div class="main-title pt-3">
			<h3 class="section-main-title text-c-blue f-w-800 d-inline-block mb-0 px-3"> Statement of Financial Affairs</h3>
			<hr>
		</div>
			@include("attorney.form_elements.financial_affairs",$financialaffairs_info)
		<hr>
		<hr>
	</div>
</div>
<style>
.sec_merger{margin: 0 auto;padding: 0;}
.hide-data{display:none;}
</style>
@endsection