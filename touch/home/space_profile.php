<?PHP exit('Access Denied');?>
<!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/comiis_space_profile.php'}-->
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{if $_GET['set'] == 'comiis'}-->
	<!--{if count($comiis_app_nav['unav3'])}-->
	<div class="comiis_myinfo_lists mt12 bg_f cl"> 
		<!--{loop $comiis_app_nav['unav3'] $temp}-->
			<!--{if $temp['name'] == 'comiis_line_line'}-->
				</div>
				<div class="styli_h cl"></div>
				<div class="comiis_myinfo_lists bg_f cl">
			<!--{elseif $temp['url'] == ':comiis_usertx:' && $temp['type'] == 0}-->
				<a href="javascript:;" class="comiis_flex comiis_edit_avatar comiis_styli bg_f b_t cl">
					<!--{if strpos($temp['icon'], '/') !== false || $temp['icon']}-->
					<div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{/if}</i><!--{/if}--></div>
					<!--{/if}-->				
					<div class="flex">{$temp['name']}</div><img src="<!--{avatar($_G['uid'], middle, true)}-->" class="kmtximg" /><div class="styli_ico"><i class="comiis_font f_e">&#xe60c;</i></div>
				</a>
			<!--{elseif $temp['url'] == 'home.php?mod=spacecp' && $temp['type'] == 0}-->
				<a href="home.php?mod=spacecp" class="comiis_flex comiis_styli bg_f b_t cl">
					<!--{if strpos($temp['icon'], '/') !== false || $temp['icon']}-->
					<div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{/if}</i><!--{/if}--></div>
					<!--{/if}-->
					<div class="flex">{$temp['name']}</div><div class="styli_ico"><!--{if $space[profileprogress] <100}--><span class="f14 f_d">{$comiis_lang['tip269']}$space[profileprogress]%</span><!--{else}--><span class="f_ok">{lang modify}</span><!--{/if}--><i class="comiis_font f_e">&#xe60c;</i></div>
				</a> 
			<!--{elseif $temp['url'] == ':comiis_logout:' && $temp['type'] == 0}-->
				<a href="member.php?mod=logging&action=logout&referer=./&formhash={FORMHASH}&handlekey=logout" class="comiis_styli bg_f b_t f_g cl" style="display:block;text-align:center;" />{$temp['name']}</a>
			<!--{else}-->
				<!--{eval $listnemu = explode('||', $temp['name']);}-->
				<a href="{$temp['url']}" class="comiis_flex comiis_styli bg_f b_t cl">
				  <!--{if strpos($temp['icon'], '/') !== false || $temp['icon']}-->
				  <div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{/if}</i><!--{/if}--></div>
				  <!--{/if}-->
				  <div class="flex">{$listnemu[0]}</div><div class="styli_ico">{if $listnemu[1]}<span class="f14 f_d">{$listnemu[1]}</span>{/if}<i class="comiis_font f_e">&#xe60c;</i></div>
				</a>
			<!--{/if}-->
		<!--{/loop}-->	
	</div>
	<!--{/if}-->
