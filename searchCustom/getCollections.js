function get_collections_js(){
	jQuery.ajax({
		url: my_collections_ajax.ajaxurl,
		data:({action : 'getCollectionSelect'}),
		cache: false
	}).done(function( html ) {
		jQuery("#advanced_max_collections_link").parent().append(html);
		jQuery("#advanced_max_collections_link").remove();
	});
	
}