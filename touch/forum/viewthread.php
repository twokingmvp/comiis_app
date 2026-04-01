<?PHP exit('Access Denied');?>
<!--{if $_G['forum_thread'][isgroup] == 1}-->
<!--{eval $comiis_app_switch['comiis_bbsvtname'] = $comiis_app_switch['comiis_bbsvtname_group'];$comiis_app_switch['comiis_view_header'] = $comiis_app_switch['comiis_groupview_header'];$comiis_app_switch['comiis_view_header_noxx'] = $comiis_app_switch['comiis_groupview_header_noxx'];$comiis_app_switch['comiis_view_bkxx'] = $comiis_app_switch['comiis_groupview_bkxx'];$comiis_app_switch['comiis_view_reply'] = $comiis_app_switch['comiis_view_reply_group'];$comiis_app_switch['comiis_view_rate'] = $comiis_app_switch['comiis_view_rate_group'];$comiis_app_switch['comiis_aimg_show'] = $comiis_app_switch['comiis_aimg_show_group'];$comiis_app_switch['comiis_view_quote'] = $comiis_app_switch['comiis_view_quote_group'];$comiis_app_switch['comiis_recommend_open'] = $comiis_app_switch['comiis_recommend_open_group'];$comiis_app_switch['comiis_recommend'] = $comiis_app_switch['comiis_recommend_group'];$comiis_app_switch['comiis_view_tag'] = $comiis_app_switch['comiis_view_tag_group'];$comiis_app_switch['comiis_view_cnxh'] = $comiis_app_switch['comiis_view_cnxh_group'];$comiis_app_switch['comiis_view_cnxh_style'] = $comiis_app_switch['comiis_view_cnxh_style_group'];$comiis_app_switch['comiis_view_cnxh_name'] = $comiis_app_switch['comiis_view_cnxh_name_group'];$comiis_app_switch['comiis_view_cnxh_num'] = $comiis_app_switch['comiis_view_cnxh_num_group'];$comiis_app_switch['comiis_view_lev'] = $comiis_app_switch['comiis_view_lev_group'];$comiis_app_switch['comiis_view_lev_tit'] = $comiis_app_switch['comiis_view_lev_tit_group'];$comiis_app_switch['comiis_view_gender'] = $comiis_app_switch['comiis_view_gender_group'];$comiis_app_switch['comiis_view_zntit'] = $comiis_app_switch['comiis_groupview_zntit'];}-->
<!--{/if}-->
<!--{eval require_once("./template/comiis_app/comiis/php/comiis_viewthread.php");}-->
<!--{template common/header}-->
<!--{if $threadsort && $comiis_app_switch[comiis_flxx_view] == 1 && $comiis_app_switch[comiis_flxx_view_wz] == 1}-->
	<!--{loop $postlist $post}-->
		<!--{if $post['first'] && $threadsort && $threadsortshow}-->
			<!--{if $threadsortshow['typetemplate']}-->
			<!--{eval comiis_load('N4d5zIuT9huHoUH8od', 'post,thread,filter,threadsortshow,comiis_title_data,comiis_user_data,var,comiis_flxx_color_n');}-->
			<!--{/if}-->        
		<!--{/if}-->
    <!--{/loop}-->
<!--{elseif $comiis_app_switch[comiis_flxx_view] == 5 && $comiis_app_switch[comiis_flxx_view_wz] == 4}-->
	<!--{loop $postlist $post}-->
		<!--{if $post['first'] && $threadsort && $threadsortshow}-->
			<!--{if $threadsortshow['typetemplate']}-->
			<!--{eval comiis_load('RXQLy2Y2liZnnedelT', 'post,thread,filter,threadsortshow,comiis_title_data,comiis_user_data,var,comiis_flxx_color_n');}-->
			<!--{/if}-->
		<!--{/if}-->
    <!--{/loop}-->
<!--{/if}-->
<!--{if $_GET['inajax'] == 1}-->
	<!--{loop $postlist $post}-->
		<!--{if !$post[first]}-->
			<!--{template forum/viewthread_node}-->
		<!--{/if}-->
	<!--{/loop}-->
