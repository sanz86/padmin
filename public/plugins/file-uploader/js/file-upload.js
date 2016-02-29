$(function(){

	//select the drop container
	var obj = $('.drop');

	// dragover event listener
	obj.on('dragover',function(e){
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border',"2px solid #16a085");
	});
	
	// dragover event listener
	obj.on('dragleave',function(e){
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border',"2px dotted #bdc3c7");
	});

	//drop event listener
	obj.on('drop',function(e){
		e.stopPropagation();
		e.preventDefault();
		$(this).css('border',"2px dotted #bdc3c7");

		//capture the files
		var files = e.originalEvent.dataTransfer.files;
		var file =files[0];
		//console.log(file);

		//upload the file using xhr object
		upload(file);

	});
	
	$("#file").change(function() {
		if($.trim($('#file').val()).length == 0){
			alert("please Select an images");
			return;
			}
						
		var files = $('#file').prop('files');
		var file =files[0];
		//console.log(files[0]);

		//upload the file using xhr object
		upload(file);
    });


	function upload(file){

		//create xhr object
		xhr = new XMLHttpRequest();

		//check if the uploading file is image
		if(xhr.upload && check(file.type))
		{
		//initiate request
		xhr.open('post','file-upload/drop/',true);

		//set headers
		xhr.setRequestHeader('Content-Type',"multipart/form-data");
		xhr.setRequestHeader('X-File-Name',file.fileName);
		xhr.setRequestHeader('X-File-Size',file.fileSize);
		xhr.setRequestHeader('X-File-Type',file.fileType);

		//send the file
		xhr.send(file);

		//event listener
		xhr.upload.addEventListener("progress",function(e){
			var progress= (e.loaded/e.total)*100;
			$('.progress').show();
			$('.progress-bar').css('width',progress+"%");
		},false);

		//upload complete check
		xhr.onreadystatechange = function (e){
			if(xhr.readyState ===4)
			{
				if(xhr.status==200)
				{
					$('.progress').hide();
					$('#file').val("");
					$(".image").html("<img src='"+xhr.responseText+"' width='100' height='100' />");
					$("#uploadedFile").val(xhr.responseText);
				}
			}
		}
		}
		else
			alert("please upload only images");
	}

	//function to check the image type
	function check(image){
		switch(image){
			case 'image/jpeg':
			return 1;
			case 'image/png':
			return 1;
			case 'image/gif':
			return 1;
			default:
			return 0;
		}
	}
	 //set the progress bar to be hidden on loading
	 $(".progress").hide();

});