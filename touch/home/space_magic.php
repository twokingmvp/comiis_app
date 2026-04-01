<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_magictimgs']}-->
    <div class="cl" style="position:relative;">
        <!--{if $comiis_app_switch['comiis_magictimgs']}-->$comiis_app_switch['comiis_magictimgs']<!--{/if}-->
        <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box" style="bottom:-6px;"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
    </div>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:41px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
    <ul class="comiis_flex">
        <!--{if $_G['group']['allowmagics']}--><li class="flex{if $actives[shop]} f_0{/if}">{if $actives[shop]}<em class="bg_0"></em>{/if}<a href="home.php?mod=magic&action=shop"{if !$actives[shop]} class="f_c"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_topnv">{lang magics_shop}</a></li><!--{/if}-->
        <li class="flex{if $actives[mybox]} f_0{/if}">{if $actives[mybox]}<em class="bg_0"></em>{/if}<a href="home.php?mod=magic&action=mybox"{if !$actives[mybox]} class="f_c"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_topnv">{lang magics_user}</a></li>
        <li class="flex{if $actives[log]} f_0{/if}">{if $actives[log]}<em class="bg_0"></em>{/if}<a href="home.php?mod=magic&action=log&operation=uselog"{if !$actives[log]} class="f_c"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_topnv">ประวัติย้อนหลัง</a></li>
    </ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="comiis_magic_box">
<!--{if $action == 'log'}-->
<div class="comiis_top_sub bg_f">
	<div id="comiis_top_box" class="b_b">
		<div id="comiis_sub_btn">
			<ul>
				<li><a href="home.php?mod=magic&action=log&operation=uselog&km=1" {if $subactives[uselog]} class="f_0"{else} class="f_d"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_top_sub">การใช้งานไอเท็ม</a></li>
                <li><span class="comiis_tm f_d">/</span><a href="home.php?mod=magic&action=log&operation=buylog" {if $subactives[buylog]} class="f_0"{else} class="f_d"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_top_sub">การซื้อไอเท็ม</a></li>
                <li><span class="comiis_tm f_d">/</span><a href="home.php?mod=magic&action=log&operation=givelog" {if $subactives[givelog]} class="f_0"{else} class="f_d"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_top_sub">การมอบไอเท็ม</a></li>
                <li><span class="comiis_tm f_d">/</span><a href="home.php?mod=magic&action=log&operation=receivelog" {if $subactives[receivelog]} class="f_0"{else} class="f_d"{/if} comiis_ajax=".comiis_magic_box" comiis_t_ajax=".comiis_top_sub">การรับไอเท็ม</a></li>
			</ul>
		</div>
	</div>
</div>
<!--{/if}-->
<div class="styli_h10 bg_e b_b"></div>
<!--{if !$_G['setting']['magicstatus'] && $_G['adminid'] == 1}-->
    <div class="comiis_notip comiis_sofa mt15 cl">
        <i class="comiis_font f_e cl">&#xe690;</i>
        <span class="f_d">{lang magics_tips}</span>
    </div>
<!--{/if}-->
<!--{if $action == 'shop'}-->
    <!--{subtemplate home/space_magic_shop}-->
<!--{elseif $action == 'mybox'}-->
    <!--{subtemplate home/space_magic_mybox}-->
<!--{elseif $action == 'log'}-->
    <!--{subtemplate home/space_magic_log}-->
<!--{/if}-->
</div>
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->