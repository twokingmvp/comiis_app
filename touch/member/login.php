<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_reg_ico']==0 && $comiis_app_switch['comiis_reg_tit']==0}-->
<style>.styli_zico .styli_tit {padding-right:0;}</style>
<!--{elseif $comiis_app_switch['comiis_reg_tit']==0}-->
<style>.styli_zico .styli_tit i {padding-right:0;}</style>
<!--{/if}-->
<!--{if $_GET[infloat]}-->
<script>window.location.href = 'member.php?mod=logging&action=login';</script>
<!--{else}-->
{eval $loginhash = 'L'.random(4);}
<!--{if $comiis_app_switch['comiis_reg_bg'] == 1}-->
<style>
    <!--{if $comiis_app_switch['comiis_reg_bg_img']}-->
    body.comiis_bodybg {background:#333 url({$comiis_app_switch['comiis_reg_bg_img']}) !important;background-size:cover}
    <!--{else}-->
    body.comiis_bodybg {background:#333}
    #comiis_bgstretcher {background: black;overflow: hidden;width: 100%;position: fixed !important;z-index: -1}
    #comiis_bgstretcher, #comiis_bgstretcher UL, #comiis_bgstretcher UL LI {position: absolute;top: 0;right: 0;left: 0;bottom: 0}
    <!--{/if}-->
    <!--{if $comiis_app_switch['comiis_reg_bg_head'] == 1}-->
    #comiis_head .comiis_head {background:none !important}
    #comiis_head .comiis_head h2 {display:none}
    <!--{elseif $comiis_app_switch['comiis_reg_bg_head'] == 2}-->
    #comiis_head {display:none}
    <!--{/if}-->
    .comiis_reg_bg {padding-bottom:30px;padding-top:{if $comiis_app_switch['comiis_reg_bg_head'] == 0 || $comiis_isweixin == 1}40{else}0{/if}px;margin-top:0px}
    .comiis_reg_bg .comiis_login_logo {margin:0 auto 5px;text-align:center}
    .comiis_reg_bg .comiis_login_logo img {width:56%;max-width:230px}
    .comiis_reg_bg .comiis_login_logo .logo_img {width:22%;max-width:90px;box-shadow:0 0 10px rgba(255, 255, 255, 0.4);border-radius:10px}
    .comiis_reg_bg .comiis_login_from, .comiis_reg_bg .comiis_reg_link {margin:0 25px}
    .comiis_reg_bg .comiis_btnbox {padding:25px 25px 15px}
    .comiis_reg_bg .comiis_login_from li {border-bottom:1px solid rgba(255,255,255,0.3) !important}
    .comiis_reg_bg .comiis_login_from li.qqli {padding:20px 0 10px 0}
	.comiis_reg_bg .comiis_login_from input, .comiis_reg_bg .comiis_login_from select, .comiis_reg_bg a, .comiis_reg_bg .f_a, .comiis_reg_bg .f_c, .comiis_reg_bg .f_d, .comiis_reg_bg .f_b, .comiis_reg_bg .f_0 {color:#fff !important}		
    .comiis_reg_bg .comiis_login_from .f13 i {filter:alpha(opacity=0);-moz-opacity:0;-khtml-opacity:0;opacity:0}
    .comiis_reg_bg .comiis_log_dsf, .comiis_reg_bg .comiis_log_ico {margin-bottom:0}
    .comiis_reg_bg .comiis_log_line, .comiis_reg_bg .comiis_log_line .f_c {background:none !important}
    #comiis_head .b_b {border-bottom:none !important}    
    .comiis_reg_bg .comiis_log_dsf {margin-top:60px}    
    .comiis_reg_bg .comiis_log_line {text-align:left}
    .comiis_reg_bg .comiis_log_line span {padding: 0 10px}
    .comiis_reg_bg .comiis_log_ico {margin:10px 5px;text-align:left}
    .comiis_reg_bg .comiis_log_ico a {margin:10px 6px 15px;padding:8px;width:22px;height:22px;line-height:22px}
    .comiis_reg_bg .comiis_log_ico a i {font-size:22px}
    .comiis_reg_bg .comiis_log_ico a span {bottom:-30px;left:-6px;width:50px;text-align:center}
    .comiis_reg_bg .comiis_btnbox .comiis_btn {border-radius:50px}
	.comiis_reg_bg input::-webkit-input-placeholder {color:#fff}
	.comiis_reg_bg input::-moz-input-placeholder {color:#fff}
	.comiis_reg_bg input::-ms-input-placeholder {color:#fff}
</style>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_reg_bg'] == 2}-->
<style>
	#comiis_head .comiis_head {background:none !important}
	#comiis_head .comiis_head h2 {display:none}
	#comiis_head .comiis_head, #comiis_head .comiis_head a {color:#fff !important}
</style>
<div class="comiis_login_top cl">
	<div class="kmimg bg_0"><!--{if $comiis_app_switch['comiis_reg_topimg']}--><img src="{$comiis_app_switch['comiis_reg_topimg']}" class="vm"><!--{/if}--></div>
	<!--{if $_GET['lostpasswd'] == 'yes'}-->
		<!--{if $comiis_app_switch['comiis_reg_zmtxts']}--><div class="comiis_login_tit f_f">{$comiis_app_switch['comiis_reg_zmtxts']}</div><!--{/if}-->
	<!--{else}-->
		<!--{if $comiis_app_switch['comiis_reg_dltxts']}--><div class="comiis_login_tit f_f">{$comiis_app_switch['comiis_reg_dltxts']}</div><!--{/if}-->
	<!--{/if}-->
</div>
<!--{/if}-->
<div class="comiis_loginbox<!--{if $_GET[infloat]}--> comiis_login_pop comiis_bodybg<!--{/if}-->{if $comiis_app_switch['comiis_reg_bg'] == 1} comiis_reg_bg f_f{elseif $comiis_app_switch['comiis_reg_bg'] == 2} comiis_login_froms bg_f{/if}">
	<!--{if $_GET['lostpasswd'] == 'yes'}-->    
        <!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_zmtxt'] && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2}--><div class="comiis_login_tit">{$comiis_app_switch['comiis_reg_zmtxt']}</div><!--{/if}-->
        <!--{if $comiis_app_switch['comiis_reg_bg'] == 1 && $comiis_app_switch['comiis_reg_bg_logo']}--><div class="comiis_login_logo">{$comiis_app_switch['comiis_reg_bg_logo']}</div><!--{/if}-->
        <div class="comiis_post_from{if ($comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_zmtxt'] && $comiis_app_switch['comiis_reg_bg'] == 0) || $comiis_app_switch['comiis_reg_bg'] == 1} mt15{/if} cl">
            <form method="post" autocomplete="off" id="lostpwform" class="cl" onsubmit="ajaxpost('lostpwform', 'returnmessage3_$loginhash', 'returnmessage3_$loginhash', 'onerror');return false;" action="member.php?mod=lostpasswd&lostpwsubmit=yes&infloat=yes">
                <input type="hidden" name="formhash" value="{FORMHASH}" />
                <input type="hidden" name="handlekey" value="lostpwform" />
                <div class="comiis_login_from{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_zmtxt'] && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} bg_f b_t{/if}"{if ($comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_zmtxt']) && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} style="margin:0;"{/if}>
                    <ul{if ($comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_zmtxt']) && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} class="bg_f b_t"{/if}>
                        <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_zmtxt']} qqli{/if} styli_zico f16 b_b">
                            <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe614;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['reg24']}<span class="f_g">*</span><!--{/if}--></div>
                            <div class="flex"><input type="text" value="" tabindex="1" class="comiis_px" size="30" autocomplete="off" name="email" id="lostpw_email" placeholder="{$comiis_lang['reg25']}"></div>
                        </li>
                        <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_zmtxt']} qqli{/if} styli_zico f16 b_b">
                            <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe61e;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['tip295']}<!--{/if}--></div>
                            <div class="flex"><input type="text" value="" tabindex="2" class="comiis_px" size="30" autocomplete="off" name="username" id="lostpw_username" placeholder="{lang inputyourname}"></div>
                        </li>
                    </ul>
                </div>
                <div class="comiis_btnbox btn_login"><button tabindex="3" value="true" name="lostpwsubmit" type="submit" class="formdialog comiis_btn bg_c f_f" comiis='handle'>{lang submit}</button></div>
            </form>
		</div>
		<script>
			$('.comiis_head h2').html("{lang getpassword}");
			function succeedhandle_lostpwform(a, b, c){
				popup.open(b, 'alert');
				if(a){
					setTimeout(function() {
						window.location.href = a;
					}, 1000);
				}
			}
			function errorhandle_lostpwform(a, b){
				popup.open(a, 'alert');
			}
		</script>
	<!--{else}-->
        <!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_dltxt'] && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2}--><div class="comiis_login_tit">{$comiis_app_switch['comiis_reg_dltxt']}</div><!--{/if}-->
        <!--{if $comiis_app_switch['comiis_reg_bg'] == 1 && $comiis_app_switch['comiis_reg_bg_logo']}--><div class="comiis_login_logo">{$comiis_app_switch['comiis_reg_bg_logo']}</div><!--{/if}-->
		<!--{if $_GET[infloat]}-->
			<h2 class="comiis_log_tit"><a href="javascript:;" onclick="popup.close();"><i class="comiis_font f_d y">&#xe639;</i></a>{lang login}</h2>
		<!--{/if}-->
		<div class="comiis_post_from{if ($comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_dltxt'] && $comiis_app_switch['comiis_reg_bg'] == 0) || $comiis_app_switch['comiis_reg_bg'] == 1} mt15{/if} cl">
        <form id="loginform" method="post" action="member.php?mod=logging&action=login&loginsubmit=yes&loginhash=$loginhash"<!--{if $comiis_app_switch['comiis_reg_yszctit'] || $comiis_app_switch['comiis_reg_fwtktit']}--> onsubmits="login_agreebbrules()"<!--{/if}-->>
        <input type="hidden" name="formhash" id="formhash" value='{FORMHASH}' />
        <input type="hidden" name="referer" id="referer" value="<!--{if dreferer()}-->{echo dreferer()}<!--{else}-->forum.php?mobile=2<!--{/if}-->" />
        <input type="hidden" name="fastloginfield" value="username">
        <input type="hidden" name="cookietime" value="31104000">
        <!--{if $auth}-->
            <input type="hidden" name="auth" value="$auth" />
        <!--{/if}-->
        <div class="comiis_login_from{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_dltxt'] && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} bg_f b_t{/if}"{if ($comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']) && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} style="margin:0;"{/if}>
            <ul{if ($comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']) && $comiis_app_switch['comiis_reg_bg'] != 1 && $comiis_app_switch['comiis_reg_bg'] != 2} class="bg_f b_t"{/if}>
            <!--{if !$auth}-->
              <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']} qqli{/if} styli_zico f16 b_b">
                <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe61e;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['tip295']}<!--{/if}--></div>
                <div class="flex"><input type="text" value="" tabindex="1" class="comiis_px" autocomplete="off" value="" name="username" placeholder="{lang inputyourname}" fwin="login"></div>
              </li>
              <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']} qqli{/if} styli_zico f16 b_b">
                <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe61d;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['tip171']}<!--{/if}--></div>
                <div class="flex"><input type="password" tabindex="2" class="comiis_px" value="" name="password" placeholder="{$comiis_lang['reg13']}" fwin="login" id="password"></div>
              </li>
              <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']} qqli{/if} styli_zico f16 b_b">
                <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe6d1;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['tip296']}<!--{/if}--></div>
                <div class="flex">
                    <div class="comiis_login_select">
                    <span class="inner">
                        <i class="comiis_font f_d">&#xe60c;</i>
                        <span class="z">
                            <span class="comiis_question f_c">{lang security_question}</span>
                        </span>					
                    </span>
                    <select id="questionid_{$loginhash}" name="questionid" class="comiis_sel_list">
                        <option value="0" selected="selected">{lang security_question}</option>
                        <option value="1">{lang security_question_1}</option>
                        <option value="2">{lang security_question_2}</option>
                        <option value="3">{lang security_question_3}</option>
                        <option value="4">{lang security_question_4}</option>
                        <option value="5">{lang security_question_5}</option>
                        <option value="6">{lang security_question_6}</option>
                        <option value="7">{lang security_question_7}</option>
                    </select>
                    </div>
                </div>
              </li>
              <li class="answerli b_b{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']} qqli{/if}" style="display:none;">
                  <div class="comiis_flex styli_zico f16">
                      <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe655;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['reg18']}<!--{/if}--></div>
                      <div class="flex"><input type="text" name="answer" id="answer_{$loginhash}" class="comiis_px" size="30" placeholder="{$comiis_lang['reg19']}"></div>
                  </div>
              </li>
            <!--{/if}-->
            <!--{if $seccodecheck}-->
              <li class="comiis_flex{if $comiis_isweixin != 1 || !$comiis_app_switch['comiis_reg_dltxt']} qqli{/if} styli_zico f16 b_b">
                  <div class="styli_tit"><!--{if $comiis_app_switch['comiis_reg_ico']==1}--><i class="comiis_font f_d">&#xe6e0;</i><!--{/if}--><!--{if $comiis_app_switch['comiis_reg_tit']==1}-->{$comiis_lang['reg26']}<!--{/if}--></div>
                  <div class="flex">
                  <!--{subtemplate common/seccheck}-->
                  </div>
              </li>
            <!--{/if}-->
          </ul>
		</div>
    <!--{if $comiis_app_switch['comiis_reg_yszctit'] || $comiis_app_switch['comiis_reg_fwtktit']}-->
    <div class="comiis_reg_link comiis_input_style mt10 cl">
      <input type="checkbox" class="pc" name="agreebbrule" value="$bbrulehash" id="agreebbrules" />
      <label for="agreebbrules"><i class="comiis_font f_0 kmgou">&#xe644</i> <span class="f_c">{$comiis_lang['reg7']}</span>
      <a href="{if $comiis_app_switch['comiis_reg_fwtkurl']}{$comiis_app_switch['comiis_reg_fwtkurl']}{else}member.php?mod={$_G['setting'][regname]}&agreement=yes{/if}" class="f_ok"><!--{if $comiis_app_switch['comiis_reg_fwtktit']}-->{$comiis_app_switch['comiis_reg_fwtktit']}<!--{else}-->{lang rulemessage}<!--{/if}--></a> <!--{if $comiis_app_switch['comiis_reg_yszctit']}--><span class="f_c">{$comiis_lang['tip398']}</span> <a href="{$comiis_app_switch['comiis_reg_yszcurl']}" class="f_ok">{$comiis_app_switch['comiis_reg_yszctit']}</a><!--{/if}--></label> 
    </div>
    <!--{/if}-->
		<div class="comiis_btnbox btn_login"><button value="true" name="submit" type="submit" class="formdialog comiis_btn bg_c f_f" tabindex="3" comiis='handle'>{lang login}</button></div>
		</form>
		</div>
		<script src="./template/comiis_app/comiis/js/comiis_hideShowPassword.js"></script>
		<script type="text/javascript">
      function login_agreebbrules() {
        if(!$('#agreebbrules').is(':checked')){
          popup.open('{$comiis_lang['tip399']}<!--{if $comiis_app_switch['comiis_reg_fwtktit']}-->{$comiis_app_switch['comiis_reg_fwtktit']}<!--{else}-->{lang rulemessage}<!--{/if}-->', 'alert');
          return false;
        }
      }
			$('#password').hidePassword(true);
			(function() {
				$(document).on('change', '.comiis_sel_list', function() {
					var obj = $(this);
					$('.comiis_question').text(obj.find('option:selected').text());
					if(obj.val() == 0) {
						$('.answerli').css('display', 'none');
						$('.questionli').addClass('bl_none');
					} else {
						$('.answerli').css('display', 'block');
						$('.questionli').removeClass('bl_none');
					}
				});
			 })();
			function succeedhandle_loginform(a, b, c){
				popup.open(b, 'alert');
				if(a){
					setTimeout(function() {
						window.location.href = a;
					}, 1000);
				}
			}
			function errorhandle_loginform(a, b){
				popup.open(a, 'alert');
			}
		</script>
	<!--{/if}-->	
	<!--{if $_G['setting']['regstatus']}-->
	<div class="comiis_reg_link f_ok cl"><!--{if $_GET['lostpasswd'] == 'yes'}--><a href="member.php?mod=logging&action=login" class="y">{$comiis_lang['reg1']}</a><!--{else}--><a href="member.php?mod=logging&action=login&lostpasswd=yes" class="y">{$comiis_lang['reg2']}</a><!--{/if}--><a href="member.php?mod={$_G['setting'][regname]}&referer={echo urlencode(dreferer());}">{$comiis_lang['reg3']}</a></div>
	<!--{/if}-->
		<div class="comiis_log_dsf cl">
			<div class="comiis_log_line cl"><span class="bg_f f_c">ช่องทางอื่นๆ</span></div>
			<div class="comiis_log_ico f_d">
				<!--<a href="plugin.php?id=tshuz_facebook" class="bg_f b_ok"><i class="comiis_font f_qq">&#xe76b;</i><span>Facebook</span></a>-->
				<a href="plugin.php?id=comiis_sms:comiis_login&action=login" class="bg_f b_ok"><i class="comiis_font f_wb">&#xe685;</i><span>โทรศัพท์</span>
				<a href="plugin.php?id=jdz_line" class="bg_f b_ok"><i class="comiis_font f_wx">&#xe76f;</i><span>Line</span></a>
				<!--<a href="plugin.php?id=tshuz_google" class="bg_f b_ok"><i class="comiis_font f_wb">&#xeaa8;</i><span>Google</span></a>-->
				<a href="plugin.php?id=tshuz_google" class="bg_f b_ok">  <svg width="25" height="25" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
<path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
<path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
<path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
  <span>Google</span>
</a>
			</div>
		</div>
	<!--{if ($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']) || !empty($_G['setting']['pluginhooks']['global_comiis_member_login_mobile']) && $comiis_id == 1}-->
	<div class="comiis_log_dsf cl">
		<div class="comiis_log_line cl"><span class="{if ($comiis_isweixin == 1 && $comiis_app_switch['comiis_reg_dltxt']) || $comiis_app_switch['comiis_reg_bg'] == 2}bg_f{else}comiis_bodybg{/if} f_c">{$comiis_lang['reg4']}</span></div>
		<div class="comiis_log_ico f_d">
			<!--{if ($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed'])}--><a href="$_G[connect][login_url]&statfrom=login_simple" class="bg_f b_ok"><i class="comiis_font f_qq">&#xe625;</i><!--{if $comiis_app_switch['comiis_qqico_txt'] == 1}--><span>{$comiis_lang['tip326']}</span><!--{/if}--></a><!--{/if}-->
			<!--{hook/global_comiis_member_login_mobile}-->
		</div>
	</div>
	<!--{/if}-->
	<!--{if $comiis_id == 1}--><!--{hook/logging_bottom_mobile}--><!--{/if}-->
</div>
<!--{if $_G['setting']['pwdsafety']}-->
	<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
<!--{/if}-->
    <!--{if $comiis_app_switch['comiis_reg_bg'] == 1}-->
		<!--{if !$comiis_app_switch['comiis_reg_bg_img']}-->
			<!--{eval}-->
				$comiis_bgimg_s = '';
				$comiis_allbgimg = array();			
				$comiis_bgimg = dir(DISCUZ_ROOT.'./template/comiis_app/pic/loginbg');
				while($entry = $comiis_bgimg->read()) {
					if(preg_match("/^comiis_([a-zA-Z0-9\-\_]+)\.(jpg|png|gif)$/", $entry)) {
						$comiis_allbgimg[] = './template/comiis_app/pic/loginbg/'.$entry;
					}
				}
				$comiis_bgimg->close();
				if(count($comiis_allbgimg)){
					$comiis_bgimg_s = dimplode($comiis_allbgimg);
				}
			<!--{/eval}-->
			<!--{if $comiis_bgimg_s}-->
				<script type="text/javascript" src="./template/comiis_app/comiis/js/comiis_bgstretcher.js"></script>
				<script>
					$(document).ready(function(){
						$(document).bgStretcher({
							images: [{$comiis_bgimg_s}]
						});
					});
				</script>
			<!--{/if}-->
		<!--{/if}-->
	<!--{/if}-->
<!--{eval updatesession();}-->
<!--{/if}-->
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->