$(function() {
	/* Get date stop */
	$( "#datestop" ).datepicker({
		dateFormat: "yy-mm-dd",
		minDate: new Date()
	});
	
	/* Sort */
	$( "#banners_list" ).sortable({
		revert: true
	});
});

function updateBannerPosition()
{
	var ids = '';
	$('#banners_list li').each(function() {
		ids += $(this).attr('rel')+',';
	});
	
	ids = ids.slice(0, -1);
	
	$.ajax({
		type: 'GET',
		url: baseDir + 'modules/azbanner/asset/azajax.php',
		async: true,
		cache: false,
		data: 'updateOrder=true&ids='+ids,
		success: function(data)
		{
			if( data == 'fail' )
				alert( 'Cannot update banner position' );
		}
	});
}

function deleteBanner( id )
{
	if( confirm('Are you sure you want to delete ?') == true )
	{
		$.ajax({
			type: 'GET',
			url: baseDir + 'modules/azbanner/asset/azajax.php',
			async: true,
			cache: false,
			data: 'delete=true&id='+id,
			success: function(data)
			{
				if( data == 'fail' )
					alert( 'Cannot delete banner' );
				else
					$('#banners_list #item_'+id).fadeOut(1000);
			}
		});
	}
}