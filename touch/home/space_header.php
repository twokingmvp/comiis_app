<?PHP exit('Access Denied');?>
<style>.comiis_znalist .user_gz {display:none;}.comiis_footer_scroll {bottom:70px;}</style>
<!--{eval space_merge($space, 'profile');space_merge($space, 'count');}-->
<div class="comiis_space_box jnbv">
	<div id="comiis_head"{if $comiis_isweixin == 1 && $_GET['id'] != 'comiis_app_homestyle'} class="comiis_head_hidden"{/if}>		
		<div class="comiis_head comiis_space_head f_f cl" style="background-color:transparent !important">
			<div class="header_z"><a href="javascript:;" onclick="history.go(-1);"><i class="comiis_font">&#xe60d;</i></a></div>
			<h2><a><!--{if $space['uid'] != $_G['uid']}-->{lang someone_space}เขา<!--{else}-->{lang my_space}<!--{/if}--></a></h2>
			<div class="header_y"><!--{if $comiis_app_switch['comiis_leftnv'] == 1}--><a href="javascript:;" class="comiis_leftnv_top_key"><i class="comiis_font">&#xe666;</i></a><!--{/if}--><a href="javascript:;" class="comiis_menu_display" id="comiis_menu_tr"><i class="comiis_font">&#xe62b;</i></a></div>
		</div>
	</div>
	<!--{if !($comiis_isweixin == 1 && $comiis_app_switch['comiis_header_show'] !=0 && $comiis_app_switch['comiis_header_show'] !=1)}--><div style="height:48px;"></div><!--{/if}-->
	<!--{eval}-->
	if(!$space['groupid']){
		loadcache('usergroups', 1);  
		$space = getuserbyuid($space['uid']);
	}	
	<!--{/eval}-->
	<div class="comiis_space_info f_f">
		<!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_header_show'] !=0 && $comiis_app_switch['comiis_header_show'] !=1}-->
    <div class="comiis_wxr_tcico cl"><a href="javascript:;" class="comiis_menu_display kmico f_f" id="comiis_menu_tr"><i class="comiis_font">&#xe6db;</i></a></div>
    <!--{/if}-->
		<div class="comiis_space_tx{if $comiis_app_switch['comiis_space_header']==1} comiis_space_txv1{/if}">
			<!--{if helper_access::check_module('follow') && $space['uid'] != $_G['uid']}-->
				<div class="comiis_space_flw">
					<!--{eval $follow = 0;}-->
					<!--{eval $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);}-->
					<!--{if !$follow}-->
						<a id="followmod" href="{if $_G['uid']}home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$space['uid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="bg_a f_f{if $_G['uid']} dialog{/if}">
<i class="comiis_font">&#xe610</i>{$comiis_lang['all3']}</a>
					<!--{else}-->
						<a id="followmod" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$space['uid']" class="dialog kmok"><i class="comiis_font">&#xe6f8;</i></a>
					<!--{/if}-->
				</div>
			<!--{/if}-->
			<div class="user_img"><img src="<!--{avatar($space['uid'], middle, true)}-->" /></div>
			<h2 class="fyy">{$space['username']}</h2>
			<p>
                <span class="z f14 fyy">$space[views] {$comiis_lang['all74']}</span>
                <!--{if helper_access::check_module('follow')}-->
                <span class="z comiis_tm kmx fyy">|</span><span class="z f14 fyy">$space[following] {$comiis_lang['all3']}</span><span class="z comiis_tm kmx fyy">|</span><span class="z f14 fyy">$space[follower] {$comiis_lang['all73']}</span>
                <!--{else}-->
                <span class="z comiis_tm kmx fyy">|</span><span class="z f14 fyy">$space[credits] {lang credits}</span>
                <!--{/if}-->         
			</p>
			<p>	<!--{if $space['gender'] == 1}-->
					<span class="kmlevs bg_boy f_f"><i class="comiis_font">&#xe63f;</i></span>
                <!--{elseif $space['gender'] == 2}-->
					<span class="kmlevs bg_girl f_f"><i class="comiis_font">&#xe637;</i></span>
                <!--{/if}-->
                <span class="kmlevs bg_0 kmlv f_f"{if $_G['cache']['usergroups'][$_G['member']['groupid']]['color']} style="background:$_G['cache']['usergroups'][$_G['member']['groupid']]['color'] !important;color:#fff !important"{/if}>{if $comiis_app_switch['comiis_lev_txt']}{$comiis_app_switch['comiis_lev_txt']}{else}Lv.{/if}{$_G['cache']['usergroups'][$space['groupid']]['stars']}</span>
                <span class="kmlev f_f">{echo strip_tags($_G['cache']['usergroups'][$space['groupid']]['grouptitle']);}</span>	
			</p>
		</div>
	</div>	
	<div comiis_load('HAktL1tIaRFER39vre', 'space');></div>
	<!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
