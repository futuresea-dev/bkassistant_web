@extends('layouts.client')
@section('content')
@include("layouts.flash")
<!-- [ Main Content ] start -->

<div class="row">
	<?php //if(!empty($client_with_payments)){
	?>
	<div class="col-md-3 col-sm-12">
		<ul id="questionnaire-section-tab" class="nav flex-column nav-pills" role="tablist"
			aria-orientation="vertical">
			<li ><a href="{{route('client_dashboard')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab1'){?>active <?php }?>" id="section1-tab"
					role="tab" aria-controls="section1" aria-selected="true">Basic
					Information</a></li>
			<li><a href="{{route('property_information')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab2'){?>active <?php }?>" id="section2-tab" role="tab"
					aria-controls="section2" aria-selected="false">Property</a></li>
			<li><a href="{{route('client_debts_step2')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab3'){?>active <?php }?>" id="section3-tab" role="tab"
					aria-controls="section3" aria-selected="false">Debts</a></li>
			<!--li><a href="#" class="nav-link text-left" id="section4-tab" role="tab"
					aria-controls="section4" aria-selected="false">Unexpired Leases and
					Contracts</a></li-->
			<li><a href="{{route('client_income')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab4'){?>active <?php }?>" id="section4-tab" role="tab"
					aria-controls="section4" aria-selected="false"> Current Income</a>
			</li>
			<li><a href="{{route('client_expenses')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab5'){?>active <?php }?> <?php if(!empty($tab) && $tab=='tab7'){?>active <?php }?>" id="section5-tab" role="tab"
					aria-controls="section5" aria-selected="false">Current Expenses</a>
			</li>
			    
			<!--<li><a href="{{route('client_spouse_expenses')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab7'){?>active <?php }?>" id="section7-tab" role="tab"-->
			<!--		aria-controls="section7" aria-selected="false">Spousal Expenses</a>-->
			<!--</li>-->
			
			<li><a href="{{route('client_finacial_affairs')}}" class="nav-link text-left <?php if(!empty($tab) && $tab=='tab6'){?>active <?php }?>" id="section6-tab" role="tab"
					aria-controls="section6" aria-selected="false">Statement of Financial
					Affairs</a></li>
		</ul>
	</div>
	<div class="col-md-9 col-sm-12">
		<div class="tab-content position-relative" id="v-pills-tabContent">
				
				<div class="language-select">
					<div id="google_translate_element"></div>
				</div>
				<!--a href="{{ url('assets/documents/Bankruptcy-Questionnaire.pdf')}}" download target="_blank"
									class="btn btn-primary shadow-2 mb-4 download-form">
				<i class="feather icon-download-cloud"></i> Download Form </a-->

				<?php if($tab=='tab1'){?>
				
				@include("client.questionnaire.tab1",$info)
				
				<?php } if($tab=='tab2'){
				?>
				@include("client.questionnaire.tab2",$resident)
				<?php } if($tab=='tab3'){ ?>
					<?php if($step=='step1'){ ?>
						@include("client.questionnaire.tab3",$debts)
					<?php }?>
					<?php if($step=='step2'){ ?>
						@include("client.questionnaire.debt.debt_step2",$debts)
					<?php }?>
				<?php } if($tab=='tab4'){ ?>
				@include("client.questionnaire.tab4",$income)
				<?php } if($tab=='tab5'){ ?>
				@include("client.questionnaire.tab5",$expenses)
				<?php } if($tab=='tab6'){ ?>
				@include("client.questionnaire.tab6")
				<?php } if($tab=='tab7'){?>
				@include("client.questionnaire.tab7")
				<?php } ?>
		</div>
	</div>
	<?php //}else{?>
		<!--div class="col-md-12 col-sm-12">
			<p style="font-size: 30px; text-align: center;">Payment has not made. please contact to attorney.</p>
		</div-->
	<?php //}?>
