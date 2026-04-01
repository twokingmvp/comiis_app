<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<div class="comiis_album_tit">
	<div class="view_top b_b">
		<h2><!--{if ($comiis_isweixin == 1 || $comiis_app_switch['comiis_leftnv'] == 1) && ((($_G['uid'] == $album['uid'] || checkperm('managealbum')) && $album[albumid] > 0) || $space[self])}--><span href="#moption" class="popup f_g comiis_xifont comiis_edit_rico mt5"><i class="comiis_font">&#xe655;</i>{$comiis_lang['edit']}</span><!--{/if}--><!--{if $album[picnum]}--><span class="f_d">{lang total} $album[picnum] {lang album_pics}</span><!--{/if}-->$album['albumname']</h2>
		<!--{if $list && $album[depict]}-->
			<div class="view_body f_c">$album[depict]</div>
		<!--{/if}-->
	</div>
</div>
<!--{eval comiis_load('YB0kB1Xtk1sF5D3Fv4', 'list,do,pricount,multi,albumlist,space');}-->
<script>
	$(function(){
		comiis_pic_masonry();
	});
	$(window).resize(function(){
		comiis_pic_masonry();
	});
	function comiis_pic_masonry(){
		var comiis_pic_width = ($(window).width() - 36) / 2;
		$('.comiis_album_imgs li').css('width', (comiis_pic_width) + 'px');
		imagesLoaded($('.comiis_album_imgs'),function(){
			$('.comiis_album_imgs').masonry({
				itemSelector:'li',
				columnWidth:comiis_pic_width,
				gutterWidth : 12
			});
		});
	}
</script>
<script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>
<!--{eval}-->
	if($_G['uid']){
		$comiis_thead_fav = C::t('home_favorite')->fetch_by_id_idtype($album[albumid], 'albumid', $_G['uid']);
	}else{
		$comiis_thead_fav = array();
	}
