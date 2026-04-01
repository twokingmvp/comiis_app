<?PHP exit('Access Denied');?>
<!--{if $_GET['inajax']}-->
	<!--{template common/header_ajax}-->
<!--{else}-->
<!--{if $action != 'create' && $action != 'memberlist' && $action != 'manage'}-->
	<!--{eval $_G['comiis_close_header'] = 1;}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{if $action != 'create' && $action != 'memberlist' && $action != 'manage'}-->
	<div class="comiis_bigtop_box{if $comiis_app_switch['comiis_group_listhead'] == 3} comiis_group_listhead3 bg_f{/if}{if $comiis_app_switch['comiis_group_listhead'] == 0 || $comiis_app_switch['comiis_group_listhead'] == 1 || $comiis_app_switch['comiis_group_listhead'] == 4} comiis_tbeijing{/if}"{if $comiis_app_switch['comiis_group_listhead'] == 0 || $comiis_app_switch['comiis_group_listhead'] == 1 || $comiis_app_switch['comiis_group_listhead'] == 4} style="background-image:url({if $_G[forum][banner]}$_G[forum][banner]?{echo time();}{else}template/comiis_app/comiis/img/group_bg.jpg{/if}) !important;background-repeat:no-repeat;background-position:center;background-size:cover !important;"{/if}>
		<!--{if $comiis_app_switch['comiis_group_listhead'] == 4}--><div class="comiis_group_listhead4 cl"><!--{/if}-->
		<!--{if $comiis_app_switch['comiis_group_listhead'] == 3}-->
		<div class="comiis_groupheader" style="background-image:url({if $_G[forum][banner]}$_G[forum][banner]?{echo time();}{else}template/comiis_app/comiis/img/group_bg.jpg{/if}) !important;background-repeat:no-repeat;background-position:center;background-size:cover !important;"><!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_header_show'] !=0 && $comiis_app_switch['comiis_header_show'] !=1}--><div class="comiis_wxr_tcico cl"><a href="javascript:;" class="comiis_share_key kmico f_f"><i class="comiis_font">&#xe6db;</i></a></div><!--{/if}--></div>
		<!--{/if}-->
		<div id="comiis_head"{if $comiis_isweixin == 1} class="comiis_head_hidden"{/if}>
			<div class="{if $comiis_app_switch['comiis_group_listhead'] == 2}comiis_head{else}comiis_tmhead comiis_space_head{/if}{if $comiis_app_switch['comiis_group_listhead'] == 2} f_top{else} f_f{/if} cl">
				<div class="header_z"><a href="javascript:;" onclick="history.go(-1);"><i class="comiis_font">&#xe60d;</i></a></div>
				<h2>$_G[forum][name]</h2>
				<div class="header_y"><!--{if $comiis_app_switch['comiis_leftnv'] == 1}--><a href="javascript:;" class="comiis_leftnv_top_key"><i class="comiis_font">&#xe666;</i></a><!--{/if}--><a href="javascript:;" class="comiis_share_key"><i class="comiis_font">&#xe62b;</i></a><!--{if $comiis_app_switch['comiis_leftnv'] != 1}--><a href="search.php?mod=group"><i class="comiis_font">&#xe622;</i></a><!--{/if}--></div>
			</div>
		</div>
		<!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_group_listhead'] != 2 && $comiis_app_switch['comiis_group_listhead'] != 3 && $comiis_app_switch['comiis_header_show'] !=0 && $comiis_app_switch['comiis_header_show'] !=1}--><div class="comiis_wxr_tcico cl"><a href="javascript:;" class="comiis_share_key kmico f_f"><i class="comiis_font">&#xe6db;</i></a></div><!--{/if}-->
		<!--{if  $comiis_app_switch['comiis_group_listhead'] !=3 && ($comiis_isweixin != 1 || $comiis_app_switch['comiis_header_show'] ==0 || $comiis_app_switch['comiis_header_show'] ==1)}-->
		<div style="height:48px;"></div>
		<!--{/if}-->
		<!--{if $comiis_app_switch['comiis_group_listhead'] == 1}-->
            <div class="comiis_forumlist_heads comiis_forumlist_headv3{if $comiis_app_switch['comiis_svg'] == 1} comiis_svg_no{/if} cl">	
                <!--{if $status != 2 && $status != 3 && $status != 5}-->
                    <!--{if helper_access::check_module('group') && $status != 'isgroupuser'}-->
                        <a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}comiis_join_group {/if}comiis_sendbtn outbg f_f fyy">+ {$comiis_lang['view18']}</a>
                    <!--{/if}-->
                <!--{/if}-->
                <!--{if $status == 2 && helper_access::check_module('group')}-->
                    <a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}comiis_join_group {/if}comiis_sendbtn outbg f_f fyy">+ {$comiis_lang['view18']}</a>
                <!--{/if}-->
                <!--{if $status == 'isgroupuser'}-->
                    <button type="button" onclick="popup.open($('#comiis_group_out'))" class="comiis_sendbtn outbg f_f fyy"><i class="comiis_font">&#xe61c</i> {$comiis_group_lang['013']}</button>
                <!--{/if}-->
                <!--{if $status == 3 || $status == 5}--><button class="comiis_sendbtn outbg f_f fyy">{$comiis_lang['tip21']}</button><!--{/if}-->
                <div class="top_left f_f">
                    <div class="top_ico bg_f"><!--{if $_G[forum][icon]}--><img src="$_G[forum][icon]" alt="$_G[forum][name]"class="vm" /><!--{else}--><span class="bg_b f_d"><i class="comiis_font">&#xe627;</i>nopic</span><!--{/if}--></div>
                    <h2 class="fyy">$_G[forum][name]</h2>		
                    <p class="fyy">{lang member}$_G[forum][membernum]<span class="comiis_tm">&nbsp;&nbsp;/&nbsp;&nbsp;</span>{$comiis_group_lang['014']}$_G[forum][posts]<span class="comiis_tm">&nbsp;&nbsp;/&nbsp;&nbsp;</span>{lang group_member_rank}$groupcache[ranking][data][today]</p>
                </div>
                <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
            </div>
        <!--{elseif $comiis_app_switch['comiis_group_listhead'] == 2}-->
            <div class="comiis_forumlist_head bg_f{if !$_G[forum][banner] && !$_G['forum']['description']} b_b{/if} cl">
                <div class="top_show"><a href="javascript:;" onclick="comiis_group_des_showhide()" id="comiis_group_des_showhide"><i class="comiis_font f_d">&#xe621</i></a></div>
                <div class="top_btn"{if $comiis_isweixin == 1} style="width:auto"{/if}>
                    <!--{if $status != 2 && $status != 3 && $status != 5}-->
                        <!--{if helper_access::check_module('group') && $status != 'isgroupuser'}-->
                            <a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}comiis_join_group {/if}bg_c f_f comiis_forum_fav z">+ {$comiis_lang['view18']}</a>
                        <!--{/if}-->
                    <!--{/if}-->
                    <!--{if $status == 2 && helper_access::check_module('group')}-->
                        <a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}comiis_join_group {/if}bg_c f_f comiis_forum_fav z">+ {$comiis_lang['view18']}</a>
                    <!--{/if}-->
                    <!--{if $status == 'isgroupuser'}-->
                        <a href="javascript:;" onclick="popup.open($('#comiis_group_out'))" class="bg_b f_d comiis_forum_fav z"><i class="comiis_font">&#xe61c</i> {$comiis_group_lang['013']}</a>
                    <!--{/if}-->
                    <!--{if $comiis_isweixin == 1}-->
                    <a href="javascript:;" class="comiis_share_key bg_b f_d z" style="width:auto;padding:0 8px;margin-left:5px"><i class="comiis_font" style="margin-right:0;font-size:16px">&#xe62b</i></a>
                    <!--{/if}-->
                    <!--{if $status == 3 || $status == 5}--><a href="javascript:;" class="bg_b f_d comiis_forum_fav z">{$comiis_lang['tip21']}</a><!--{/if}-->
                </div>
                <div class="top_left"{if $comiis_isweixin == 1} style="margin-right:130px"{/if}>
                    <div class="top_ico"><!--{if $_G[forum][icon]}--><img src="$_G[forum][icon]" alt="$_G[forum][name]" class="vm" /><!--{else}--><span class="bg_b f_d"><i class="comiis_font">&#xe627;</i>nopic</span><!--{/if}--></div>
                    <h2 class="f_ok">$_G[forum][name]</h2>
                    <p class="f_c">{lang member}$_G[forum][membernum]<span class="comiis_tm">&nbsp;&nbsp;/&nbsp;&nbsp;</span>{$comiis_group_lang['014']}$_G[forum][posts]<span class="comiis_tm">&nbsp;&nbsp;/&nbsp;&nbsp;</span>{lang group_member_rank}$groupcache[ranking][data][today]</p>
                </div>
            </div>
            <!--{if $_G[forum][banner] || $_G['forum']['description']}-->
				<div class="comiis_group_des_box">
					<div class="comiis_group_des bg_f b_b f_b cl">
						<div class="comiis_group_img"><img src="<!--{if $_G[forum][banner]}-->$_G[forum][banner]?{echo time();}<!--{else}-->template/comiis_app/comiis/img/group_bg1.jpg<!--{/if}-->" alt="$_G[forum][name]" class="vm" /></div>
						<!--{if $_G['forum']['description']}-->$_G['forum']['description']<!--{/if}-->
					</div>
                </div>
            <!--{/if}-->
            <script>
            function comiis_group_des_showhide(){
				$('#comiis_group_des_showhide i').html($('.comiis_group_des_box').is(':hidden') ? '&#xe621;' : '&#xe620;');
				$('.comiis_group_des_box').slideToggle(400);
            }
            </script>
		<!--{elseif $comiis_app_switch['comiis_group_listhead'] == 3}-->
            <div class="comiis_bigtop_info">
                <div class="bigtop_ico"><img {if $comiis_app_switch['comiis_loadimg']}src="./template/comiis_app/pic/none.png" comiis_loadimages={else}src={/if}"$_G[forum][icon]" alt="$_G[forum][name]"{if $comiis_app_switch['comiis_loadimg']} class="comiis_loadimages"{/if} /></div>
                <h2>#{$_G[forum][name]}#</h2>
                <!--{if $status == 3 || $status == 5}--><p class="bigtop_txt f_a">{lang group_has_joined}</p><!--{/if}-->
				<div class="comiis_forum_tj cl">
					<ul{if $comiis_app_switch['comiis_grouplist_user'] != 1} class="kmzrtj"{/if}>
						<!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}-->
						<li class="b_r"><em>$_G[forum][membernum]</em><span class="f_d">{$comiis_group_lang['015']}</span></li>
						<!--{/if}-->
						<li class="b_r"><em>$_G[forum][posts]</em><span class="f_d">{$comiis_group_lang['014']}</span></li>
						<li class="b_r"><em>$_G[forum][commoncredits]</em><span class="f_d">{lang credits}</span></li>
						<li><em>$groupcache[ranking][data][today]</em><span class="f_d">{lang group_member_rank}</span></li>
					</ul>
				</div>
				<!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}-->
				<a href="forum.php?mod=group&action=memberlist&fid=$_G['fid']" class="bigtop_tximg bg_e">
					<!--{eval $group_username = array_slice($groupmanagers, 0);$groupcache = getgroupcache($_G['fid'], array('activityuser'), 604800);$activityuserlist = array_slice($groupcache['activityuser']['data'], 0, 4);}-->
					<div class="kmqz b_r"><span class="kmimg bg_f"><img src="{echo avatar($group_username[0]['uid'],middle,true)}?{echo time();}"></span><span class="kmtit">$group_username[0]['username']</span><em class="f_c">{$comiis_group_lang['022']}</em></div>			
					<div class="kmcyimg">						
						<div class="rurl f_c">{$comiis_group_lang['023']}{$comiis_group_lang['015']}<i class="comiis_font f_d">&#xe60c</i></div>
						<ul class="y">
						<!--{loop $activityuserlist $user}-->
						<li class="bg_f"><img src="{echo avatar($user['uid'],middle,true)}?{echo time();}" class="vm"></li>
						<!--{/loop}-->
						</ul>
					</div>
				</a>			
				<!--{/if}-->   
				<!--{if $_G['forum']['description']}-->             
				<div class="bigtop_kmtxt">$_G['forum']['description']</div>
                <!--{/if}-->
            </div>
       <!--{elseif $comiis_app_switch['comiis_group_listhead'] == 4}-->
            <div class="comiis_kmtop_info f_f">
                <h2><i class="comiis_font">&#xe75f</i> $_G[forum][name]</h2>
                <p class="kmtop_tj"><!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}--><em>$_G[forum][membernum]</em><span>{$comiis_group_lang['015']}</span><!--{/if}--><em>$_G[forum][posts]</em><span>{$comiis_group_lang['014']}</span><em>$_G[forum][commoncredits]</em><span>{lang credits}</span><em>$groupcache[ranking][data][today]</em><span>{lang group_member_rank}</span></p>
                <!--{if $status == 3 || $status == 5}--><p class="kmtop_txt">{lang group_has_joined}</p><!--{/if}-->
				<!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}-->
				<a href="forum.php?mod=group&action=memberlist&fid=$_G['fid']" class="kmtop_tximg"{if $_G['forum']['description']} style="margin-bottom:25px"{/if}>
					<!--{eval $group_username = array_slice($groupmanagers, 0);$groupcache = getgroupcache($_G['fid'], array('activityuser'), 604800);$activityuserlist = array_slice($groupcache['activityuser']['data'], 0, 5);}-->
					<div class="kmqz"><span><img src="{echo avatar($group_username[0]['uid'],middle,true)}?{echo time();}"></span>$group_username[0]['username']</div>			
					<div class="kmcyimg">						
						<div class="rurl">{$comiis_group_lang['023']}{$comiis_group_lang['015']}<i class="comiis_font comiis_tm">&#xe60c</i></div>
						<ul class="y">
						<!--{loop $activityuserlist $user}-->
						<li><img src="{echo avatar($user['uid'],middle,true)}?{echo time();}" class="vm"></li>
						<!--{/loop}-->
						</ul>
					</div>
				</a>			
				<!--{/if}-->   
            </div>
            <!--{if $_G['forum']['description']}--><div class="comiis_kmtop_foot_bg bg_f"></div><!--{/if}-->
        </div>
        <!--{else}-->
            <div class="comiis_bigtop_info f_f">
                <div class="bigtop_ico"><img {if $comiis_app_switch['comiis_loadimg']}src="./template/comiis_app/pic/none.png" comiis_loadimages={else}src={/if}"$_G[forum][icon]" alt="$_G[forum][name]"{if $comiis_app_switch['comiis_loadimg']} class="comiis_loadimages"{/if} /></div>
                <h2 class="fyy">$_G[forum][name]</h2>
                <p class="bigtop_txt fyy"><!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}-->{$comiis_group_lang['015']}$_G[forum][membernum]<span class="comiis_tm">/</span><!--{/if}-->{$comiis_group_lang['014']}$_G[forum][posts]<span class="comiis_tm">/</span>{lang group_member_rank}$groupcache[ranking][data][today]</p>
                <!--{if $status == 3 || $status == 5}--><p class="bigtop_txt fyy">{lang group_has_joined}</p><!--{/if}-->
                <p class="bigtop_btn">
                  <!--{if $status != 2 && $status != 3 && $status != 5}-->
                    <!--{if helper_access::check_module('group') && $status != 'isgroupuser'}-->
                      <button type="button" href='forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle' class="comiis_join_group comiis_sendbtn outbg f_f fyy" comiis='handle'>{$comiis_lang['view18']}{$comiis_group_lang['001']}</button>
                    <!--{/if}-->
                  <!--{/if}-->
                <!--{if $status == 2 && helper_access::check_module('group')}-->
                     <button type="button" href='forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle' class="comiis_join_group comiis_sendbtn outbg f_f fyy" comiis='handle'>{$comiis_lang['view18']}{$comiis_group_lang['001']}</button>
                <!--{/if}-->
                  <!--{if $status == 'isgroupuser'}--><button type="button" onclick="popup.open($('#comiis_group_out'))" class="comiis_sendbtn outbg f_f fyy">{$comiis_group_lang['013']}{$comiis_group_lang['001']}</button><!--{/if}-->
                </p>
            </div>
            <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
        <!--{/if}-->
	</div>
	<!--{if $_G['forum']['description'] && $comiis_app_switch['comiis_group_listhead'] == 4}-->		
		<div class="comiis_kmtop_foot_txt bg_f b_b mb10 cl">$_G['forum']['description']</div>
	<!--{/if}-->
    <script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>
    <div id="comiis_foot_more" class="comiis_share_box comiis_bodybg" style="display: block;">
    	<!--{if !$_G['comiis_isapp']}-->
        <div id="comiis_foot_fxbtn" class="bdsharebuttonbox"><ul id="comiis_share" class="comiis_shareul swiper-wrapper"></ul></div>
     	<!--{/if}-->     	
        <div id="comiis_foot_gobtn" class="b_t cl">
            <ul class="comiis_shareul swiper-wrapper">
			<!--{if $_G['cache']['plugin']['comiis_poster']['showstyle'] > 1}-->
				<li class="swiper-slide kmfatie"><a href="javascript:show_comiis_poster();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe663</i></span><em class="f_b">{$_G['cache']['plugin']['comiis_poster']['name']}</em></a></li>
			<!--{/if}-->
			<!--{if $_G['comiis_isapp']}-->
				<li class="swiper-slide kmfatie"><a href="javascript:comiis_user_share();"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe6eb</i></span><em class="f_b">{$comiis_lang['all1']}</em></a></li>
			<!--{/if}-->
			<!--{if $_G['forum']['ismoderator']}-->
				<li class="swiper-slide kmguanli"><a href="forum.php?mod=group&action=manage&fid=$_G['fid']"><span class="kmico bg_f f_a"><i class="comiis_font">&#xe612</i></span><em class="f_b">{$comiis_group_lang['007']}{$comiis_group_lang['001']}</em></a></li>
			<!--{/if}-->
			<!--{if $status != 2 && $status != 3 && $status != 5}-->
			<!--{if helper_access::check_module('group') && $status != 'isgroupuser'}-->
				<li class="swiper-slide kmjiaru"><a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="comiis_join_group" comiis='handle'{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe8bc</i></span><em class="f_b">{$comiis_lang['view18']}{$comiis_group_lang['001']}</em></a></li>
			<!--{/if}-->
			<!--{/if}-->				
			<!--{if $status == 2 && helper_access::check_module('group')}-->
				<li class="swiper-slide kmjiaru"><a href="{if $_G['uid']}forum.php?mod=group&action=join&fid=$_G['fid']&handlekey=comiis_group_handle{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="comiis_join_group" comiis='handle'{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe8bc</i></span><em class="f_b">{$comiis_lang['view18']}{$comiis_group_lang['001']}</em></a></li>
			<!--{/if}-->
			<!--{if $status == 'isgroupuser'}-->
				<li class="swiper-slide kmtuichu"><a href="javascript:;" onclick="popup.open($('#comiis_group_out'))"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe75e</i></span><em class="f_b">{$comiis_group_lang['013']}{$comiis_group_lang['001']}</em></a></li>
			<!--{/if}-->
            <!--{if $comiis_app_switch['comiis_group_listhead'] != 0 && $comiis_app_switch['comiis_group_listhead'] != 1}-->
                <li class="swiper-slide kmfabu"><a href="{if $_G['uid']}forum.php?mod=post&action=newthread&fid=$_G['fid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe655</i></span><em class="f_b">{$comiis_lang['post24']}{$comiis_group_lang['001']}</em></a></li>
            <!--{/if}-->
                <li class="swiper-slide kmshoucang"><a href="{if $_G['uid']}home.php?mod=spacecp&ac=favorite&type=group&id={$_G[forum]['fid']}&formhash={FORMHASH}&handlekey=forum_fav{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" class="{if $_G['uid']}dialog{/if} b_b" comiis="handle"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe617</i></span><em class="f_b">{lang favorite}{$comiis_group_lang['001']}</em></a></li>                
			<!--{if $comiis_app_switch['comiis_grouplist_user'] != 1}-->
			<li class="swiper-slide kmchengyuan"><a href="forum.php?mod=group&action=memberlist&fid=$_G['fid']"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe629</i></span><em class="f_b">{$comiis_group_lang['001']}{$comiis_group_lang['015']}</em></a></li>
			<!--{/if}-->
			<!--{if $status == 'isgroupuser' && helper_access::check_module('group')}-->
				<li class="swiper-slide kmyaoqing"><a href="misc.php?mod=invite&action=group&id=$_G['fid']"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe60f</i></span><em class="f_b">{$comiis_group_lang['036']}{$comiis_lang['all59']}</em></a></li>
			<!--{/if}-->
                <li class="swiper-slide kmfuzhi"><a href="javascript:;" onclick="comiis_mob_copyurl_key()" id="comiis_mob_copy_btn" data-clipboard-text="{$_G['siteurl']}forum.php?mod=forumdisplay&action=list&fid={$_G['fid']}"><span class="kmico bg_f f_c"><i class="comiis_font">&#xe717</i></span><em class="f_b">{$comiis_lang['tip385']}</em></a></li>      
                <li class="swiper-slide kmjubao"><a href="{if $_G['uid']}misc.php?mod=report&url={$_G[currenturl_encode]}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $_G['uid']} class="dialog"{/if}><span class="kmico bg_f f_c"><i class="comiis_font">&#xe636</i></span><em class="f_b">{$comiis_lang['all2']}</em></a></li>
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
    var share_obj = new nativeShare('comiis_share', {
        img:'{$_G['siteurl']}{$_G[forum][icon]}',
        url:'{$_G['siteurl']}forum.php?mod=forumdisplay&fid={$_G['fid']}&action=list',
        title:'{$comiis_group_lang['045']}{$_G[forum][name]}',
        desc:'{echo str_replace(array("\r\n", "\r", "\n", "'", "'"), '', strip_tags($_G[forum]['description']));}',
        from:'{$_G['setting']['bbname']}'
    });
    </script>
<!--{/if}-->
	<!--{if $action == 'list' && ($comiis_app_switch['comiis_group_listhead'] == 0 || $comiis_app_switch['comiis_group_listhead'] == 1)}-->
	<div class="comiis_top_postbtn bg_f b_b f_c cl">
		<!--{if $comiis_app_switch['comiis_post_yindao'] == 1 && $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
			<a href="{if $_G['uid']}#comiis_post_type{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" title="{lang send_threads}" class="postbtn_box{if $_G['uid']} popup{/if}">
				<i class="comiis_font f_d y b_l">&#xe642;</i>
				<span class="top_postbtn_tximg bg_e"><!--{avatar($_G['uid'],'middle')}--></span>
				<i class="comiis_font f_d">&#xe655;</i> {$comiis_group_lang['025']}
			</a>
		<!--{else}-->
			<a href="{if $_G['uid']}forum.php?mod=post&action=newthread&fid=$_G['fid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" title="{lang send_threads}" class="postbtn_box">
				<i class="comiis_font f_d y b_l">&#xe642;</i>
				<span class="top_postbtn_tximg bg_e"><!--{avatar($_G['uid'],'middle')}--></span>
				<i class="comiis_font f_d">&#xe655;</i> {$comiis_group_lang['025']}
			</a>
		<!--{/if}-->
	</div> 
	<!--{/if}-->
	<!--{if $action == 'list' && $comiis_app_switch['comiis_group_listhead'] != 4}--><div class="mt10"></div><!--{/if}-->	
<!--{/if}-->
	<!--{if $action == 'index'}-->
	  <!--{if $status == 2 || $status == 3 || $status == 5}-->
        <div class="comiis_notip bg_f b_b cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{$comiis_lang['tip251']}{$comiis_group_lang['001']}{$comiis_lang['tip252']}</span>
        </div>
	  <!--{elseif $status != 2 && $status != 3}-->
		<!--{subtemplate group/group_index}-->
	  <!--{/if}-->
	<!--{elseif $action == 'list'}-->
	  <!--{subtemplate group/group_list}-->
	  {eval}
		$comiis_app_wx_share['img'] = $_G[forum][icon] ? $_G[forum][icon] : '';
		$comiis_app_wx_share['title'] = $_G[forum][name];
		$comiis_app_wx_share['desc'] = str_replace(array("\r\n", "\r", "\n", "'", "'"), '',$_G['forum']['description']);
	  {/eval}
	<!--{elseif $action == 'memberlist'}-->
	  <!--{subtemplate group/group_memberlist}-->
	<!--{elseif $action == 'create'}-->
	  <!--{subtemplate group/group_create}-->
	<!--{elseif $action == 'manage'}-->
	  <!--{subtemplate group/group_manage}-->
	<!--{/if}-->
<!--{if $_GET['inajax']}-->
	<!--{template common/footer_ajax}-->
<!--{else}-->
  <script>
		$(document).on('click', '.comiis_join_group', function(e) {
			e.preventDefault();
			var obj = $(this);
			$.ajax({
					type:'POST',
					url:obj.attr('href')+'&groupjoin=1&formhash={FORMHASH}',
					dataType:'xml'
			})
			.success(function(s) {
				evalscript(s.lastChild.firstChild.nodeValue);
			});
			return false;
		});
  </script>
  <!--{eval comiis_load('cQT0T0c8774lTtQ8T8', 'status,comiis_group_lang');}-->
	<!--{template forum/comiis_post_type}-->	
	<!--{template common/footer}-->
<!--{/if}-->