<!--{else}-->
	<!--{if !$_GET['mycenter']}-->
	<!--{template home/space_header}-->
		<div class="comiis_space_profile bg_f b_t b_b mt10 cl">
			<ul>
				<!--{if $space['uid'] == $_G['uid']}-->
				<li class="b_t">
					<a href="home.php?mod=spacecp&ac=usergroup" class="profile_a">
						<div class="profile_r">
							<i class="y comiis_font f_e">&#xe60c;</i><span class="y f_a f14">{$comiis_lang['tip335']}</span>
							<span class="kmlev bg_0 f_f f12"{if $space[group][color]} style="background:$space[group][color] !important"{/if}>{if $comiis_app_switch['comiis_lev_txt']}{$comiis_app_switch['comiis_lev_txt']}{else}Lv.{/if}{$space[group][stars]}</span>
							<span class="f14">{$space[group][grouptitle]}</span>
						</div>
						<span>{lang usergroup}</span>
					</a>
				</li>
				<!--{/if}-->
				<!--{if $_G['setting']['verify']['enabled']}-->
				<li class="b_t">
					<div class="profile_r comiis_verify">
						<!--{eval $showverify = true;$show_verify = 0;}-->                    
						<!--{loop $_G['setting']['verify'] $vid $verify}-->
							<!--{if $verify['available']}-->
								<!--{if $showverify}-->
								<!--{eval $showverify = false;}-->
								<!--{/if}-->
								<!--{if $space['verify'.$vid] == 1}-->
									<!--{eval $show_verify = 1;}-->  
									<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid"><!--{if $verify['icon']}--><img src="$verify['icon']" class="vm" alt="$verify[title]" title="$verify[title]" /><!--{else}-->$verify[title]<!--{/if}--></a>
								<!--{elseif !empty($verify['unverifyicon'])}-->
									<!--{eval $show_verify = 1;}--> 
									<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid"><!--{if $verify['unverifyicon']}--><img src="$verify['unverifyicon']" class="vm" alt="$verify[title]" title="$verify[title]" /><!--{/if}--></a>
								<!--{/if}-->
							<!--{/if}-->
						<!--{/loop}-->
						<!--{if $show_verify == 0}--><!--{if $space['uid'] == $_G['uid']}--><i class="y comiis_font f_e">&#xe60c;</i><a href="home.php?mod=spacecp&ac=profile&op=verify" class="f_a" style="margin-top:0;">{$comiis_lang['tip301']}</a><!--{else}--><span class="f_c">{$comiis_lang['tip300']}</span><!--{/if}--><!--{/if}-->
					</div>
					<span>{$comiis_lang['tip289']}</span>	
				</li>
				<!--{/if}-->			
				<!--{if $space['medals']}-->
					<li class="b_t">
						<div class="kmgo"><a href="home.php?mod=medal" class="y f_d"><i class="y comiis_font f_e">&#xe60c;</i>{$comiis_lang['tip319']}</a></div>
						<div id="comiis_medal" class="profile_r comiis_medal">                        
							<ul class="swiper-wrapper">                            
							<!--{loop $space['medals'] $medal}-->                            
								<li class="swiper-slide"><a href="javascript:;" onclick="popup.open('<span class=\'comiis_medalshow\'><img src=\'{if strpos($medal['image'], 'image/') == false}{STATICURL}image/common/{/if}$medal['image']\' class=\'kmimg b_ok bg_e\'><em class=\'kmtit f16 f_0\'>$medal[name]</em><em class=\'kmtxt f14\'>$medal[description]</em></span>', 'alerts');"><img src="{if strpos($medal['image'], 'image/') == false}{STATICURL}image/common/{/if}$medal['image']" alt="$medal[name]" id="md_{$medal[medalid]}" class="vm" /></a></li>
							<!--{/loop}-->
							</ul>
						</div>
						<span>{$comiis_lang['tip321']}</span>	
					</li>
					<script src="template/comiis_app/comiis/js/comiis_swiper.min.js?{VERHASH}"></script>
					<script>
						mySwiper = new Swiper('#comiis_medal', {
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
				<!--{/if}-->
				<li class="b_t">
					<!--{if $space['uid'] == $_G['uid']}--><a href="home.php?mod=spacecp&ac=profile&op=info" class="profile_a"><!--{/if}-->
					<div class="profile_r profile_face f_c"><!--{if $space[group][maxsigsize] && $space[sightml]}-->$space[sightml]<!--{else}--><!--{if $space['uid'] == $_G['uid']}-->{$comiis_lang['tip336']}<!--{else}-->{$comiis_lang['tip15']}<!--{/if}--><!--{/if}--></div>
					<span>{lang personal_signature}</span>
					<!--{if $space['uid'] == $_G['uid']}--></a><!--{/if}-->
				</li>
				<!--{if $space[customstatus]}-->
				<li class="b_t">
					<a href="home.php?mod=spacecp&ac=profile&op=info" class="profile_a">
					<div class="profile_r profile_face f_c">$space[customstatus]</div>
					<span>{$comiis_lang['tip175']}</span>
					</a>
				</li>
				<!--{/if}-->
				<li class="b_t">
					<a href="javascript:;" class="profile_a profile_ewmbox">
						<div class="profile_rs"><i class="comiis_font f_d">&#xe60c;</i><i class="comiis_font profile_ewm f_d">&#xe663;</i></div>
						<span>{$comiis_lang['all60']}</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="comiis_space_profileico bg_f b_t b_b mt10 cl">
			<ul>
			<!--{if $_G['setting']['allowviewuserthread'] !== false}-->
			<!--{eval $space['posts'] = $space['posts'] - $space['threads'];}-->
				<li><a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&type=thread&from=space"><i class="comiis_font" style="color:#a8c500;">&#xe64f;</i><span>{lang thread} $space[threads]</span></a></li>
				<li><a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&type=reply&from=space"><i class="comiis_font" style="color:#FFB900;">&#xe667;</i><span>{lang reply} $space[posts]</span></a></li>
			<!--{/if}-->
				<li><a href="javascript:;"><i class="comiis_font" style="color:#53bcf5;">&#xe66b;</i><span>{lang friends} $space[friends]</span></a></li>
			<!--{if helper_access::check_module('follow')}-->
				<li><a href="home.php?mod=follow&do=follower&uid=$space['uid']"><i class="comiis_font" style="color:#FD7673;">&#xe650;</i><span>{$comiis_lang['all73']} $space[follower]</span></a></li>
			<!--{/if}-->
			<!--{if helper_access::check_module('blog')}-->
				<li><a href="home.php?mod=space&uid=$space['uid']&do=blog&view=me&from=space"><i class="comiis_font" style="color:#53bcf5;">&#xe64d;</i><span>{lang blog} $space[blogs]</span></a></li>
			<!--{/if}-->
			<!--{if helper_access::check_module('album')}-->
				<li><a href="home.php?mod=space&uid=$space['uid']&do=album&view=me&from=space"><i class="comiis_font" style="color:#a8c500;">&#xe653;</i><span>{lang album} $space[albums]</span></a></li>
			<!--{/if}-->
			<!--{if helper_access::check_module('doing')}-->
				<li><a href="home.php?mod=space&uid=$space['uid']&do=doing&view=me&from=space"><i class="comiis_font" style="color:#FD7673;">&#xe691;</i><span>{$comiis_lang['all56']} $space[doings]</span></a></li>
			<!--{/if}-->
				<li><a href="javascript:;"><i class="comiis_font" style="color:#FFB900;">&#xe65a;</i><span>{$comiis_lang['all74']} $space[views]</span></a></li>
			</ul>
		</div>
		<div class="comiis_space_profilejf bg_f b_t b_b mt10 cl">
			<ul>
				<li class="b_t b_r"><span class="f_0">$space[credits]</span>{lang credits}</li>
				<!--{loop $_G['setting'][extcredits] $key $value}-->
				<!--{if $value[title]}-->
				<li class="b_t b_r"><span class="f_0">{$space["extcredits$key"]} $value[unit]</span>$value[title]</span></li>
				<!--{/if}-->
				<!--{/loop}-->
			</ul>
		</div>
		<div class="comiis_space_profile bg_f b_t b_b mt10 cl">
			<ul>
				<li class="b_t"><div class="profile_rs f_c">{$space['uid']}</div><span>{lang share_space}ID</span></li>
				<!--{if in_array($_G[adminid], array(1, 2))}-->
				<li class="b_t"><div class="profile_rs f_c">$space[email]</div><span>Email</span></li>
				<!--{/if}-->
				<!--{loop $profiles $value}-->
				<li class="b_t"><div class="profile_rs f_c">{echo str_replace(array("max-width: 500px;"), array("max-width:none;max-height:100px;margin:8px 0;border-radius:4px;vertical-align: middle;"), $value[value]);}</div><span>$value[title]</span></li>
				<!--{/loop}--> 
				<li class="b_t"><div class="profile_rs f_c">$space[oltime] {lang hours}</div><span>{lang online_time}</span></li>
				<li class="b_t"><div class="profile_rs f_c">$space[regdate]</div><span>{lang regdate}</span></li>
				<li class="b_t"><div class="profile_rs f_c">$space[lastvisit]</div><span>{lang last_visit}</span></li>
			</ul>
		</div>
		<!--{if $space['uid'] == $_G['uid']}-->
		<div class="cl" style="height:40px;"></div>
		<div class="comiis_space_foot bg_f b_t">
			<ul class="comiis_flex">
				<li class="flex foot_cp"><a href="home.php?mod=spacecp"><i class="comiis_font f_wb">&#xe655;</i><span class="f_b">{lang update_profile}</span></a></li>
				<!--{if $_G['comiis_homestyleid']}--><li class="flex foot_cp"><a href="plugin.php?id=comiis_app_homestyle"><i class="comiis_font f_wb">&#xe612;</i><span class="f_b">{lang dress_space}</span></a></li><!--{/if}-->
			</ul>
		</div>
		<!--{else}-->
		<!--{template home/space_footer}-->
		<!--{/if}-->
	<!--{else}-->
		<div class="comiis_myinfo cl">
			<div class="comiis_myinfo_topbg bg_0">
			<!--{if $comiis_isweixin == 1}-->
				<a href="home.php?mod=space&do=profile&set=comiis&mycenter=1" class="myinfo_ewm f_f"><i class="comiis_font y">&#xe612;</i></a>
				<div class="myinfo_ewm profile_ewmbox f_f"><i class="comiis_font y">&#xe6f6;</i></div>
			<!--{else}-->
				<div class="myinfo_ewm profile_ewmbox f_f"><i class="comiis_font comiis_tm kmiy">&#xe60c;</i><i class="comiis_font y">&#xe6f6;</i><i class="comiis_font comiis_tm kmiz">&#xe60d;</i></div>
			<!--{/if}-->  
			</div>
			<div class="myinfo_boxv1 bg_f cl">
				<div class="myinfo_tongji">
				<!--{if $_G['setting']['allowviewuserthread'] !== false}-->
				<!--{eval $space['posts'] = $space['posts'] - $space['threads'];}-->
					<a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&type=thread"><span class="kmtit f_a">$space[threads]</span><span class="kmtxt f_d">{lang thread}</span></a>
					<!--{if !helper_access::check_module('follow')}-->
					<a href="home.php?mod=space&uid=$space['uid']&do=thread&view=me&type=reply"><span class="kmtit f_a">$space[posts]</span><span class="kmtxt f_d">{lang reply}</span></a></li>
					<!--{/if}-->
					<em class="bg_b"></em>
				<!--{/if}-->
				<!--{if helper_access::check_module('follow')}-->
					<a href="home.php?mod=follow&do=following&uid=$space['uid']"><span class="kmtit f_a">$space[following]</span><span class="kmtxt f_d">{$comiis_lang['all3']}</span></a>
					<em class="bg_b"></em>
				<!--{/if}--> 
				<!--{if helper_access::check_module('follow')}-->
					<a href="home.php?mod=follow&do=follower&uid=$space['uid']"><span class="kmtit f_a">$space[follower]</span><span class="kmtxt f_d">{$comiis_lang['all73']}</span></a>
				<!--{/if}-->              
				</div>
				<div class="myinfo_imgv1 bg_e f_c"><a href="home.php?mod=space&do=profile&set=comiis&mycenter=1"><img src="<!--{avatar($_G['uid'], middle, true)}-->" /></a></div>
				<div class="myinfo_data">
					<div class="myinfo_titv1">
						<a href="home.php?mod=space&do=profile&set=comiis&mycenter=1" class="myinfo_user">$_G[username]</a>
						<a href="home.php?mod=spacecp&ac=usergroup"><span class="bg_0 f_f"{if $_G['cache']['usergroups'][$_G['member']['groupid']]['color']} style="background:$_G['cache']['usergroups'][$_G['member']['groupid']]['color'] !important;color:#fff !important"{/if}>{if $comiis_app_switch['comiis_lev_txt']}{$comiis_app_switch['comiis_lev_txt']}{else}Lv.{/if}{$_G['cache']['usergroups'][$space['groupid']]['stars']}</span>
						{if $space['gender'] == 1}<i class="comiis_font kmlev kmgender bg_boy f_f">&#xe63f</i>{elseif $space['gender'] == 2}<i class="comiis_font kmlev kmgender bg_girl f_f">&#xe637</i>{/if}
					</div>
					<div class="myinfo_txtv1 f_c">
						<a href="javascript:;">UID: {$_G['uid']}</a>
						<a href="home.php?mod=spacecp&ac=credit">{lang credits}: $_G['member'][credits]</a>
					</div>
				</div>
			</div>           
			<!--{if $comiis_app_switch['comiis_user_top_num'] != 2}--><div class="styli_h cl"></div><!--{/if}-->
			<!--{if count($comiis_app_nav['unav'])}-->
			<div class="comiis_myinfo_ico{if $comiis_app_switch['comiis_user_top_num'] == 2} comiis_myinfo_ico2{elseif $comiis_app_switch['comiis_user_top_num'] == 3} comiis_myinfo_ico3{elseif $comiis_app_switch['comiis_user_top_num'] == 5} comiis_myinfo_ico5{/if}{if $comiis_app_switch['comiis_user_top_num'] != 2} bg_f{/if} cl">            
				<ul>
					<!--{loop $comiis_app_nav['unav'] $temp}-->
					<!--{if $temp['name'] == 'comiis_line_line'}-->
						</ul></div>					
						<div class="styli_h cl"></div>
						<div class="comiis_myinfo_ico{if $comiis_app_switch['comiis_user_top_num'] == 2} comiis_myinfo_ico2{elseif $comiis_app_switch['comiis_user_top_num'] == 3} comiis_myinfo_ico3{elseif $comiis_app_switch['comiis_user_top_num'] == 5} comiis_myinfo_ico5{/if}{if $comiis_app_switch['comiis_user_top_num'] != 2} bg_f{/if} cl">            
						<ul>
					<!--{else}-->                    
						<li><a href="{$temp['url']}"{if $comiis_app_switch['comiis_user_top_num'] == 2} class="bg_f"{/if}><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{else}&#xe633;{/if}</i><!--{/if}--><span>{$temp['name']}</span></a></li>
					<!--{/if}-->
					<!--{/loop}-->
				</ul>
			</div>
			<!--{/if}-->
			<!--{if count($comiis_app_nav['unav2'])}-->
			<div class="comiis_myinfo_list bg_f cl"> 
				<!--{loop $comiis_app_nav['unav2'] $temp}-->
					<!--{if $temp['name'] == 'comiis_line_line'}-->
						</div>
						<div class="styli_h cl"></div>
						<div class="comiis_myinfo_list bg_f cl">
					<!--{elseif $temp['name'] == 'comiis_plugin_plugin'}-->
						<!--{hook/global_comiis_home_space_profile_mobile}-->
					<!--{elseif $temp['url'] == 'home.php?mod=space&do=friend&view=visitor' && $temp['type'] == 0}-->
						<a href="home.php?mod=space&do=friend&view=visitor" class="comiis_flex comiis_styli bg_f b_t cl">
							<div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{else}&#xe633;{/if}</i><!--{/if}--></div><div class="flex">{$temp['name']}</div>
							<div class="my_space_img">
							<!--{loop $comiis_visitor $temp}-->
								<em class="bg_f"><!--{echo avatar($temp['vuid'],'middle');}--></em>
							<!--{/loop}-->
							</div>
							<div class="styli_ico"><i class="comiis_font f_e">&#xe60c;</i></div>
						</a>
					<!--{elseif $temp['url'] == 'home.php?mod=space&do=notice' && $temp['type'] == 0}-->
						<div name="pm" id="pm" class="b_t">            
						<a href="home.php?mod=space&do=notice" class="comiis_flex comiis_styli bg_f b_t cl">
						  <div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{else}&#xe633;{/if}</i><!--{/if}--></div><div class="flex"><span class="z">{$temp['name']}</span><!--{if $_G['member'][newpm] || $_G['member'][newprompt]}--><span class="myinfo_tip bg_del f_f">{if $_G['member'][newpm] && $_G['member'][newprompt]}{echo $_G['member'][newpm] + $_G['member'][newprompt];}{elseif $_G['member'][newpm]}{$_G['member'][newpm]}{else}{$_G['member'][newprompt]}{/if}</span><!--{/if}--></div><div class="styli_ico"><i class="comiis_font f_e">&#xe60c;</i></div>
						</a>            
						</div>  			
					<!--{elseif $temp['url'] == 'home.php?mod=space&do=profile&set=comiis&mycenter=1' && $temp['type'] == 0}-->
						<a href="home.php?mod=space&do=profile&set=comiis&mycenter=1" class="comiis_flex comiis_styli bg_f b_t cl">
						  <div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{else}&#xe633;{/if}</i><!--{/if}--></div><div class="flex">{$temp['name']}</div><div class="styli_ico"><!--{if $space[profileprogress] <100}--><span class="f14 f_d">{$comiis_lang['tip269']}$space[profileprogress]%</span><!--{else}--><span class="f_ok">{lang modify}</span><!--{/if}--><i class="comiis_font f_e">&#xe60c;</i></div>
						</a>       
					<!--{else}-->
						<!--{eval $listnemu = explode('||', $temp['name']);}-->
						<a href="{$temp['url']}" class="comiis_flex comiis_styli bg_f b_t cl">
						  <div class="styli_tit f_c"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><i class="comiis_font"{if $temp['bgcolor']} style="color:{$temp['bgcolor']};"{/if}>{if $temp['icon']}&#x{$temp['icon']};{else}&#xe633;{/if}</i><!--{/if}--></div><div class="flex">{$listnemu[0]}</div><div class="styli_ico">{if $listnemu[1]}<span class="f14 f_d">{$listnemu[1]}</span>{/if}<i class="comiis_font f_e">&#xe60c;</i></div>
						</a>
					<!--{/if}-->
				<!--{/loop}-->
			</div>
			<!--{/if}-->
			<div class="styli_h cl"></div>
		</div>    
	<!--{/if}-->
		<div class="comiis_user_code" style="display:none;">
			<div class="comiis_user_code_box">
				<div class="comiis_user_code_top">
					<img src="<!--{avatar($space['uid'], middle, true)}-->" />
					<h2>$space[username]</h2> 
					<p class="f_d">{$comiis_lang['tip11']}</p>
				</div>
				<div id="comiis_user_code"></div>
			</div>
		</div>
		<script src="template/comiis_app/comiis/js/jquery.qrcode.min.js?{VERHASH}"></script>
		<script>
			jQuery('.profile_ewmbox').on('click', function(e) {
				$('.comiis_user_code').css('display', 'block').on('click', function(e) {
					$(this).css('display', 'none');
				});
				if(jQuery('#comiis_user_code canvas').length == 0){
					jQuery('#comiis_user_code').qrcode({width: 240, height: 240, text: "{$_G['siteurl']}home.php?mod=space&uid={$space['uid']}&do=profile"});
				}
			});
		</script>
	<!--{if $_GET['ispm'] == 'yes'}-->
	<script>
	$(document).ready(function() {
	jQuery("html,body").animate({scrollTop:jQuery("#pm").offset().top},1000);
	});
	</script>
	<!--{/if}-->
<!--{/if}-->
<!--{if !$_GET['mycenter']}--><!--{eval $comiis_foot = 'no';}--><!--{/if}-->
<!--{template common/footer}-->