<!--{/eval}-->
<div id="comiis_foot_more" class="comiis_share_box comiis_bodybg" style="display: block;">
    <!--{if !$_G['comiis_isapp']}--><div id="comiis_foot_fxbtn" class="bdsharebuttonbox"><ul id="comiis_share" class="comiis_shareul swiper-wrapper"></ul></div><!--{/if}-->
    <div id="comiis_foot_gobtn" class="b_t cl">
        <ul class="comiis_shareul swiper-wrapper">
            <li class="swiper-slide kmfanhui"><a href="home.php?mod=space&do=album&view=all"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe657</i></span><em class="f_b">{$comiis_lang['all29']}</em></a></li>
		<!--{if $_G['cache']['plugin']['comiis_poster']['showstyle'] > 1}-->
			<li class="swiper-slide kmfatie"><a href="javascript:show_comiis_poster();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe663</i></span><em class="f_b">{$_G['cache']['plugin']['comiis_poster']['name']}</em></a></li>
		<!--{/if}-->
		<!--{if $_G['comiis_isapp']}-->
			<li class="swiper-slide kmfatie"><a href="javascript:comiis_user_share();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe6eb</i></span><em class="f_b">{$comiis_lang['all1']}</em></a></li>
		<!--{/if}-->
            <!--{if $album[albumid]>0}-->
            <li class="swiper-slide kmshoucang"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=favorite&type=album&id=$album[albumid]&spaceuid=$space['uid']&handlekey=favorite_album{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if} comiis="handle">{if $comiis_thead_fav['favid']}<span class="kmico bg_f f_a"><i class="comiis_font">&#xe64c</i></span><em class="f_b">{$comiis_lang['tip390']}{lang favorite}</em>{else}<span class="kmico bg_f f_c"><i class="comiis_font">&#xe617</i></span><em class="f_b">{lang favorite}{lang album}</em>{/if}</a></li>
            <!--{/if}-->
            <li class="swiper-slide kmfabu"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=upload{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe642</i></span><em class="f_b">{lang publish}{lang album}</em></a></li>            
            <li class="swiper-slide kmfuzhi"><a href="javascript:;" onclick="comiis_mob_copyurl_key()" id="comiis_mob_copy_btn" data-clipboard-text="{$_G['siteurl']}home.php?mod=space&uid={$space['uid']}&do=album&id={$album['albumid']}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe717</i></span><em class="f_b">{$comiis_lang['tip385']}</em></a></li>
            <!--{if $_G['uid'] != $space['uid']}-->
            <li class="swiper-slide kmjubao"><a href="{if $_G['uid']}misc.php?mod=report&rtype=album&uid=$album['uid']&rid=$album[albumid]{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe636</i></span><em class="f_b">{$comiis_lang['all2']}</em></a></li>
            <!--{/if}-->
        </ul>
    </div>
    <script>
        var comiis_fxbtn = new Swiper('#comiis_foot_fxbtn', {
            freeMode : true,
            slidesPerView : 'auto',
            onTouchMove: function(swiper){
                Comiis_Touch_on = 0;
            },
            onTouchEnd: function(swiper){
                Comiis_Touch_on = 1;
            },
        });
        new Swiper('#comiis_foot_gobtn', {
            freeMode : true,
            slidesPerView : 'auto',
            onTouchMove: function(swiper){
                Comiis_Touch_on = 0;
            },
            onTouchEnd: function(swiper){
                Comiis_Touch_on = 1;
            },
        });
    </script>
    <h2 class="bg_f f_g b_t comiis_share_box_close"><a href="javascript:;">{lang cancel}</a></h2>
</div>
<div class="comiis_share_tip"></div>
<script src="template/comiis_app/comiis/js/comiis_nativeShare.js"></script>
<script>
    function comiis_mob_copyurl(){
        var btn = document.getElementById('comiis_mob_copy_btn');
        var clipboard = new ClipboardJS(btn);
        clipboard.on('success', function(e) {
            popup.open('{$comiis_lang['tip375']}', 'alerts');
        });
        clipboard.on('error', function(e) {
            popup.open('{$comiis_lang['tip376']}', 'alerts');
        });
    }
    function comiis_mob_copyurl_key(){
        if(typeof(ClipboardJS) == 'undefined') {
            $.getScript("./template/comiis_app/comiis/js/clipboard.min.js").done(function(){
                comiis_mob_copyurl();
            });
        }else{
            comiis_mob_copyurl();
        }
    }
    comiis_mob_copyurl_key();
</script>
<script>
<!--{eval $comiis_share_message = cutstr(str_replace(array("\r\n", "\r", "\n", "'"), '', strip_tags($album[depict])), 100);}-->
var share_obj = new nativeShare('comiis_share', {
	img: (document.getElementsByTagName('img').length > 1 && document.getElementsByTagName('img')[1].src) || '',
	url:'{$_G['siteurl']}home.php?mod=space&do=album&id={$album[albumid]}',
	title:'{$album['albumname']}',
	desc:'{$comiis_share_message}',
	from:'{$_G['setting']['bbname']}'
});
function succeedhandle_favorite_album(a, b, c){
	popup.open(b, 'alert');
}
function errorhandle_favorite_album(a, b){
	popup.open(a, 'alert');
}
function succeedhandle_favorite_add(a, b, c){
	popup.open(b, 'alert');
}
function errorhandle_favorite_add(a, b){
	popup.open(a, 'alert');
}
</script>
<!--{if (($_G['uid'] == $album['uid'] || checkperm('managealbum')) && $album[albumid] > 0) || $space[self]}-->
	<div id="moption" popup="true" class="comiis_manage comiis_bodybg comiis_popup" style="display:none;" comiis_popup="comiis">
		<ul>
			<!--{if $space[self]}-->
			<li><a href="{if $album[albumid] > 0}home.php?mod=spacecp&ac=album&op=edit&albumid=$album[albumid]{else}home.php?mod=spacecp&ac=album&op=editpic&albumid=0{/if}" class="redirect bg_f b_b">{lang edit_album_information}</a></li>
			<li><a href="home.php?mod=spacecp&ac=album&op=editpic&albumid=$album[albumid]" class="redirect bg_f b_b">{lang edit_pic}</a></li>			
			<!--{/if}-->
			<!--{if ($_G['uid'] == $album['uid'] || checkperm('managealbum')) && $album[albumid] > 0}--><li><a href="home.php?mod=spacecp&ac=album&op=delete&albumid=$album[albumid]&uid=$album['uid']&handlekey=delalbumhk_{$album[albumid]}" class="dialog bg_f b_b">{lang delete}{$comiis_lang['album']}</a></li><!--{/if}-->
			<li><a href="javascript:;" class="comiis_glclose mt10 bg_f f_g b_t">{lang cancel}</a></li>
		</ul>
	</div>
<!--{/if}-->
{eval}
$comiis_app_wx_share['title'] = $space[username].$comiis_lang['all44'].'{lang album}&#x300a;'.$album['albumname'].'&#x300b;';
$comiis_app_wx_share['desc'] = $album[depict] ? $album[depict] : ($comiis_lang['view48'].': '.($comiis_app_switch['comiis_sitename'] ? $comiis_app_switch['comiis_sitename'] : $_G['setting']['sitename']));
{/eval}
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->