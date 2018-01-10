jQuery(document).ready(function($) {

	$('img.img-responsive').dblclick(function(event) {
		// $('input#modal-id-video-index').click();

		var video =$(this).attr('video');
		var url =""+video+"";
		$("#cartoonVideo").attr('src',url);
		$('#modal-id-video').modal('show');


	});
});