<!--{else}-->
<!--{hook/viewthread_top_mobile}-->
<script>var replyreload, tid = '{$_G['tid']}', authorid = '{$_G['forum_thread']['authorid']}', formhash = '{FORMHASH}', uid = '{$_G['uid']}', username = '{$_G['member'][username]}', allowrecommend = '{$_G['group']['allowrecommend']}',isgroup = '{if $_G['forum_thread'][isgroup] == 1}1{else}0{/if}';</script>
<script src="./template/comiis_app/comiis/js/comiis_viewthread.js" type="text/javascript"></script>
<form method="post" autocomplete="off" name="modactions" id="modactions">
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<input type="hidden" name="optgroup" />
	<input type="hidden" name="operation" />
	<input type="hidden" name="listextra" value="$_GET[extra]" />
	<input type="hidden" name="page" value="$page" />
</form>
<script>
var fid = parseInt('$_G['fid']'), tid = parseInt('$_G['tid']');
function modthreads(optgroup, operation) {
	var operation = !operation ? '' : operation;
	document.getElementById('modactions').action = 'forum.php?mod=topicadmin&action=moderate&fid=' + fid + '&moderate[]=' + tid + '&handlekey=mods&infloat=yes&nopost=yes' + (optgroup != 3 && optgroup != 2 ? '&from=' + tid : '');
	document.getElementById('modactions').optgroup.value = optgroup;
	document.getElementById('modactions').operation.value = operation;
	var obj = $('#modactions');
	$.ajax({
		type:'POST',
		url:obj.attr('action') + '&inajax=1',
		data:obj.serialize(),
		dataType:'xml'
	})
	.success(function(s) {
		popup.open(s.lastChild.firstChild.nodeValue);
		evalscript(s.lastChild.firstChild.nodeValue);
	})
	.error(function() {
		window.location.href = obj.attr('href');
		popup.close();
	});
}
function modaction(action, pid, extra, mod) {
	if(!action) {
		return;
	}
	var mod = mod ? mod : 'forum.php?mod=topicadmin';
	var extra = !extra ? '' : '&' + extra;
	document.getElementById('modactions').action = mod + '&action='+ action +'&fid=' + fid + '&tid=' + tid + '&handlekey=mods&infloat=yes&nopost=yes' + (!pid ? '' : '&topiclist[]=' + pid) + extra + '&r' + Math.random();
	var obj = $('#modactions');
	$.ajax({
		type:'POST',
		url:obj.attr('action') + '&inajax=1',
		data:obj.serialize(),
		dataType:'xml'
	})
	.success(function(s) {
		popup.open(s.lastChild.firstChild.nodeValue);
		evalscript(s.lastChild.firstChild.nodeValue);
	})
	.error(function() {
		window.location.href = obj.attr('href');
		popup.close();
	});
}
</script>
<!--{if $comiis_app_switch[comiis_flxx_view] == 0 || $comiis_app_switch[comiis_flxx_view_wz] == 0 || !$threadsortshow['typetemplate'] || !$threadsort}-->
    <!--{loop $postlist $post}-->
        <!--{if $post['first']}-->
            <!--{eval comiis_load('Aa32DAGARkKmSmrOSB', 'page,post,thread,filter,comiis_isnotitle');}-->
        <!--{/if}-->
    <!--{/loop}-->
<!--{/if}-->
<div class="comiis_postlist oekqfpr">
	<!--{eval $postcount = 0;$comiis_share_pic = array();$comiis_share_message = '';}-->
	<!--{loop $postlist $post}-->
		<!--{subtemplate forum/viewthread_node}-->
    <!--{/loop}-->