</div>
<div class="comiis_memu_y bg_f f_b" id="comiis_menu_tr_menu" style="display:none;">
	<ul>
		<!--{if $comiis_app_switch['comiis_space_header']==0}-->
		<!--{if helper_access::check_module('follow') && $space['uid'] != $_G['uid']}-->
			<!--{eval $follow = 0;}-->
			<!--{eval $follow = C::t('home_follow')->fetch_all_by_uid_followuid($_G['uid'], $space['uid']);}-->
			<!--{if !$follow}-->
				<li><a id="followmod" href="{if $_G['uid']}home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$space['uid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}dialog {/if}b_b"><i class="comiis_font">&#xe60e;</i>{$comiis_lang['all3']}Ta</a></li>
			<!--{else}-->
				<li><a id="followmod" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$space['uid']" class="dialog b_b"><i class="comiis_font">&#xe60e;</i>{$comiis_lang['all4']}</a></li>
			<!--{/if}-->
		<!--{/if}-->
		<!--{/if}-->		
		<!--{if $space['uid'] != $_G['uid']}-->
		<!--{if $_G['uid']}--><li><a href="home.php?mod=space&do=profile" class="b_b"><i class="comiis_font">&#xe8c8;</i>{lang my_space}</a></li><!--{/if}-->
		<!--{else}-->
		<!--{if $_G['comiis_homestyleid']}--><li><a href="plugin.php?id=comiis_app_homestyle" class="b_b"><i class="comiis_font">&#xe7c6;</i>{lang dress_space}</a></li><!--{/if}-->
		<li><a href="home.php?mod=spacecp" class="b_b"><i class="comiis_font">&#xe655;</i>{lang update_profile}</a></li>		
		<!--{/if}-->
		<li><a href="index.php"{if $space['uid'] != $_G['uid']} class="b_b"{/if}><i class="comiis_font">&#xe657;</i>{lang return_homepage}</a></li>
		<!--{if $space['uid'] != $_G['uid']}--><li><a href="{if $_G['uid']}misc.php?mod=report&url={$_G[currenturl_encode]}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if}><i class="comiis_font">&#xe636;</i>{$comiis_lang['all2']}</a></li><!--{/if}-->
	</ul>
