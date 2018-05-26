; (function ($, window, document) {
	// do stuff here and use $, window and document safely
	// https://www.phpbb.com/community/viewtopic.php?p=13589106#p13589106
	$("a.simpledialog").simpleDialog({
	    opacity: 0.1,
	    width: '650px',
		closeLabel: '&times;'
	});

	/* For noscript compatibility we do it here instead of css file */
	$("#extupload").css("display", "none");
	$("#button_upload").css("display", "inline-block");

	$("#submit, .unpack_zip").click(function () {
		$("#ext_upload_content").css("opacity", ".3");
		$("#upload").css("display", "block");
	});

	$("#show_filetree").click(function () {
		$("#show_filetree").css("display", "none");
		$("#hide_filetree").css("display", "block");
		$("#markdown").fadeOut(1000, function () {
			$("#filetree").fadeIn(1000);
		});
	});

	$("#hide_filetree").click(function () {
		$("#hide_filetree").css("display", "none");
		$("#show_filetree").css("display", "block");
		$("#filetree").fadeOut(1000, function () {
			$("#markdown").fadeIn(1000);
		});
	});

	$("#valid_phpbb_ext").bind('change keyup', function () {
		$("#remote_upload").val($(this).val());
	});

	$('.inputfile').each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on('change', function(e)
		{
			var fileName = '';
			if(this.files && this.files.length > 0)
				fileName = this.getAttribute('data-multiple-caption').replace('count', this.files.length);
			$label.find('span').html(fileName);
			$('#remote_upload').val(this.files[0].name);
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
	
	$.each($('.versiondata'), function(i, el){
		setTimeout(function(){
		$.ajax({ type: "POST", 
			url: $(el).data('version'), 
			dataType: "json", 
			success: function (result)
			{
				$(el).html(result);
			}
		});
	   	}, 2500 + ( i * 5000 ));
	});

	$('select').each(function() {
		var $this = $(this),
			numberOfOptions = $(this).children('option').length;
		$this.addClass('s-hidden');
		$this.wrap('<div class="select"></div>');
		$this.after('<div class="styledSelect"></div>');
		var $styledSelect = $this.next('div.styledSelect');
		$styledSelect.text($this.children('option').eq(0).text());
		var $list = $('<ul />', {
			'class': 'selectoptions'
		}).insertAfter($styledSelect);
		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				html: $this.children('option').eq(i).text()
				.split('~').join(' <span style="float:right">'),
					rel: $this.children('option').eq(i).val()
			}).appendTo($list);
		}
		$('.fileinputs, #remote_upload').toggle();
		var $listItems = $list.children('li');
		$styledSelect.click(function(e) {
			e.stopPropagation();
			$('div.styledSelect.active').each(function() {
				$(this).removeClass('active').next('ul.selectoptions').hide();
			});
			$(this).toggleClass('active').next('ul.selectoptions').toggle();
		});
		$listItems.click(function(e) {
			e.stopPropagation();
			$styledSelect.text($(this).text()).removeClass('active');
			$this.val($(this).attr('rel'));
			$list.hide();
		});
		$(document).click(function() {
			$styledSelect.removeClass('active');
			$list.hide();
		});
	});
})(jQuery, window, document);

function loadXMLDoc(url)
{
	; (function ($, window, document) {
		// do stuff here and use $, window and document safely
		// https://www.phpbb.com/community/viewtopic.php?p=13589106#p13589106
		$("#filecontent_wrapper").fadeOut(500, function () {
			$("#filecontent").load(url, function () {
				$("#filecontent_wrapper").fadeIn(500);
			});
		});
	})(jQuery, window, document);
}
