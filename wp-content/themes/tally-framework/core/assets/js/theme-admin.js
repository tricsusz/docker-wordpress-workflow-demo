jQuery(document).ready(function($) {

	/* Show hive metabox by changing Page Template
	---------------------------------------------------*/
	function show_hide_metabox(metabox_id, template_id){
		$(metabox_id).css({'display':'none'});
		
		if( $("#page_template").attr('checked', true).val() == template_id){
			$(metabox_id).css({'display':'block'});
		}
		
		$("#page_template").live('change',function(){
			
			var getCurrentTemplate = $("#page_template").val();
			
			if( getCurrentTemplate == template_id){
					
					$(metabox_id).css({'display':'block'});
			}else{
				$("#page_template").attr('checked', false);
				$(metabox_id).css({'display':'none'});
			}
			
		});
	}
	
	show_hide_metabox('#tally_ot_home_tpl_metabox', 'pages/home.php');
	show_hide_metabox('#tally_ot_about_tpl_metabox', 'pages/about.php');
	show_hide_metabox('#tally_ot_gallery_tpl_metabox', 'pages/gallery.php');
	show_hide_metabox('#tally_ot_contact_tpl_metabox', 'pages/contact.php');
	
	
	/*---Hiding/Showing Blog templates metaox----*/
	var selected_blog_tpl =  $("#page_template").attr('checked', true).val();
	$("#tally_ot_blog_tpl_metabox").hide();
	
	if(selected_blog_tpl == 'pages/blog.php'){ $('#tally_ot_blog_tpl_metabox').show(); }
	if(selected_blog_tpl == 'pages/blog-left-sidebar.php'){ $('#tally_ot_blog_tpl_metabox').show(); }
	if(selected_blog_tpl == 'pages/blog-right-sidebar.php'){ $('#tally_ot_blog_tpl_metabox').show(); }
	
	$("#page_template").live('change',function(){
		var getCurrentBlogTPL = $("#page_template").val();	
		$("#tally_ot_blog_tpl_metabox").hide();
		if( (getCurrentBlogTPL == 'pages/blog.php') || (getCurrentBlogTPL == 'pages/blog-left-sidebar.php') || (getCurrentBlogTPL == 'pages/blog-right-sidebar.php') ){
			$('#tally_ot_blog_tpl_metabox').show();
		}else{
			$("#tally_ot_blog_tpl_metabox").hide();	
		}
	});
	
	
	
	/* Show hive metabox by changing post formats
	---------------------------------------------------*/
	var postformat_all_metabox_ids = '#tally_ot_postFormat_audio_metabox, #tally_ot_postFormat_video_metabox, #tally_ot_postFormat_quote_metabox, #tally_ot_postFormat_link_metabox, #tally_ot_postFormat_gallery_metabox, #tally_ot_postFormat_image_metabox, #tally_ot_postFormat_status_metabox';
	var selectedElt = $("input[name='post_format']:checked").attr("id");
	
	$(postformat_all_metabox_ids).hide();
	
	if(selectedElt == 'post-format-link'){ $('#tally_ot_postFormat_link_metabox').show(); }
	if(selectedElt == 'post-format-video'){ $('#tally_ot_postFormat_video_metabox').show(); }
	if(selectedElt == 'post-format-audio'){ $('#tally_ot_postFormat_audio_metabox').show(); }
	if(selectedElt == 'post-format-quote'){ $('#tally_ot_postFormat_quote_metabox').show(); }
	if(selectedElt == 'post-format-gallery'){ $('#tally_ot_postFormat_gallery_metabox').show(); }
	if(selectedElt == 'post-format-image'){ $('#tally_ot_postFormat_image_metabox').show(); }
	if(selectedElt == 'post-format-status'){ $('#tally_ot_postFormat_status_metabox').show(); }
	
	$('#post-format-link').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_link_metabox').show();
	});
	
	$('#post-format-video').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_video_metabox').show();
	});
	
	$('#post-format-audio').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_audio_metabox').show();
	});
	
	$('#post-format-quote').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_quote_metabox').show();
	});
	
	$('#post-format-gallery').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_gallery_metabox').show();
	});
	
	$('#post-format-image').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_image_metabox').show();
	});
	
	$('#post-format-status').click(function(){
		$(postformat_all_metabox_ids).hide();
		$('#tally_ot_postFormat_status_metabox').show();
	});
	
	$('#post-format-aside').click(function(){$(postformat_all_metabox_ids).hide();});
	$('#post-format-chat').click(function(){$(postformat_all_metabox_ids).hide();});
	$('#post-format-0').click(function(){$(postformat_all_metabox_ids).hide();});
	
	
});