</div>
<!--{if $comiis_app_switch['comiis_space_nv']==0}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:40px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
	<ul class="comiis_flex">
		<li class="flex{if $do=='profile'} f_0{/if}">{if $do=='profile'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=profile&view=me&from=space"{if $do != 'profile'} class="f_b"{/if}>{$comiis_lang['view57']}</a></li>
		<li class="flex{if $do=='thread'} f_0{/if}">{if $do=='thread'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&from=space"{if $do != 'thread'} class="f_b"{/if}>{lang thread}</a></li>
		<!--{if $_G['setting'][blogstatus]}--><li class="flex{if $do=='blog'} f_0{/if}">{if $do=='blog'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=blog&view=me&from=space"{if $do != 'blog'} class="f_b"{/if}>{lang blog}</a></li><!--{/if}-->
		<!--{if $_G['setting'][albumstatus]}--><li class="flex{if $do=='album'} f_0{/if}">{if $do=='album'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=album&view=me&from=space"{if $do != 'album'} class="f_b"{/if}>{lang album}</a></li><!--{/if}-->
		<!--{if $_G['setting'][wallstatus]}--><li class="flex{if $do=='wall'} f_0{/if}">{if $do=='wall'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=wall&view=me&from=space"{if $do != 'wall'} class="f_b"{/if}>ข้อความ</a></li><!--{/if}-->		
	</ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<!--{elseif $comiis_app_switch['comiis_space_nv']==1}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:45px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b comiis_space_nv{if $comiis_app_switch['comiis_mystyle']==1}txt{/if}">
	<ul class="comiis_flex">
		<li class="flex{if $do=='profile'} f_0{/if}">{if $do=='profile'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=profile&view=me&from=space"{if $do != 'profile'} class="f_c"{/if}><i class="comiis_font">&#xe8c6;</i>{if $comiis_app_switch['comiis_mystyle']==1}{$comiis_lang['view57']}{/if}</a></li>
		<li class="flex{if $do=='thread'} f_0{/if}">{if $do=='thread'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&from=space"{if $do != 'thread'} class="f_c"{/if}><i class="comiis_font">&#xe64f;</i>{if $comiis_app_switch['comiis_mystyle']==1}{lang thread}{/if}</a></li>
		<!--{if $_G['setting'][blogstatus]}--><li class="flex{if $do=='blog'} f_0{/if}">{if $do=='blog'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=blog&view=me&from=space"{if $do != 'blog'} class="f_c"{/if}><i class="comiis_font">&#xe752;</i>{if $comiis_app_switch['comiis_mystyle']==1}{lang blog}{/if}</a></li><!--{/if}-->
		<!--{if $_G['setting'][albumstatus]}--><li class="flex{if $do=='album'} f_0{/if}">{if $do=='album'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=album&view=me&from=space"{if $do != 'album'} class="f_c"{/if}><i class="comiis_font">&#xe653;</i>{if $comiis_app_switch['comiis_mystyle']==1}{lang album}{/if}</a></li><!--{/if}-->
		<!--{if $_G['setting'][wallstatus]}--><li class="flex{if $do=='wall'} f_0{/if}">{if $do=='wall'}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&uid=$space['uid']&do=wall&view=me&from=space"{if $do != 'wall'} class="f_c"{/if}><i class="comiis_font">&#xe881;</i>{if $comiis_app_switch['comiis_mystyle']==1}{lang leave_comments}{/if}</a></li><!--{/if}-->	
	</ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<!--{/if}-->
<div class="comiis_headcolor{if $comiis_app_switch['comiis_header_style'] == 1} bg_f{else} bg_0{/if}" style="width:0px;height:0px;overflow:hidden;"></div>
<style>.comiis_head_ny {display: block;width: 100%;height: 100%;position: absolute;top: 0;right: 0;bottom: 0;z-index: -1;left: 0;visibility: visible;opacity: 0;}{if $comiis_app_switch['comiis_header_style'] == 1}.comiis_head a{transition:color .2s ease;}{/if}
</style>
<script>
var comiis_header_bg = $(".comiis_space_head").css("backgroundImage");
if(comiis_header_bg != 'none'){
	$('.comiis_space_head').css("cssText",'background:none !important').append('<div class="comiis_head_ny" style=\'background-image:'+comiis_header_bg+'\'></div>');
}
var comiis_header_rgb = $(".comiis_headcolor").css('background-color');
var comiis_header_color = $(".comiis_head").css("color") == "rgb(255, 255, 255)" && comiis_header_rgb == "rgb(255, 255, 255)" ? 1 : 0;
comiis_header_rgb = comiis_header_rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
$(window).scroll(function() {
	if($(window).scrollTop() > 100){
		if(comiis_header_bg == 'none'){
			$('.comiis_head').attr('style', 'background-color:rgba('+comiis_header_rgb[1]+','+comiis_header_rgb[2]+','+comiis_header_rgb[3]+',1) !important');
		}else{
			$(".comiis_head_ny").css({opacity: 1});
		}
	}else{
		var i = $(window).scrollTop() / 100;
		if(comiis_header_bg == 'none'){
			$('.comiis_head').attr('style', 'background-color:rgba('+comiis_header_rgb[1]+','+comiis_header_rgb[2]+','+comiis_header_rgb[3]+','+i+') !important');
		}else{
			$(".comiis_head_ny").css({opacity: i});
		}
	}
	if(comiis_header_color){
		if($(window).scrollTop() > 70){
			if($('.comiis_head').hasClass('f_f')){
				$('.comiis_head').removeClass("f_f");
			}
		}else{
			if(!$('.comiis_head').hasClass('f_f')){
				$('.comiis_head').addClass("f_f");
			}	
		}
	}
});
$(".kmlevs").each(function(){
  var comiis_setcolor_rgb = $(this).css('background-color').match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  $(this).attr('style', 'background-color:rgba('+comiis_setcolor_rgb[1]+','+comiis_setcolor_rgb[2]+','+comiis_setcolor_rgb[3]+', .6) !important');
});
</script>