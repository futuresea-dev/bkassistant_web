<!-- Tab 4 -->
<?php if($step1){ ?>
	<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/pYumM0uXFJM" data-video2="https://www.youtube.com/embed/oqMnd2a74fE">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
	</div>
<?php }?>
<?php if($step2){ ?>
	<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/4EdqFJ9SgMM" data-video2="https://www.youtube.com/embed/vV23iULi15c">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
	</div>
<?php }?>
<?php if($step3){ ?>
	<div class="scan-os cstm-id">
	<a class="btn shadow-2 mb-4 download-form" data-toggle="modal" onclick="run_tutorial_videos(this,'#video_modal')" title=" Click for Step by Step video" data-video="https://www.youtube.com/embed/4EdqFJ9SgMM" data-video2="https://www.youtube.com/embed/z9OH3GpFIp8">
		<img src="{{url('assets/images/video-play.jpg')}}" style="height: 36px;display: block;margin: 1px auto;">
		Click for Step by Step video 
	</a>
	</div>
<?php }?>
<br/><br/>
<div class="tab-pane fade show active" id="section4" role="tabpanel" aria-labelledby="section4-tab">
	<h3 class="section-main-title text-c-blue f-w-800"> Current Income
    </h3>
	<!-- Current Income Part A -->
	<div id="current-income-part-a" <?php if(!$step1){?> class="hidestep" <?php }?>>
		<form name="client_income_step1" id="client_income_step1" action="{{route('client_income_step1')}}" method="post">
		@csrf
		@include("client.questionnaire.income.debtor_employer",$incomedebtoremployer)
		</form>
	</div>
	<!-- Current Income Part B -->
	<div id="current-income-part-b" <?php if(!$step2){?> class="hidestep" <?php }?>>
		<form name="client_income_step2" id="client_income_step2" action="{{route('client_income_step2')}}" method="post">
		@csrf
		@include("client.questionnaire.income.debtor_spouse_employer",$debtorspouseemployer)
		</form>
	</div>
	<!-- Current Income Part C -->
	<div id="current-income-part-c" <?php if(!$step3){?> class="hidestep" <?php }?>>
		<form name="client_income_step3" id="client_income_step3" action="{{route('client_income_step3')}}" method="post">
		@csrf
		@include("client.questionnaire.income.debtor_monthly_income",$debtormonthlyincome)
		</form>
	</div>
	<!-- Current Income Part D -->
	<div id="current-income-part-d" <?php if(!$step4){?> class="hidestep" <?php }?>>
		<form name="client_income_step4" id="client_income_step4" action="{{route('client_income_step4')}}" method="post">
		@csrf
		@include("client.questionnaire.income.debtor_spouse_monthly_income",$debtorspousemonthlyincome)
		</form>
	</div>
	<script>
		$(document).ready(function(){
			$("#client_income_step1").validate({
				errorPlacement: function (error, element) {
					if($(element).parents(".form-group").next('label').hasClass('error')){
						$(element).parents(".form-group").next('label').remove();
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}else{
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}
				},
				success: function(label,element) {
					label.parent().removeClass('error');
					$(element).parents(".form-group").next('label').remove();
				},
			});

			$("#client_income_step2").validate({
				errorPlacement: function (error, element) {
					if($(element).parents(".form-group").next('label').hasClass('error')){
						$(element).parents(".form-group").next('label').remove();
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}else{
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}
				},
				success: function(label,element) {
					label.parent().removeClass('error');
					$(element).parents(".form-group").next('label').remove();
				},
			});

			$("#client_income_step3").validate({
				errorPlacement: function (error, element) {
					if($(element).parents(".form-group").next('label').hasClass('error')){
						$(element).parents(".form-group").next('label').remove();
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}else{
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}
				},
				success: function(label,element) {
					label.parent().removeClass('error');
					$(element).parents(".form-group").next('label').remove();
				},
			});

			$("#client_income_step4").validate({
				errorPlacement: function (error, element) {
					if($(element).parents(".form-group").next('label').hasClass('error')){
						$(element).parents(".form-group").next('label').remove();
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}else{
						$(element).parents(".form-group").after($(error)[0].outerHTML);
					}
				},
				success: function(label,element) {
					label.parent().removeClass('error');
					$(element).parents(".form-group").next('label').remove();
				},
			});
		});
	</script>
</div>
<!-- Tab 4 End-->
