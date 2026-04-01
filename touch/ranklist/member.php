<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:40px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
    <ul class="comiis_flex">
        <li class="flex{if $a_actives[credit]} f_0{/if}">{if $a_actives[credit]}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=member&view=credit"{if !$a_actives[credit]} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">คะแนน</a></li>
        <li class="flex{if $a_actives[post]} f_0{/if}">{if $a_actives[post]}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=member&view=post"{if !$a_actives[post]} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">โพสต์</a></li>
        <li class="flex{if $a_actives[onlinetime]} f_0{/if}">{if $a_actives[onlinetime]}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=member&view=onlinetime&orderby=all"{if !$a_actives[onlinetime]} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">ออนไลน์</a></li>
        <li class="flex{if $a_actives[beauty]} f_0{/if}">{if $a_actives[beauty]}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=member&view=beauty"{if !$a_actives[beauty]} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">ผู้หญิง</a></li>
        <li class="flex{if $a_actives[handsome]} f_0{/if}">{if $a_actives[handsome]}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=member&view=handsome"{if !$a_actives[handsome]} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">ผู้ชาย</a></li>
    </ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="comiis_ranklist_box cl">
<!--{if $list}-->
    <div class="cl">
        <!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/ranklist.php';}-->
        <!--{eval comiis_load('nP575S5q5rBs17R7fm', 'a_actives,list,extcredits');}-->
    </div>
    <!--{if $multi}--><div class="comiis_pgs cl">$multi</div><!--{/if}-->
	</div>
<!--{else}-->
	<div class="comiis_notip mt10 cl">
        <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
            <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
        <!--{else}-->
            <i class="comiis_font f_e cl">&#xe613</i>
        <!--{/if}-->
		<span class="f_d">{$comiis_lang['all22']}</span>
	</div>
<!--{/if}-->
<div class="comiis_vfgohome f_d mb10" style="text-align:center;">{$comiis_lang['ranklist_update']}</div>
</div>
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->