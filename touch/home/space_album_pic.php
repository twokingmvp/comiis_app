<?PHP exit('Access Denied');?>
<!--{if $_GET['pic'] != 'yes'}-->
	<!--{template home/comiis_album}-->
<!--{else}-->
	<!--{eval $_G['home_tpl_titles'] = array(getstr($pic['title'], 60, 0, 0, 0, -1), $album['albumname'], '{lang album}');}-->
	<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->
	<!--{template common/header}-->
	<style>.comiis_footer_scroll {bottom:100px;}</style>
	<div class="comiis_album_view">
		<div class="comiis_album_pic">
			<img src="$pic[pic]" class="vm" />
			<div style="display:none;">
			<a href="home.php?mod=space&uid=$pic['uid']&do=$do&picid=$upid&pic=yes&goto=up#pic_block" class="kmprev">{lang previous_pic}</a>
			<a href="home.php?mod=space&uid=$pic['uid']&do=$do&picid=$nextid&pic=yes&goto=down#pic_block" class="kmnext">{lang next_pic}</a>
			<!--{if $album[picnum]}--><span class="f_f">$sequence - $album[picnum]</span><!--{/if}-->
			</div>
		</div>
		<h2><!--{if $pic[hot]}--><span class="f_a">{lang hot} $pic[hot]</span><!--{/if}--><em id="comiis_pic_title"><!--{if $pic[title]}-->$pic[title]<!--{else}--><!--{eval echo substr($pic['filename'], 0, strrpos($pic['filename'], '.'));}--><!--{/if}--></em><!--{if $pic[status] == 1}--> <span class="f_a">({lang moderate_need})</span><!--{/if}--></h2>
		<p class="f_c">
            <!--{if ($comiis_isweixin == 1 && ($_G['uid'] == $pic['uid'] || checkperm('managealbum'))) || $comiis_app_switch['comiis_leftnv'] == 1}-->
                <span href="#moption" class="popup f_g comiis_xifont comiis_edit_rico"><i class="comiis_font">&#xe655;</i>{$comiis_lang['edit']}</span>
            <!--{/if}-->
            <!--{if $do=='event'}--><a href="home.php?mod=space&uid=$pic['uid']" class="f_0">$pic[username]</a><!--{/if}--> {lang upload_at} <!--{date($pic['dateline'])}--> ($pic[size])
		</p>
	</div>
	<div class="comiis_wztit b_0 f_0 cl"><h2><i class="comiis_font">&#xe607;</i> {lang comment}</h2></div>
		<div class="comiis_plli cl">
		<!--{loop $list $k $value}-->
			<!--{template home/space_comment_li}-->
		<!--{/loop}-->
		</div>
	<!--{if !$list}-->
		<div class="comiis_notip cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
			<span class="f_d">{$comiis_lang['all6']}, {$comiis_lang['all7']}</span>
		</div>	
	<!--{/if}-->
	<!--{if $multi}-->$multi<!--{/if}-->
	<!--{eval comiis_load('Adz2lsPb2dccMClvpF', 'picid,theurl,secqaacheck,seccodecheck,article');}-->
	<!--{if $_G['uid'] == $pic['uid'] || checkperm('managealbum')}-->
	<div id="moption" popup="true" class="comiis_manage comiis_bodybg comiis_popup" style="display:none;" comiis_popup="comiis">
		<ul>
			<li><a href="home.php?mod=spacecp&ac=album&picid=$pic[picid]&op=edithot&handlekey=picedithothk_{$pic[picid]}" class="dialog bg_f b_b">{lang hot}</a></li>
			<li><a href="home.php?mod=spacecp&ac=album&op=editpic&albumid=$pic[albumid]&picid=$pic[picid]" class="redirect bg_f b_b">{lang manage_pic}</a></li>
			<li><a href="home.php?mod=spacecp&ac=album&op=edittitle&albumid=$pic[albumid]&picid=$pic[picid]&handlekey=edittitlehk_{$pic[picid]}" class="dialog bg_f b_b">{lang edit_description}</a></li>
			<li><a href="javascript:;" class="comiis_glclose mt10 bg_f f_g b_t">{lang cancel}</a></li>
		</ul>
	</div>
	<!--{/if}-->
    <!--{eval}-->
        if($_G['uid']){
            $comiis_thead_fav = C::t('home_favorite')->fetch_by_id_idtype($album[albumid], 'albumid', $_G['uid']);
        }else{
            $comiis_thead_fav = array();
        }
    <!--{/eval}-->
    <script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>    
    <div id="comiis_foot_more" class="comiis_share_box comiis_bodybg" style="display: block;">
				<!--{if !$_G['comiis_isapp']}-->
        <div id="comiis_foot_fxbtn" class="bdsharebuttonbox"><ul id="comiis_share" class="comiis_shareul swiper-wrapper"></ul></div>
				<!--{/if}-->
        <div id="comiis_foot_gobtn" class="b_t cl">
            <ul class="comiis_shareul swiper-wrapper">
                <li class="swiper-slide kmfanhui"><a href="home.php?mod=space&uid=$space['uid']&do=album&id=$pic[albumid]"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe657</i></span><em class="f_b">{$comiis_lang['all29']}</em></a></li>
			<!--{if $_G['cache']['plugin']['comiis_poster']['showstyle'] > 1}-->
				<li class="swiper-slide kmfatie"><a href="javascript:show_comiis_poster();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe663</i></span><em class="f_b">{$_G['cache']['plugin']['comiis_poster']['name']}</em></a></li>
			<!--{/if}-->
			<!--{if $_G['comiis_isapp']}-->
				<li class="swiper-slide kmfatie"><a href="javascript:comiis_user_share();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe6eb</i></span><em class="f_b">{$comiis_lang['all1']}</em></a></li>
			<!--{/if}-->
                <li class="swiper-slide kmchakan"><a href="$pic[pic]" target="_blank"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe627</i></span><em class="f_b">{lang look_pic}</em></a></li>
                <li class="swiper-slide kmshoucang"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=favorite&type=album&id=$pic['albumid']&handlekey=favorite_thread{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog" comiis="handle"{/if} id="comiis_favorite_a">{if $comiis_thead_fav['favid']}<span class="kmico bg_f f_a"><i class="comiis_font">&#xe64c</i></span><em class="f_b">{$comiis_lang['tip390']}{lang favorite}</em>{else}<span class="kmico bg_f f_c"><i class="comiis_font">&#xe617</i></span><em class="f_b">{lang favorite}{lang album}</em>{/if}</a></li>
                <li class="swiper-slide kmfabu"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=upload{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe642</i></span><em class="f_b">{lang publish}{lang album}</em></a></li>
                <li class="swiper-slide kmfuzhi"><a href="javascript:;" onclick="comiis_mob_copyurl_key()" id="comiis_mob_copy_btn" data-clipboard-text="{$_G['siteurl']}home.php?mod=space&uid={$album['uid']}&do=album&picid={$pic['picid']}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe717</i></span><em class="f_b">{$comiis_lang['tip385']}</em></a></li>
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
    </script>
	<!--{eval $comiis_foot = 'no';}-->
	<!--{template common/footer}-->
<!--{/if}-->