jQuery(document).ready(function() {
	
	jQuery("#search_content_adv_link").click(function () {	
	
		if (jQuery(this).text() == 'Advanced Search'){
			jQuery('body').css('backgroundPosition', '0 425px');
			//jQuery('#header_wrapper').height(180);
			jQuery(this).text('Close Advanced');
		
		}else{
			jQuery('body').css('backgroundPosition', '0 181px');
			//jQuery('#header_wrapper').height(420);
			jQuery(this).text('Advanced Search');
			
		}
		jQuery("#adv_search").slideToggle();
	
	});
	
	jQuery("#simple_search_button").click(function(){
		window.location= "http://cdm16317.contentdm.oclc.org/cdm/search/searchterm/" + jQuery("#search_content_box").val() + "/order/nosort";
	});
	
	jQuery('#advanced_max_collections_link').click(function(){
		jQuery.ajax({
			url: "http://seekingmichigan.org/wp-content/themes/shiny-child/searchCustom/getCollections.php",
			cache: false
		}).done(function( html ) {
			jQuery("#advanced_max_collections_link").parent().append(html);
			jQuery("#advanced_max_collections_link").remove();
		});
	});
	
	jQuery(".remove_adv_search_row_link").click(function(){
		var toToss = jQuery(this).attr('rid');
		jQuery("#"+toToss).remove();
		jQuery("#adv_search_add_field_link").css('display','block');
	});
	
	jQuery("#adv_search_add_field_link").click(function(){
		var newFieldNum = jQuery('.adv_search_row').length;
		var newAdv = getAdvMore(newFieldNum);
		jQuery('#adv_search_query_builder_list').append(newAdv);
		jQuery(".remove_adv_search_row_link").click(function(){
			var toToss = jQuery(this).attr('rid');
			jQuery("#"+toToss).remove();
			jQuery("#adv_search_add_field_link").css('display','block');
		});
		if (newFieldNum == 3){
			jQuery("#adv_search_add_field_link").css('display','none');
		}
	});
	
	
	jQuery("#adv_search_by_date_link").click(function () {
		jQuery("#adv_search_by_date_container").slideToggle('slow');
	});
	
	jQuery('#adv_search_date_range').change(function(){
		if (jQuery('#adv_search_date_range').val() != 'from'){
			jQuery('#datepicker2').css('display','none');
			jQuery('#datepickerTo').css('display','none');
			jQuery('#datepicker2').val('');
		}else{
			jQuery('#datepicker2').css('display','block');
			jQuery('#datepickerTo').css('display','block');
		}
	});
	
	jQuery("#advanced_search_button").click(function(){
		var term = '/searchterm/';
		var field = '/field/';
		var mode = '/mode/';
		var conn = '/conn/';
		var collection = '';
		
		if (jQuery('#collectionsSelect').length){
			var colString = jQuery('#collectionsSelect').val();
			var cleanCol = colString.join(",");
			cleanCol = cleanCol.replace(/\//g,"");
			cleanCol = cleanCol.replace(/,/g,"!");
			collection = '/collection/' + cleanCol;
		}
		
		for (i=0; i< jQuery('.adv_search_row').length; i++){
			if (i > 0){
				term = term + '!' + jQuery('#rid'+i+'_term').val();
				field = field + '!' + jQuery('#rid'+i+'_field').val();
				mode = mode + '!' + jQuery('#rid'+i+'_mode').val();
				conn = conn + '!' + jQuery('#rid'+i+'_connector').val();
			}else{
				term = term + jQuery('#rid'+i+'_term').val();
				field = field + jQuery('#rid'+i+'_field').val();
				mode = mode + jQuery('#rid'+i+'_mode').val();
				conn = conn + jQuery('#rid'+i+'_connector').val();
			}
		}
		if( jQuery('#datepicker1').val() && jQuery.isNumeric(jQuery('#datepicker1').val())) {
			var date1string=jQuery('#datepicker1').val();
			var cleandate1=date1string.replace(/\//g,"");
			if( jQuery('#datepicker2').val() ){
				var date2string=jQuery('#datepicker2').val();
				var cleandate2=date2string.replace(/\//g,"");
				term = term + '!' + cleandate1 + '-' + cleandate2;
			}else{
				term = term + '!' + cleandate1 + '-' + '99999999';
			}
			field = field + '!' + 'date';
			conn = conn + '!' + 'and';
			mode = mode + '!' + 'exact';
		}
		window.location= "http://cdm16317.contentdm.oclc.org/cdm/search" + collection + term + field + mode + conn + "/order/nosort";
	});
	
	function getAdvMore(n){
		var advMore = '<li id="rid'+n+'" class="adv_search_row "><ul class="adv_search_ul_row"><li class="leftside"><select id="rid'+n+'_mode" class="adv_search_type_dd" ><option selected="selected" value="all">All of the words</option><option value="any">Any of the words</option><option value="exact">The exact phrase</option><option value="none">None of the words</option></select></li><li class="leftside spaceMar5L"><input id="rid'+n+'_term" class="adv_search_str" type="text" value=""></li><li class="leftside spaceMar5L spacePad5">in</li><li class="leftside spaceMar5L"><select id="rid'+n+'_field" class="adv_search_domain_dd"><option selected="selected" value="all">All fields</option><option value="title">Title</option><option value="subjec">Subject</option><option value="descri">Description</option><option value="creato">Creator</option><option value="publis">Publisher</option><option value="contri">Contributors</option><option value="date">Date</option><option value="type">Type</option><option value="format">Format</option><option value="identi">Identifier</option><option value="source">Source</option><option value="langua">Language</option><option value="relati">Relation</option><option value="covera">Coverage</option><option value="rights">Rights</option><option value="audien">Audience</option><option value="titlea">Title-Alternative</option><option value="descria">Description-Table Of Contents</option><option value="describ">Description-Abstract</option><option value="datea">Date-Created</option><option value="dateb">Date-Valid</option><option value="datec">Date-Available</option><option value="dated">Date-Issued</option><option value="datee">Date-Modified</option><option value="formata">Format-Extent</option><option value="formatb">Format-Medium</option><option value="relatia">Relation-Is Version Of</option><option value="relatib">Relation-Has Version</option><option value="relatic">Relation-Is Replaced By</option><option value="relatid">Relation-Replaces</option><option value="relatie">Relation-Is Required By</option><option value="relatif">Relation-Requires</option><option value="relatig">Relation-Is Part Of</option><option value="relatih">Relation-Has Part</option><option value="relatii">Relation-Is Referenced By</option><option value="relatij">Relation-References</option><option value="relatik">Relation-Is Format Of</option><option value="relatil">Relation-Has Format Of</option><option value="relatim">Relation-Conforms To</option><option value="coveraa">Coverage-Spatial</option><option value="coverab">Coverage-Temporal</option><option value="audiena">Audience-Mediator</option></select></li><li class="leftside spaceMar5L"><select id="rid'+n+'_connector" class="adv_search_and_or_dd"><option selected="selected" value="and">and</option><option value="or">or</option></select></li><li class="adv_search_option_remove_link_box leftside spaceMar10L spacePad5"><a class="remove_adv_search_row_link action_link_10" href="javascript://" rid="rid'+n+'">remove</a></li></ul><span class="clear"></span></li>';
		return advMore;
	}
	
});


