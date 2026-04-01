<?PHP exit('Access Denied');?>
<!--{if $_G['group']['magicsdiscount'] || $_G['group']['maxmagicsweight']}-->
	<!--{if $_G['group']['maxmagicsweight']}-->
    <div class="comiis_medalbox bg_f comiis_pb0 cl">
        <div class="comiis_medaltip comiis_pb0 f_c cl">
		{lang magics_capacity}: <span class="f_a">$totalweight</span> / {$_G['group']['maxmagicsweight']}
        </div>
    </div>
	<!--{/if}-->
<!--{/if}-->
<!--{eval comiis_load('VItZ5M3QI4ZPPg2p5W', 'mymagiclist,multipage');}-->