</div>
<div id="post_new" class="comiis_postli"></div>
<div class="comiis_multi_box bg_f b_t{if $comiis_app_switch['comiis_view_cnxh_wz'] == 1} b_b mb10{/if}">
	<!--{if $multipage && ($comiis_app_switch['comiis_bbspage_style'] == 0 || $page > 1)}-->
		{$multipage}
	<!--{elseif $comiis_app_switch['comiis_bbspage_style'] == 1 && $page < $comiis_page}-->
		<a href="javascript:;" onclick="comiis_list_page()" class="comiis_loadbtn bg_e f_d">{$comiis_lang['tip5']}</a>
	<!--{elseif $comiis_app_switch['comiis_bbspage_style'] == 2 && $page < $comiis_page}-->
		<div class="comiis_loadbtn f_d">{$comiis_lang['tip6']}</div>
	<!--{/if}-->
</div>
<!--{if $comiis_app_switch['comiis_bbspage_style'] > 0 && !$_G['inajax'] && $page == 1}-->
<script>
	var comiis_page = $page;
	var comiis_ispage = 0;
	function comiis_list_page(){
		comiis_ispage = 1;
		comiis_page++;
		if(comiis_page <= $comiis_page){
			$('.comiis_multi_box').html('<div class="comiis_loadbtn f_d">{$comiis_lang['tip6']}</div>');
			$.ajax({
				type:'GET',
				url: 'forum.php?mod=viewthread&tid={$_G['tid']}&page=' + comiis_page + '&inajax=1{echo ($_GET['ordertype'] ? '&ordertype='.$_GET['ordertype'] : '').($_GET['authorid'] ? '&authorid='.$_GET['authorid'] : '');}' ,
				dataType:'xml',
			}).success(function(s) {		
				if(typeof(s.lastChild.firstChild.nodeValue) != "undefined"){
					$('.comiis_postlist').append(s.lastChild.firstChild.nodeValue);
					if(comiis_page >= $comiis_page){
						$('.comiis_multi_box').html('<div class="comiis_loadbtn f_d">{$comiis_lang['tip31']}</div>');
					}else{
						$('.comiis_multi_box').html('<a href="javascript:;" onclick="comiis_list_page()" class="comiis_loadbtn bg_e f_d">{$comiis_lang['tip5']}</a>');
					}
					popup.init();
				}else{
					comiis_page--;
					$('.comiis_multi_box').html('<a href="javascript:;" onclick="comiis_list_page()" class="comiis_loadbtn bg_e f_d">{$comiis_lang['tip32']}</a>');
				}
				comiis_ispage = 0;
			}).error(function() {
				comiis_page--;
				$('.comiis_multi_box').html('<a href="javascript:;" onclick="comiis_list_page()" class="comiis_loadbtn bg_e f_d">{$comiis_lang['tip32']}</a>');
				comiis_ispage = 0;
			});
		}
	}
	<!--{if $comiis_app_switch['comiis_bbspage_style'] == 2}-->
	var comiis_page_timer;
	$(window).scroll(function(){
		clearTimeout(comiis_page_timer);
		comiis_page_timer = setTimeout(function() {
			var comiis_scroll_bottom = $(window).scrollTop() + window.innerHeight;
			var comiis_list_bottom = $('.comiis_postlist').height() + $('.comiis_postlist').offset().top - 1000;
			if(comiis_scroll_bottom >= comiis_list_bottom && comiis_ispage == 0){
				comiis_list_page();
			}	
		}, 100);
	});
	<!--{/if}-->
</script>
<!--{/if}-->
<!--{if $comiis_relateitem && $comiis_app_switch['comiis_view_cnxh'] == 1 && $comiis_app_switch['comiis_view_cnxh_wz'] == 1}-->
    <!--{eval $post['relateitem'] = $comiis_relateitem;}-->
    <!--{subtemplate forum/comiis_view_cnxh}-->  
<!--{/if}-->
<!--{hook/viewthread_bottom_mobile}-->
<div id="comiis_followmod" style="display:none;">
<div class="comiis_tip bg_f cl">
	<dt class="f_b">
		<p>{$comiis_lang['all10']}?</p>
	</dt>	
	<dd class="b_t cl">		
        <!--{if $comiis_app_switch['comiis_post_btnwz'] == 1}-->
            <a href="javascript:popup.close();" class="tip_btn bg_f f_b">{$comiis_lang['all9']}</a>
            <a href="javascript:comiis_followmod();" class="tip_btn bg_f f_0"><span class="tip_lx">{$comiis_lang['all8']}</span></a>
        <!--{else}-->
            <a href="javascript:comiis_followmod();" class="tip_btn bg_f f_0">{$comiis_lang['all8']}</a>
            <a href="javascript:popup.close();" class="tip_btn bg_f f_b"><span class="tip_lx">{$comiis_lang['all9']}</span></a>
        <!--{/if}-->
	</dd>
