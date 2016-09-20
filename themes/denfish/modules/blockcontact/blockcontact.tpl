<script>
$(function(){
	$('.phone-wrap').hover(
		function(){
			$('.phone i').removeClass('fa-angle-down').addClass('fa-angle-up');
		},
		function(){
			$('.phone i').removeClass('fa-angle-up').addClass('fa-angle-down');
		}
	);
});
</script>

<div class="phone-wrap">
    {if $telnumber}
       <span class="phone">{$telnumber}<i class="fa fa-angle-down" aria-hidden="true"></i></span>
    {/if}
<ul class="phones">
    {if $telnumber2}
    <li>{$telnumber2}</li>
    {/if}
    {if $telnumber3}
    <li>{$telnumber3}</li>
    {/if}
    {if $email}
        <li class="mail"> <a href="mailto:{$email}">{$email}</a></li>
    {/if}
</ul>
</div>
<!--<div class="phone"><span>+3 8050</span> 548 11 59</div>-->
