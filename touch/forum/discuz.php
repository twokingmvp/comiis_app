<?PHP exit('Access Denied');?>
<!--{if ($_G['setting']['mobile']['mobilehotthread'] || $_G['setting']['mobile']['portal']['catnav']) && $_GET['forumlist'] != 1}-->
	<!--{eval dsetcookie('comiis_colorid_u'.$_G['uid'], '');dheader('Location:forum.php?mod=guide&view=hot'.((strpos($_SERVER['HTTP_USER_AGENT'], 'miniProgram') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'miniprogram') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'MiniProgramEnv') !== false) ? '&comiis_uid='.$_G['uid'] : ''));exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/comiis_discuz.php'}-->
<script>var mobileforumview = {if isset($_G['setting']['mobile']['forum']['forumview'])}{$_G['setting']['mobile']['forum']['forumview']}{else}{$_G['setting']['mobile']['mobileforumview']}{/if};</script>
<script src="template/comiis_app/comiis/js/comiis_forum.js?{VERHASH}" charset="{CHARSET}"></script>
<!--{hook/index_top_mobile}-->
<!--{if count($comiis_app_nav['tnav'])}-->
    <!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:40px;"><div class="comiis_scrollTop_box"><!--{/if}-->
	<div class="comiis_top_sub bg_f">
		<div id="comiis_top_box" class="b_b">
			<div id="comiis_sub">
				<ul class="swiper-wrapper{if count($comiis_app_nav['tnav']) < 5} comiis_flex{/if}">
				<!--{loop $comiis_app_nav['tnav'] $temp}-->
					<li class="{if count($comiis_app_nav['tnav']) > 5}swiper-slide{else}flex{/if}{if $_GET['bbs'] == 1}{if strpos($temp['url'],'&bbs=1') !== false} f_0{/if}{elseif $temp['nav_ids'] == $comiis_nav_ids && strpos($temp['url'],'&bbs=1') === false} f_0{/if}">{if $_GET['bbs'] == 1}{if strpos($temp['url'],'&bbs=1') !== false}<em class="bg_0"></em>{/if}{elseif $temp['nav_ids'] == $comiis_nav_ids && strpos($temp['url'],'&bbs=1') === false}<em class="bg_0"></em>{/if}<a href="$temp['url']"{if $_GET['bbs'] == 1}{if strpos($temp['url'],'&bbs=1') !== false} class="f_c"{/if}{elseif $temp['nav_ids'] == $comiis_nav_ids && strpos($temp['url'],'&bbs=1') === false} class="f_c"{/if}>$temp['name']</a></li>
				<!--{/loop}-->
				</ul>
			</div>
		</div>
	</div>
	<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
	<!--{if $comiis_app_switch['comiis_bbstype'] == 1}--><div class="bg_e b_b" style="height:12px;"></div><!--{/if}-->
	<script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>
	<script>
		if($("#comiis_sub li.f_0").length > 0) {
			var comiis_index = $("#comiis_sub li.f_0").offset().left + $("#comiis_sub li.f_0").width() >= $(window).width() ? $("#comiis_sub li.f_0").index() : 0;
		}else{
			var comiis_index = 0;
		}	
		mySwiper = new Swiper('#comiis_sub', {
			freeMode : true,
			slidesPerView : 'auto',
			initialSlide : comiis_index,
			onTouchMove: function(swiper){
				Comiis_Touch_on = 0;
			},
			onTouchEnd: function(swiper){
				Comiis_Touch_on = 1;
			},		
		});
	</script>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_bbstype'] == 1}-->
	<!--{eval comiis_load('vDzdVlPtn6Gf8G6cQ1', 'gid,forum_favlist,comiis_isnoe,favforumlist,comiis_recommend_forum,comiis_recommend_forum_id,favfid_list,catlist,forumlist');}-->
	<!--{if $_G['uid']}-->
	<script>
	function succeedhandle_favorite_del(a, b, c){
		if(b.indexOf("{$comiis_lang['all24']}") >= 0){
			b = '{$comiis_lang['tip2']}';
			$('#comiis_fidbox' + c['id'] + '>span').removeClass('bg_b f_d').addClass("bg_c f_f").find('a').attr('href', 'home.php?mod=spacecp&ac=favorite&type=forum&id=' + c['id'] + '&formhash={FORMHASH}&handlekey=forum_fav').html('<i class="comiis_font">&#xe610</i>{$comiis_lang['all3']}');
			<!--{if !$gid}-->
			if($('#comiis_fidbox' + c['id']).attr('comiis_num')){
				$('#comiis_fidbox' + c['id']).prependTo('#comiis_recommend_forum_box:first');
				$($('#comiis_recommend_forum_box>li').toArray().sort(function(a,b){return parseInt($(a).attr('comiis_num'))-parseInt($(b).attr('comiis_num'))})).appendTo('#comiis_recommend_forum_box');
			}else{
				$('#comiis_fidbox' + c['id']).remove();
			}
			comiis_showhidebox();
			<!--{/if}-->
		}
		popup.open(b, 'alert');
	}
	function succeedhandle_forum_fav(a, b, c){
		if(b.indexOf("{$comiis_lang['tip47']}") >= 0){
			b = '{$comiis_lang['tip1']}';
			$('#comiis_fidbox' + c['id'] + '>span').removeClass('bg_c f_f').addClass("bg_b f_d").find('a').attr('href', 'home.php?mod=spacecp&ac=favorite&op=delete&type=forum&formhash={FORMHASH}&handlekey=forum_fav&favid=' + c['favid']).text('{$comiis_lang['all4']}');
			<!--{if !$gid}-->
			$('#comiis_fidbox' + c['id']).prependTo('#comiis_favorite_box:first');
			comiis_showhidebox();
			<!--{/if}-->
		}
		popup.open(b, 'alert');
	}
	function comiis_showhidebox(){
		if($('#comiis_recommend_forum_box li').length > 0){
			$('.comiis_norecommendbox').css('display' , 'none');
		}else{
			$('.comiis_norecommendbox').css('display' , 'block');
		}
		if($('#comiis_favorite_box li').length > 0){
			$('.comiis_nofavbox').css('display' , 'none');
		}else{
			$('.comiis_nofavbox').css('display' , 'block');
		}
	}
	function errorhandle_favorite_del(a, b){
		if(a.indexOf("{$comiis_lang['tip48']}") >= 0){
			a = '{$comiis_lang['tip49']}';
		}
		popup.open(a, 'alert');
	}
	function errorhandle_forum_fav(a, b){
		if(a.indexOf("{$comiis_lang['tip50']}") >= 0){
			a = '{$comiis_lang['tip51']}';
		}else if(a.indexOf("{$comiis_lang['tip48']}") >= 0){
			a = '{$comiis_lang['tip49']}';
		}
		popup.open(a, 'alert');
	}
	</script>
	<!--{/if}-->
<!--{elseif $comiis_app_switch['comiis_bbstype'] == 4}-->
	<!--{eval comiis_load('h34ZG0M0z0WjZES2RK', 'gid,announcements,todayposts,postdata,posts,forum_favlist,favforumlist,catlist,forumlist');}-->
<!--{else}-->
	<!--{eval comiis_load('vz81w7c1C4lEQLqq8q', 'gid,announcements,todayposts,postdata,posts,forum_favlist,favforumlist,catlist,forumlist');}-->
<!--{/if}-->
{eval}
$comiis_app_wx_share['img'] = './template/comiis_app/pic/icon152.png';
$comiis_app_wx_share['title'] = $_G['setting'][navs][2][navname].' - '.($comiis_app_switch['comiis_sitename'] ? $comiis_app_switch['comiis_sitename'] : $_G['setting']['sitename']);
{/eval}
<!--{template common/footer}-->