</div>
</div>
</div>
<div class="comiis_fastpostbox comiis_showleftbox bg_e">
<!--{subtemplate forum/forumdisplay_fastpost}-->
</div>
<script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>
<div id="comiis_foot_more" class="comiis_share_box comiis_bodybg" style="display: block;">
	<!--{if !$_G['comiis_isapp']}-->
	<div id="comiis_foot_fxbtn" class="bdsharebuttonbox"><ul id="comiis_share" class="comiis_shareul swiper-wrapper"></ul></div>
	<!--{/if}-->
    <div id="comiis_foot_gobtn" class="b_t cl">
        <ul class="comiis_shareul swiper-wrapper">
        <li class="swiper-slide kmfanhui"><a href="forum.php?mod=forumdisplay&fid={$_G['forum']['fid']}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe657</i></span><em class="f_b">{$comiis_lang['tip344']}{$comiis_lang['view63']}</em></a></li>
        <!--{if $_G['cache']['plugin']['comiis_poster']['showstyle'] > 1}-->
          <li class="swiper-slide kmfatie"><a href="javascript:show_comiis_poster();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe663;</i></span><em class="f_b">{$_G['cache']['plugin']['comiis_poster']['name']}</em></a></li>
        <!--{/if}-->
        <!--{if $_G['comiis_isapp']}-->
          <li class="swiper-slide kmfatie"><a href="javascript:comiis_user_share();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe6eb;</i></span><em class="f_b">{$comiis_lang['all1']}</em></a></li>
        <!--{/if}-->
        <!--{loop $postlist $posts}-->
          <!--{if $posts['first']}-->
            <!--{if $posts['invisible'] == 0 && $comiis_app_switch['comiis_view_dianping_lz'] != 1}-->
                <!--{if $allowpostreply && $posts['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])}--><li class="swiper-slide kmdianping"><a href="forum.php?mod=misc&action=comment&tid=$posts['tid']&pid=$posts[pid]&extra=$_GET[extra]&page=$page{if $_G['forum_thread']['special'] == 127}&special=$specialextra{/if}&mobile=2" class="dialog"><span class="kmico bg_f f_c"><i class="comiis_font">&#x{if $comiis_app_switch['comiis_view_dianping_lzico']}{$comiis_app_switch['comiis_view_dianping_lzico']}{else}e6a0{/if};</i></span><em class="f_b">{if $comiis_app_switch['comiis_view_dianping_lzname']}{$comiis_app_switch['comiis_view_dianping_lzname']}{else}{$comiis_lang['comments']}{/if}</em></a></li>
                <!--{/if}-->							
            <!--{/if}-->
            <!--{if $_G['setting']['magicstatus'] && $comiis_app_switch['comiis_view_magic'] != 1}-->
                <li class="swiper-slide kmdaoju"><a href="#mgc_post_$posts[pid]" class="{if !$_G['uid']} comiis_openrebox{else} popup{/if}"><span class="kmico bg_f f_c"><i class="comiis_font">&#x{if $comiis_app_switch['comiis_view_magic_ico']}{$comiis_app_switch['comiis_view_magic_ico']}{else}e68e{/if}</i></span><em class="f_b">{if $comiis_app_switch['comiis_view_magic_name']}{$comiis_app_switch['comiis_view_magic_name']}{else}{$comiis_lang['tip354']}{/if}</em></a></li>
            <!--{/if}-->                
            <!--{if $_G['uid']}--><li class="swiper-slide kmfatie"><a href="forum.php?mod=post&action=newthread&fid=$_G['fid']"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe655;</i></span><em class="f_b"><!--{if $_G['forum_thread'][isgroup] == 1}-->{$comiis_group_lang['027']}<!--{else}-->{$comiis_lang['tip240']}<!--{/if}--></em></a></li><!--{/if}-->                        
            <li class="swiper-slide kmfuzhi"><a href="javascript:;" onclick="comiis_mob_copyurl_key()" id="comiis_mob_copy_btn" data-clipboard-text="{$_G['siteurl']}forum.php?mod=viewthread&tid=$_G['tid']$fromuid"{if $fromuid} title="{lang share_url_copy_comment}"{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe717;</i></span><em class="f_b">{lang share_url_copy}</em></a></li>                
            <li class="swiper-slide kmjubao"><a href="{if $_G['uid']}misc.php?mod=report&url={$_G[currenturl_encode]}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe636;</i></span><em class="f_b">{$comiis_lang['all2']}</em></a></li>	
          <!--{/if}-->
        <!--{/loop}-->		
        </ul>
    </div>
	<script>
		<!--{if !$_G['comiis_isapp']}-->
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
		<!--{/if}-->
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
    var share_obj = new nativeShare('comiis_share', {
        img:'{if $comiis_share_pic['attachment']}{$_G['siteurl']}{$comiis_share_pic['url']}{$comiis_share_pic['attachment']}{/if}',
        url:'{$_G['siteurl']}forum.php?mod=viewthread&tid={$_G['tid']}',
        title:$('#comiis_wx_title_box').html(),
        desc:'{$comiis_share_message}',
        from:'{$_G['setting']['bbname']}'
    });
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
    function comiis_postre() {
        comiis_prevent_post('#fastpostsubmit_btn', 1);
        $.ajax({
            type:'POST',
            url:$('#postforms').attr('action') + '&handlekey=fastposts&loc=1&inajax=1',
            data:$('#postforms').serialize(),
            dataType:'xml'
        })
        .success(function(s) {
            evalscript(s.lastChild.firstChild.nodeValue);
        })
        .error(function() {
            window.location.href = obj.attr('action');
            popup.close();
        });
        return false;
    }
    function succeedhandle_fastposts(locationhref, message, param) {
        var pid = param['pid'];
        var tid = param['tid'];
        if(pid) {
            $.ajax({
                type:'POST',
                url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
                dataType:'xml'
            })
            .success(function(s) {
                $('.comiis_notip').css('display', 'none');
                $('#post_new').append(s.lastChild.firstChild.nodeValue);
                popup.open('{$comiis_lang['view9']}', 'alert');
                popup.init();
                comiis_prevent_post('#fastpostsubmit_btn', 0);
                if(replyreload) {
                    var reloadpids = replyreload.split(',');
                    $.ajax({
                        type:'POST',
                        url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + reloadpids[i] + '&mobile=2',
                        dataType:'xml'
                    })
                    .success(function(s) {
                        if(s.lastChild.firstChild.nodeValue.indexOf('id="pid') > 0){
                            var repidss = s.lastChild.firstChild.nodeValue.match(/id="pid(\S*)">/)[1];
                            $('#pid' + repidss)[0].innerHTML = s.lastChild.firstChild.nodeValue;
                        }
                    });	
                }
            })
            .error(function() {
                window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
                popup.close();
            });
        } else {
            if(!message) {
                message = '{lang postreplyneedmod}';
            }
            popup.open(message, 'alert');
            comiis_prevent_post('#fastpostsubmit_btn', 0);
        }
    }
    function errorhandle_fastposts(message, param) {
        popup.open(message, 'alert');
        $('#fastpostsubmit_btn').attr("disabled", false);
    }
</script>
<!--{/if}-->
<!--{if $comiis_app_switch[comiis_vfoot_gohome] == 1 && $comiis_is_new_url == 1}--><!--{$comiis_app_switch[comiis_vfoot_gohomedm]}--><!--{/if}-->
{eval $comiis_app_wx_share['desc'] = $comiis_share_message;}
{eval $comiis_app_wx_share['title'] = $_G['forum_thread'][subject];}
<!--{template common/footer}-->