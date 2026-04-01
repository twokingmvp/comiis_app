<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:41px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
	<ul class="comiis_flex">
        <li class="flex"><a href="home.php?mod=space&do=friend&type=near" class="f_c" comiis_ajax=".comiis_friend_boxs" comiis_t_ajax=".comiis_topnv">{$comiis_lang['tip337']}</a></li>
		<li class="flex f_0"><em class="bg_0"></em><a href="home.php?mod=spacecp&ac=search&op=sex" comiis_ajax=".comiis_friend_boxs" comiis_t_ajax=".comiis_topnv">{lang search_friend}</a></li>
	</ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="comiis_friend_boxs">
<!--{if !empty($_GET['searchsubmit'])}-->    
    <!--{if empty($list)}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang no_search_friend}</span>
            <a href="home.php?mod=spacecp&ac=search" class="bg_c f_f">{$comiis_lang['search_member_list_url']}</a>
        </div>
    <!--{else}-->
        <div class="mt10 comiis_pltit bg_f b_b f14 cl">
            <h3><i class="comiis_font z f18 f_d">&#xe66c;</i><span class="f_d">{$comiis_lang['search_member_list_message']}</span><a href="home.php?mod=spacecp&ac=search" class="f_ok">{$comiis_lang['search_member_list_url']}</a></h3>
        </div>
        <!--{eval comiis_load('GxSPJTKPJuKJ5JF022', 'list,multi');}-->
    <!--{/if}-->
<!--{else}-->
    <!--{eval comiis_load('Gy9iroMY9hDGgYG7ei', 'fields');}-->    
<!--{/if}-->
</div>
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->