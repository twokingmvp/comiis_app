<?PHP exit('Access Denied');?>
<div class="cl" style="height:40px;"></div>
<div class="comiis_space_foot bg_f b_t">
	<ul class="comiis_flex ibljego">
		<!--{eval require_once libfile('function/friend');$isfriend=friend_check($space['uid']);}-->
		<!--{if !$isfriend}-->
			<li class="flex"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=friend&op=add&uid=$space['uid']&handlekey=addfriendhk_{$space['uid']}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if}><i class="comiis_font f_qq">&#xe60f;</i><span class="f_b">{$comiis_lang['post40']}</span></a></li>
		<!--{else}-->
			<li class="flex foot_cp"><a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$space['uid']&handlekey=ignorefriendhk_{$space['uid']}"{if $_G['uid']} class="dialog"{/if}><i class="comiis_font f_qq">&#xe60f;</i><span class="f_b">{lang ignore_friend}</span></a></li>
		<!--{/if}-->		
		<li class="flex"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=poke&op=send&uid=$space['uid']&handlekey=propokehk_{$space['uid']}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"><i class="comiis_font f_wb">&#xe638;</i><span class="f_b">{$comiis_lang['post38']}</span></a></li>
		<li class="flex"><a href="{if $_G['uid']}home.php?mod=space&do=pm&subop=view&touid=$space['uid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"><i class="comiis_font f_wx">&#xe626;</i><span class="f_b">{$comiis_lang['post41']}</span></a></li>
		<!--{if $_G['uid']}-->  
		<li class="flex">
			<!--{if C::t('home_blacklist')->count_by_uid_buid($_G['uid'], $space['uid'])}-->
				<a href="home.php?mod=spacecp&ac=friend&op=blacklist&subop=delete&uid=$space['uid']&start=&mobile=2" class="dialog"><span class="f_wb">{$comiis_lang['tip396']}</span></a>
			<!--{else}-->
				<a href="javascript:popup.open('{$comiis_lang['tip395']}', 'confirm', 'javascript:comiis_adduserblacklist();');"><i class="comiis_font f_c">&#xe65c;</i><span class="f_b">{$comiis_lang['tip394']}ta</span></a>
			<!--{/if}-->
		</li>
		<!--{/if}-->
	</ul>
</div>
<!--{if $_G['uid']}-->  
<script>
function comiis_adduserblacklist() {
	popup.open('<img src="' + IMGDIR + '/imageloading.gif" class="comiis_loading">');
	$.ajax({
		type:'POST',
		url:'./home.php?mod=spacecp&ac=friend&op=blacklist&start=&inajax=1',
		data: 'blacklistsubmit=true&formhash={FORMHASH}&username={$space['username']}',
		dataType:'xml'
	}).success(function(s) {
		popup.open(s.lastChild.firstChild.nodeValue);
		evalscript(s.lastChild.firstChild.nodeValue);
	});
}
</script>
<!--{/if}-->