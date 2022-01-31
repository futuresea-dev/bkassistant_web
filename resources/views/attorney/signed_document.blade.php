@extends('layouts.attorney')
@section('content')
@include("layouts.flash")
<div class="row">
	<div class="col-md-12">
		<div class="questionnaire-wrapper-content pt-3">
			<div class="questionnaire-main-title text-center">
				<h3 class="text-c-blue f-w-800"> Please Upload the Signed Document</h3>				
			</div>
		</div>
		<div class="container-1140">
			<div class="upload-documents-wrapper">
				<div class="row justify-content-md-center">
					<div class="col-md-12 col-12">
						<form name="attorney_retainer_doc_frm" id="attorney_retainer_doc_frm" action="{{route('attorney_signed_doc',['id'=>$client_id])}}" method="post" enctype="multipart/form-data" novalidate>
							@csrf						
							<div class="row">
								<div class="col-md-12">
									<div class="form-group file_area">
										<div class="box">
										<input type="file" name="signed_document" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
									</div>												
									</div>
								</div>
								<input type="hidden" name="attorney_id" value="<?php echo @$attorney_id;?>">
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-theme-black">Upload</button>
								</div>
							</div>
						</form>
					</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="{{ asset('assets/css/uploaded-doc.css')}}">
<script src="{{ asset('assets/js/upload-document.js')}}"></script>
<style>
.text-right {
    text-align: center!important;
    margin-top: 61px;
    margin-left: -21px;
}
.avatar-upload label:after {
    content: "\e81c";
}
.file_area{
	text-align: center;
    border: 1px dotted;
    height: 140px;
}
#retainer_document{
	position: relative;
    top: 45px;
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
$(document).ready(function(){
	// $(".questionnaire-main-title:first").remove();
	$("#retainer_document").change(function (data) {
		var imageFile = data.target.files[0];
		var type = data.target.files[0].type;
		var reader = new FileReader();
		reader.readAsDataURL(imageFile);

		reader.onload = function (evt) {
			if(type=='application/pdf'){
				$('#both__preview__DL').removeClass('hide_img_preview');
				$('#retainer__preview__DL').hide();
				$('#pdfboth-licence-imagePreview').attr('src', evt.target.result);
				$('#pdfboth-licence-imagePreview').hide();
				$('#pdfboth-licence-imagePreview').fadeIn(650);
			}else{
				$('#both__preview__DL').addClass('hide_img_preview');
				$('#retainer__preview__DL').show();
				$('#retainer_document_imagePreview').attr('src', evt.target.result);
				$('#retainer_document_imagePreview').hide();
				$('#retainer_document_imagePreview').fadeIn(650);
			}
		}

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
@endsection