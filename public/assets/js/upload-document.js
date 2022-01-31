$(document).ready(function () {
    $("#image-licence").on('change',function (data) {
        var imageFile = data.target.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onload = function (evt) {
			$('#img__preview__DL').removeClass('hide_img_preview');
            $('#image-licence-imagePreview').attr('src', evt.target.result);
            $('#image-licence-imagePreview').hide();
            $('#image-licence-imagePreview').fadeIn(650);
        }
    });
	$("#pdf-licence").on('change',function (data) {
        var imageFile = data.target.files[0];       
        var count_val = data.target.files.length;  
		 // console.log(count_val);
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onload = function (evt) {
			$("#dropmutiple_file_name").html(count_val+" files has been selected");
			$("#dropmutiple_file_name").show();
            // $('#pdf__preview__DL').removeClass('hide_img_preview');
            // $('#pdf-licence-imagePreview').attr('src', evt.target.result);
            // $('#pdf-licence-imagePreview').hide();
            // $('#pdf-licence-imagePreview').fadeIn(650);
        }
    });
	$("#both-licence").on('change',function (data) {
        var imageFile = data.target.files[0];
		var type = data.target.files[0].type;
		var name = data.target.files[0].name;
		// console.log(name);
        var reader = new FileReader();
        reader.readAsDataURL(imageFile);
        reader.onload = function (evt) {
			$("#drop_file_name").html(name+" has been selected");
			$("#drop_file_name").show();
            // $('#both__preview__DL').removeClass('hide_img_preview');
			// if(type=='application/pdf'){
				// $('#both-licence-imagePreview').hide();
				// $('#pdfboth-licence-imagePreview').attr('src', evt.target.result);
				// $('#pdfboth-licence-imagePreview').hide();
				// $('#pdfboth-licence-imagePreview').fadeIn(650);
			// }else{
				// $('#pdfboth-licence-imagePreview').hide();
				// $('#both-licence-imagePreview').attr('src', evt.target.result);
				// $('#both-licence-imagePreview').hide();
				// $('#both-licence-imagePreview').fadeIn(650);
			// }
        }
    });   
});
$(".edit-img").click(function () {
    $(".doc-preview").addClass("hide_img_preview");
});

function file_upload_modal(type){
	$("#image_document_upload_modal").find("#document_type").val(type);
	$("#image_document_upload_modal").modal('show');
}
function pdf_upload_modal(type){
	$("#pdf_document_upload_modal").find("#document_type").val(type);
	$("#pdf_document_upload_modal").modal('show');
}
function mutiple_upload_modal(type){
	$("#mutiple_document_upload_modal").find("#document_type").val(type);
	$("#mutiple_document_upload_modal").modal('show');
}
function both_upload_modal(type){
	$("#both_document_upload_modal").find("#document_type").val(type);
	$("#both_document_upload_modal").modal('show');
}