</div>
<?php if(!empty($signeddocuments)){?>
<!--Only populate when sign document is sent by attorney-->
<div id="signed_doc_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Send Signed Document</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form name="attorney_signed_doc_frm" id="attorney_signed_doc_frm" action="{{route('client_signed_doc')}}" method="post" enctype="multipart/form-data" novalidate>
			@csrf			
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group file_area">
							<div class="box">
							<input type="file" name="signed_document" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
							<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
						</div>												
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-theme-black">Submit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</form>
		</div>

	</div>
</div>
<?php }?>
<!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
    <div class="modal-content">
        <div class="container absolute-swich-btn">
  <div class="text-center btn-cstm-toggle">
      <span class="text-gray">English</span>
          <label class="switch">
              <input type="checkbox" name="graduate">
              <span class="slider round"></span>
          </label>
      <span class="text-primary">Spanish</span>
    </div>

<div class="col-md-12 ug mt-5">

   <div class="card bg-light">
    <div class="card-body text-center">
     	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jfrjeg26Cwk" id="video"  allowscriptaccess="always" allow="autoplay" style="width: 100%;height: 390px"></iframe>
    </div>
  </div>

  </div>

<div class="col-md-12 mt-5 phd" style="display: none" >

    <div class="card bg-primary">
    <div class="card-body text-center">
      <iframe id="player1" style="width: 100%;height: 390px"  src="https://www.youtube.com/embed/mtvASE3jjxI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
  </div>

  </div>
</div>


 <!-- <div class="modal-body">-->
 <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button> -->
	<!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Jfrjeg26Cwk" id="video"  allowscriptaccess="always" allow="autoplay" style="width: 100%;height: 80%"></iframe>-->

 <!-- </div>-->
    </div>
  </div>
</div>




<style>
.input-group {
    background: none;
}
/*21  10 21*/
@media  screen and (min-width: 320px) and (max-width: 767px) {
    #video_modal .modal-content {
    width: 98% !important;
    height: 390px !important;
}
#video_modal .modal-dialog {
    width: 100% !important;
}
.text-center.btn-cstm-toggle iframe {
    width: 100% !important;
    height: 190px !important;
}
body .upload-documents-wrapper a.btn.shadow-2.mb-4.download-form {
    width: 22%;
    font-size: 13px;
    padding: 10px 0;
}
.optional-document a.btn.btn-primary.shadow-2.mb-4 {
    width: 100% !important;
}
body .upload-documents-wrapper a.doc-card-main {
    width: 73%;
    float: left;
    white-space: normal;
    word-break: break-word;
}
body .upload-documents-wrapper span.doc-type.d-block h4 {
    word-break: break-word;
    width: 74%;
}}
span.text-gray {
    right: 10px;
}
span.text-primary {
    left: 10px;
}
span.text-gray, span.text-primary {
    position: relative;
    bottom: 22px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
.text-center.btn-cstm-toggle {
    position: absolute;
    top: 11px;
    z-index: 9;
    width: 100%;
}
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

/*TOGGLE END*/

input[type="radio"] {
    width: 18px;
    height: 18px;
    vertical-align: middle;
    margin: 0 4px;
}
.tab-content .download-form {
	right: 280px;
}
#video_modal .modal-dialog {
  height: 90%; /* = 90% of the .modal-backdrop block = %90 of the screen */
  width: 900px;
}
#video_modal .modal-content {
  height: 98%; /* = 100% of the .modal-dialog block */
  width: 900px;
}
.modal {
  text-align: center;
}

@media screen and (min-width: 768px) {
  #video_modal.modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

#video_modal .modal-dialog {
	max-width: 100%;
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.container.absolute-swich-btn .card.bg-primary {
    width: 97%;
}
/* style 1 */
.box {
	margin-top: 2.5rem;
}
.inputfile-1 + label {
    color: #f1e5e6;
    background-color: #012cae;
}

.inputfile-1:focus + label,
.inputfile-1.has-focus + label,
.inputfile-1 + label:hover {
    background-color: #722040;
}

.js .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    max-width: 80%;
    font-size: 1.25rem;
    /* 20px */
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.no-js .inputfile + label {
    display: none;
}
.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
    /* pointer-events: none; */
    /* in case of FastClick lib use */
}

.inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    /* 4px */
    margin-right: 0.25em;
    /* 4px */
}
.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
</style>
<script>
function run_tutorial_videos(obj,element){
	var video_src=$(obj).attr('data-video');
	var video_src2=$(obj).attr('data-video2');
	$("#video").attr('src',video_src);
	$("#player1").attr('src',video_src2);
	$(element).modal('show');
}
	$(document).ready(function(){
		$("#signed_doc_modal").modal('show');
		$("#questionnaire-section-tab").on('click','a',function(evt){
			$("#questionnaire-section-tab").find('a').removeClass('active');
			$("#questionnaire-section-tab").find('a').attr('aria-selected',false);
			var parent=$("#questionnaire-section-tab").find('a');
			$(parent).each(function() {
				var aria_id=$(this).attr('aria-controls');
				$("#"+aria_id).removeClass('active , show');
			});
			$(evt.currentTarget).addClass('active');
			$(evt.currentTarget).attr('aria-selected',true);
			var current_id=$(evt.currentTarget).attr('aria-controls');
			$("#"+current_id).addClass('active , show');
		});
	});
		window.onscroll = function () { fixedPressNav(window.innerWidth) };
		function fixedPressNav(windowWidth) {
			let width = windowWidth.toString();
			if (width > 768) {
				if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
					document.getElementById("questionnaire-section-tab").className = "nav flex-column nav-pills fixed-topbar";
				} else {
					document.getElementById("questionnaire-section-tab").className = "nav flex-column nav-pills";
				}
			} else {
				return
			}
		}


	</script>
	<script>
		var num = 0;
		function changeStep() {
			num = num + 1
			if (num == 1) {
				var partA = document.getElementById("basic-info-part-a");
				var partB = document.getElementById("basic-info-part-b");
				partA.classList.add('hidestep');
				partB.classList.remove('hidestep');
			}
			if (num == 2) {
				var partB = document.getElementById("basic-info-part-b");
				var partC = document.getElementById("basic-info-part-c");
				partB.classList.add('hidestep');
				partC.classList.remove('hidestep');
			}
			if (num == 3) {
				var partC = document.getElementById("basic-info-part-c");
				var partD = document.getElementById("basic-info-part-d");
				partC.classList.add('hidestep');
				partD.classList.remove('hidestep');
			}
			if (num == 4) {
				var partD = document.getElementById("basic-info-part-d");
				var partE = document.getElementById("basic-info-part-e");
				partD.classList.add('hidestep');
				partE.classList.remove('hidestep');
			}
			if (num == 5) {
				var partE = document.getElementById("basic-info-part-e");
				var partF = document.getElementById("basic-info-part-f");
				partE.classList.add('hidestep');
				partF.classList.remove('hidestep');
			}
		}
	</script>


	<!--TOGGLE VIDEO QUERY-->
	<script>
    $(document).ready(function(){
        $('[name="graduate"]').change(function(){
            if($('[name="graduate"]:checked').is(":checked")){
                $('.ug').hide();
				$iframe = $('.ug').find("iframe");
				$iframe.attr("src", $iframe.attr("src"));
                $('.phd').show();
            }else{
                $('.ug').show();
                $('.phd').hide();
				$iframe = $('.phd').find("iframe");
				$iframe.attr("src", $iframe.attr("src"));
            }
        });
    });
	$(function(){
	  $('#video_modal').on('hidden.bs.modal', function (e) {
		$iframe = $(this).find("iframe");
		$iframe.attr("src", $iframe.attr("src"));
	  });
	});
'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
</script>

<style>
.client_logout{float: right; display: block; border: 2px solid #012cae; border-radius: 12px; font-weight: 900;}
</style>
@endsection
