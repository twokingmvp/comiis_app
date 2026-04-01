<?PHP exit('Access Denied');?>
<!--{if $comiis_app_switch['comiis_share_js']}-->
<script>
    function comiis_user_share() {
			isusershare = 1;
			comiis_share_box_close();
      {$comiis_app_switch['comiis_share_js']}
    }
</script>
<!--{/if}-->
<!--{eval comiis_load('j9alEz9X55JrjbA3l9', '');}-->
<div id="mask" style="display:none;"></div>
<div id="comiis_menu_bg" style="display:none;"></div>
<div id="comiis_alert" style="display:none;"></div></div>
<!--{if $comiis_app_switch['comiis_statcode']}--><div style="display:none;">$comiis_app_switch['comiis_statcode']</div><!--{/if}-->
<!--{if $comiis_app_switch['comiis_scrolltop'] != 1 && $comiis_app_switch['comiis_leftnv_back'] != 2 && $_G['comiis_isapp'] == 0}-->
    <!--{if ($comiis_isweixin == 1 && (($_G['basescript'] == 'portal' && CURMODULE == 'view') || ($_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='blog' && $_GET['id']) || (($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && CURMODULE == 'viewthread'))) || $comiis_app_switch['comiis_leftnv_back'] == 1}-->
    <style>.comiis_view_foot li.backico {display:none;}</style>
    <!--{/if}-->
    <!--{if $comiis_app_switch['comiis_leftnv_back'] == 1}-->    
    <div class="comiis_footer_scroll scrolltop_l"{if $comiis_foot != 'no' || $comiis_open_footer} style="bottom:100px;"{/if}>
        <!--{if count($comiis_app_nav['ynav'])}-->
            <!--{loop $comiis_app_nav['ynav'] $temp}-->
                <!--{if $temp['url'] == ':comiis_back:'}-->
                    <a href="javascript:history.back();"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
            <!--{/loop}-->
        <!--{/if}-->
    </div>
    <!--{else}-->
        <!--{if $comiis_isweixin == 1 && $_G['comiis_close_header'] != 1}-->
        <div class="comiis_footer_scroll scrolltop_l"{if $comiis_foot != 'no' || $comiis_open_footer} style="bottom:100px;"{/if}>
            <!--{if count($comiis_app_nav['ynav'])}-->
                <!--{loop $comiis_app_nav['ynav'] $temp}-->
                    <!--{if $temp['url'] == ':comiis_back:'}-->
                        <a href="javascript:history.back();"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{/loop}-->
            <!--{/if}-->
        </div>
        <!--{/if}-->
    <!--{/if}-->
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_scrolltop'] > 0}-->
<div class="comiis_footer_scroll comiis_footer_scrollid{if $comiis_app_switch['comiis_scrolltop'] == 1} scrolltop_l{/if}"{if $comiis_foot != 'no' || $comiis_open_footer} style="bottom:100px;"{/if}>
    <!--{if count($comiis_app_nav['ynav'])}-->
        <!--{eval $nn=0;}-->
        <div class="comiis_lrmenu comiis_lrshow">
        <!--{loop $comiis_app_nav['ynav'] $temp}-->
            <!--{eval $nn++;}-->
            <!--{if $nn < 15}-->
                <!--{if $temp['url'] == ':comiis_top:'}-->
                    <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} onclick="$('body,html').animate({scrollTop:0}, 800);" class="comiis_scrolltops f_f" style="display:none;{if $temp['bgcolor']}background:{$temp['bgcolor']}{/if}"><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{elseif $temp['url'] == ':comiis_back:'}-->
                    <!--{if ($comiis_isweixin == 1 && $comiis_app_switch['comiis_scrolltop'] != 2) || $comiis_app_switch['comiis_leftnv_back'] == 2}-->
                    <a href="javascript:history.back();"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_head:'}-->
                    <!--{if $comiis_isweixin == 1 && $_G['comiis_close_header'] != 1}-->
                    <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} class="comiis_isweixin_key f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_reload:'}-->
                    <a href="javascript:;" onclick="history.go(0);"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{elseif $temp['url'] == ':comiis_nav:'}-->
                    <!--{if $comiis_app_switch['comiis_leftnv'] != 2}--> 
                        <!--{if $comiis_isweixin == 1 && $comiis_app_switch['comiis_leftnv'] == 1}--> 
                            <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} class="f_f comiis_leftnv_top_key"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                        <!--{elseif $comiis_app_switch['comiis_leftnv'] == 0 || $comiis_app_switch['comiis_leftnv'] == 3}--> 
                            <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} onclick="comiis_leftnv();" class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                        <!--{/if}-->
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_home:'}-->
                    <!--{if $comiis_data['default'] != 1}-->
                    <a href="./"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_showbtn:'}-->
                <!--{elseif $temp['url'] == ':comiis_msn:'}-->
                    <!--{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $comiis_app_switch['comiis_showpm'] == 2 && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <a href="home.php?mod=space&do=notice"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_a {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span><span class="comiis_rpm{if !$temp['name']}a{/if} bg_del">{echo  $_G['member']['newpm'] + $_G['member']['newprompt'];}</span></a>
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_albumbtn:'}-->
                    <!--{if $_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='album' && $_GET['from'] != 'space' && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <a href="{if $_G['uid']}home.php?mod=spacecp&ac=upload{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{elseif $temp['url'] == ':comiis_postbtn:'}-->
                    <!--{if !$subforumonly && (($_G['basescript'] == 'forum' && CURMODULE == 'forumdisplay' && $comiis_app_switch['comiis_list_fpost'] == 2) || ($_G['basescript'] == 'group' && CURMODULE == 'forumdisplay')) && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <!--{if $comiis_app_switch['comiis_post_yindao'] == 1 && $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
                            <a href="{if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}#comiis_post_type{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if $_G['uid']}popup {/if}{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                        <!--{else}-->
                            <a href="{if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}forum.php?mod=post&action=newthread&fid=$_G['fid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                        <!--{/if}-->
                    <!--{/if}-->
                    <!--{if $comiis_data['more']['open_post'] == 1 && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <a href="{if $comiis_data['more']['open_post_url']}$comiis_data['more']['open_post_url']{else}javascript:;{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$comiis_data['more']['open_post_url']}comiis_gobtna{/if}{if !$temp['bgcolor']} bg_0{/if} f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                    <!--{if $_G['basescript'] == 'forum' && CURMODULE == 'index' && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} class="comiis_gobtna{if !$temp['bgcolor']} bg_0{/if} f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                    <!--{if $_G['basescript'] == 'portal' && CURMODULE == 'list' && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <!--{if ($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])}-->
                        <a href="{if $_G['uid']}portal.php?mod=portalcp&ac=article&catid=$cat[catid]{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                        <!--{/if}-->
                    <!--{/if}-->
                    <!--{if $_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='blog' && !$_GET['id'] && $_GET['from'] != 'space' && $comiis_app_switch['comiis_scrolltop_fenli'] == 0}-->
                        <a href="{if $_G['uid']}home.php?mod=spacecp&ac=blog{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{else}-->
                    <a href="$temp['url']"{if $temp['name']} title="$temp['name']"{/if} class="f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
            <!--{/if}-->
        <!--{/loop}-->
        </div>
    <!--{/if}-->
    <!--{if count($comiis_app_nav['ynav'])}-->
        <!--{loop $comiis_app_nav['ynav'] $temp}-->
			<!--{if $temp['url'] == ':comiis_showbtn:'}-->
				<!--{if $comiis_app_switch['comiis_scrolltop_show'] == 0}-->
                    <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} class="comiis_lrmenukey{if !$temp['bgcolor']} bg_a{/if} f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
            <!--{elseif $temp['url'] == ':comiis_msn:'}-->
                <!--{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $comiis_app_switch['comiis_showpm'] == 2 && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <a href="home.php?mod=space&do=notice"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_a {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span><span class="comiis_rpm{if !$temp['name']}a{/if} bg_del">{echo  $_G['member']['newpm'] + $_G['member']['newprompt'];}</span></a>
                <!--{/if}-->
            <!--{elseif $temp['url'] == ':comiis_albumbtn:'}-->
                <!--{if $_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='album' && $_GET['from'] != 'space' && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <a href="{if $_G['uid']}home.php?mod=spacecp&ac=upload{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
            <!--{elseif $temp['url'] == ':comiis_postbtn:'}-->
                <!--{if !$subforumonly && (($_G['basescript'] == 'forum' && CURMODULE == 'forumdisplay' && $comiis_app_switch['comiis_list_fpost'] == 2) || ($_G['basescript'] == 'group' && CURMODULE == 'forumdisplay')) && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <!--{if $comiis_app_switch['comiis_post_yindao'] == 1 && $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
                        <a href="{if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}#comiis_post_type{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if $_G['uid']}popup {/if}{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{else}-->
                        <a href="{if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}forum.php?mod=post&action=newthread&fid=$_G['fid']{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{/if}-->
                <!--{if $comiis_data['more']['open_post'] && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <a href="{if $comiis_data['more']['open_post_url']}$comiis_data['more']['open_post_url']{else}javascript:;{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$comiis_data['more']['open_post_url']}comiis_gobtna{/if}{if !$temp['bgcolor']} bg_0{/if} f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->                
                <!--{if $_G['basescript'] == 'forum' && CURMODULE == 'index' && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <a href="javascript:;"{if $temp['name']} title="$temp['name']"{/if} class="comiis_gobtna{if !$temp['bgcolor']} bg_0{/if} f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
                <!--{if $_G['basescript'] == 'portal' && CURMODULE == 'list' && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <!--{if ($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])}-->
                    <a href="{if $_G['uid']}portal.php?mod=portalcp&ac=article&catid=$cat[catid]{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                    <!--{/if}-->
                <!--{/if}-->
                <!--{if $_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='blog' && $_GET['from'] != 'space' && !$_GET['id'] && $comiis_app_switch['comiis_scrolltop_fenli'] == 1}-->
                    <a href="{if $_G['uid']}home.php?mod=spacecp&ac=blog{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if $temp['name']} title="$temp['name']"{/if} class="{if !$temp['bgcolor']}bg_0 {/if}f_f"{if $temp['bgcolor']} style="background:{$temp['bgcolor']};"{/if}><i class="comiis_font{if !$temp['name']} kmnotxt{/if}">&#x{if $temp['icon']}{$temp['icon']}{else}e632{/if};</i><span>{if $temp['name']}<em>$temp['name']</em>{/if}</span></a>
                <!--{/if}-->
                <!--{if $comiis_isweixin == 1 && $_GET['id'] == 'comiis_app_activity'}-->
                    <!--{if $comiis_app_activity_set['post_url']}-->
                    <a href="{$comiis_app_activity_set['post_url']}" title="{$comiis_lang['post24']}" class="bg_0 f_f"><i class="comiis_font">&#xe62d;</i><span><em>{$comiis_lang['post24']}</em></span></a>
                    <!--{/if}-->
                <!--{/if}-->
			<!--{/if}-->
		<!--{/loop}-->
	<!--{/if}-->
<!--{if $comiis_isweixin == 1 || $_G['comiis_close_header'] == 0}-->
    <script>
    $(document).on('click', '.comiis_isweixin_key', function() {
    $('#comiis_head').toggleClass("comiis_head_hidden");
    });
    </script>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_scrolltop_show'] == 0}-->
<script>
	$(".comiis_lrmenukey").on('click', function(e) {
		$('.comiis_lrmenu').toggleClass('comiis_lrshow');
	});
</script>
<!--{/if}-->
</div>
<!--{/if}-->
<!--{if $comiis_closefooter == 1 ||  $comiis_close_footermenu == 1}-->
	<!--{eval $comiis_foot = 'no';$comiis_open_footer = 0;}-->
<!--{/if}-->
<!--{if ($comiis_foot != 'no' || $comiis_open_footer) && count($comiis_app_nav['mnav']) || (($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && CURMODULE == 'viewthread')}-->
<div class="comiis_foot_height"></div>
<!--{/if}-->
<!--{if ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && CURMODULE == 'viewthread'}-->
    <!--{eval comiis_load('cgUgiZhPHf5zbGwxmc', 'comiis_thead_fav,comiis_my_recommend,comiis_isweixin');}-->
<!--{else}-->
    <div id="comiis_foot_box" class="ibljego">
        <!--{if ($comiis_foot != 'no' || $comiis_open_footer) && count($comiis_app_nav['mnav'])}-->
            <!--{if $comiis_close_footermenu != 1}-->
            <div id="comiis_foot_memu" class="comiis_foot_memu bg_foot b_t">
                <ul class="comiis_flex">
                <!--{eval $nn=0;$is_newprompt=0;}-->
                <!--{loop $comiis_app_nav['mnav'] $temp}-->
                    <!--{eval $nn++;}-->
                    <!--{if $nn < 7}-->
                        <!--{if $temp['url'] == ':comiisbig:'}-->
                            <li class="flex comiis_fbigbtn"><a href="javascript:;" class="comiis_openfootbox f_foot" title="$temp['name']" icon1="{$temp['icon']}" icon2="{$temp['bgcolor']}"{if $temp['name']} style="bottom:10px"{/if}><em class="bg_foot b_ok"></em><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><span class="bg_foot"><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}" class="foot_btn" /></span>{if $temp['name']}<font>$temp['name']</font>{/if}<!--{else}--><span class="bg_foot"><i class="comiis_font foot_btn bg_foot_btn f_f">&#x{$temp['icon']};</i></span>{if $temp['name']}<font>$temp['name']</font>{/if}<!--{/if}--></a></li>
                        <!--{elseif $temp['url'] == ':comiis:'}-->
                            <li class="flex comiis_fbigbtna"><a href="javascript:;" class="comiis_openfootbox" title="$temp['name']" icon1="{$temp['icon']}" icon2="{$temp['bgcolor']}"><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><span><em><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}" class="foot_btn" /></span></em><!--{else}--><i class="comiis_font foot_btn bg_foot_btn f_f">&#x{$temp['icon']};</i><!--{/if}--></a></li>
                        <!--{elseif $temp['url'] == '#comiis_post'}-->
                            <li class="flex"><a href="javascript:;" class="comiis_openfootboxg f_foot"{if $temp['name']} title="$temp['name']"{/if} icon1="{$temp['icon']}" icon2="{$temp['bgcolor']}"><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><i><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}"{if !$temp['name']} class="kmnotit"{/if} /></i><!--{else}--><i class="comiis_font{if !$temp['name']} kmnotit{/if}">&#x{$temp['icon']};</i><!--{/if}-->{if $temp['name']}<span>$temp['name']</span>{/if}</a></li>
                        <!--{elseif $temp['url'] == 'home.php?mod=space&do=profile&mycenter=1'}-->                            
                            <li class="flex f_{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}foot_on{else}foot{/if}"><a href="$temp['url']"{if $temp['name']} title="$temp['name']"{/if}><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><i><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}"{if !$temp['name']} class="kmnotit"{/if} />{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $is_newprompt==0}<span class="icon_msgs bg_del">{echo $_G['member']['newpm'] + $_G['member']['newprompt'];}</span>{/if}</i><!--{else}--><i class="comiis_font{if !$temp['name']} kmnotit{/if}">&#x{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if};{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $is_newprompt==0}<span class="icon_msgs bg_del f_f">{echo $_G['member']['newpm'] + $_G['member']['newprompt'];}</span>{/if}</i><!--{/if}-->{if $temp['name']}<span>$temp['name']</span>{/if}</a></li>
                            <!--{eval $is_newprompt=1;}-->
                        <!--{elseif $temp['url'] == 'home.php?mod=space&do=notice' || $temp['url'] == 'home.php?mod=space&do=notice&mobile=2'}-->
                            <li class="flex f_{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}foot_on{else}foot{/if}"><a href="$temp['url']"{if $temp['name']} title="$temp['name']"{/if}><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><i><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}"{if !$temp['name']} class="kmnotit"{/if} />{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $is_newprompt==0}<span class="icon_msgs bg_del">{echo $_G['member']['newpm'] + $_G['member']['newprompt'];}</span>{/if}</i><!--{else}--><i class="comiis_font{if !$temp['name']} kmnotit{/if}">&#x{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if};{if $_G['uid'] && ($_G['member'][newpm] || $_G['member'][newprompt]) && $is_newprompt==0}<span class="icon_msgs bg_del f_f">{echo $_G['member']['newpm'] + $_G['member']['newprompt'];}</span>{/if}</i><!--{/if}-->{if $temp['name']}<span>$temp['name']</span>{/if}</a></li>
                            <!--{eval $is_newprompt=1;}-->
                        <!--{else}-->
                            <li class="flex f_{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}foot_on{else}foot{/if}"><a href="$temp['url']"{if $temp['name']} title="$temp['name']"{/if}><!--{if strpos($temp['icon'], '/') !== false || strpos($temp['bgcolor'], '/') !== false}--><i><img src="{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if}"{if !$temp['name']} class="kmnotit"{/if} /></i><!--{else}--><i class="comiis_font{if !$temp['name']} kmnotit{/if}">&#x{if $temp['nav_ids'] == $comiis_nav_ids || $temp['nav_ids'] == $comiis_nav_ids2}$temp['bgcolor']{else}$temp['icon']{/if};</i><!--{/if}-->{if $temp['name']}<span>$temp['name']</span>{/if}</a></li>
                        <!--{/if}-->
                    <!--{/if}-->
                <!--{/loop}-->
                </ul>
            </div>
            <!--{/if}-->
        <!--{/if}-->
        <div class="comiis_gobtn cl">
        <!--{if $comiis_app_switch['comiis_fnav_date']}-->
            <div class="comiis_gobtn_top cl">
                <div class="comiis_fttime cl" id="comiis_show_datebox"></div>		
            </div>
        <!--{/if}-->
        <!--{if $comiis_app_switch['comiis_fnavimgs']}-->$comiis_app_switch['comiis_fnavimgs']<!--{/if}-->
        <a href="javascript:;" class="comiis_gobtn_close comiis_gobtna"><i class="comiis_font f_d">&#xe639;</i></a>
        </div>
        <div class="comiis_gobtn_box bg_f b_t cl">
            <h2 class="f_c">{$comiis_app_switch['comiis_fnav_title']}</h2>
            <ul class="cl{if $comiis_app_switch['comiis_fnav_kmnum'] == 2} kmnum2{elseif $comiis_app_switch['comiis_fnav_kmnum'] == 3} kmnum3{elseif $comiis_app_switch['comiis_fnav_kmnum'] == 4} kmnum4{elseif $comiis_app_switch['comiis_fnav_kmnum'] == 5} kmnum5{/if}">		
                <!--{loop $comiis_app_nav['fnav'] $temp}-->
                    <li><a href="$temp['url']"><!--{if strpos($temp['icon'], '/') !== false}--><img src="$temp['icon']" /><!--{else}--><span style="background:{if $temp['bgcolor']}{$temp['bgcolor']}{else}#FF9900{/if};"><i class="comiis_font f_f">&#x{if $temp['icon']}$temp['icon']{else}e651{/if};</i></span><!--{/if}-->{if $temp['name']}$temp['name']{/if}</a></li>
                <!--{/loop}-->
            </ul>
            <div class="comiis_gobtn_foot cl"></div>
        </div>
    </div>
    <script type="text/javascript"> 
    <!--{if $comiis_app_switch['comiis_fnav_date']}-->
    var sWeek = new Array({$comiis_lang['tip223']});
    var dNow = new Date();
		function comiis_timesadd0(obj){if(obj<10){return "0" +""+ obj;}else{return obj;}}
		function getFullYear(d){yr = d.getYear();if (yr < 1000) yr += 1900;return yr;}
		var calendar={lunarInfo:[0x04bd8,0x04ae0,0x0a570,0x054d5,0x0d260,0x0d950,0x16554,0x056a0,0x09ad0,0x055d2,0x04ae0,0x0a5b6,0x0a4d0,0x0d250,0x1d255,0x0b540,0x0d6a0,0x0ada2,0x095b0,0x14977,0x04970,0x0a4b0,0x0b4b5,0x06a50,0x06d40,0x1ab54,0x02b60,0x09570,0x052f2,0x04970,0x06566,0x0d4a0,0x0ea50,0x16a95,0x05ad0,0x02b60,0x186e3,0x092e0,0x1c8d7,0x0c950,0x0d4a0,0x1d8a6,0x0b550,0x056a0,0x1a5b4,0x025d0,0x092d0,0x0d2b2,0x0a950,0x0b557,0x06ca0,0x0b550,0x15355,0x04da0,0x0a5b0,0x14573,0x052b0,0x0a9a8,0x0e950,0x06aa0,0x0aea6,0x0ab50,0x04b60,0x0aae4,0x0a570,0x05260,0x0f263,0x0d950,0x05b57,0x056a0,0x096d0,0x04dd5,0x04ad0,0x0a4d0,0x0d4d4,0x0d250,0x0d558,0x0b540,0x0b6a0,0x195a6,0x095b0,0x049b0,0x0a974,0x0a4b0,0x0b27a,0x06a50,0x06d40,0x0af46,0x0ab60,0x09570,0x04af5,0x04970,0x064b0,0x074a3,0x0ea50,0x06b58,0x05ac0,0x0ab60,0x096d5,0x092e0,0x0c960,0x0d954,0x0d4a0,0x0da50,0x07552,0x056a0,0x0abb7,0x025d0,0x092d0,0x0cab5,0x0a950,0x0b4a0,0x0baa4,0x0ad50,0x055d9,0x04ba0,0x0a5b0,0x15176,0x052b0,0x0a930,0x07954,0x06aa0,0x0ad50,0x05b52,0x04b60,0x0a6e6,0x0a4e0,0x0d260,0x0ea65,0x0d530,0x05aa0,0x076a3,0x096d0,0x04afb,0x04ad0,0x0a4d0,0x1d0b6,0x0d250,0x0d520,0x0dd45,0x0b5a0,0x056d0,0x055b2,0x049b0,0x0a577,0x0a4b0,0x0aa50,0x1b255,0x06d20,0x0ada0,0x14b63,0x09370,0x049f8,0x04970,0x064b0,0x168a6,0x0ea50,0x06b20,0x1a6c4,0x0aae0,0x092e0,0x0d2e3,0x0c960,0x0d557,0x0d4a0,0x0da50,0x05d55,0x056a0,0x0a6d0,0x055d4,0x052d0,0x0a9b8,0x0a950,0x0b4a0,0x0b6a6,0x0ad50,0x055a0,0x0aba4,0x0a5b0,0x052b0,0x0b273,0x06930,0x07337,0x06aa0,0x0ad50,0x14b55,0x04b60,0x0a570,0x054e4,0x0d160,0x0e968,0x0d520,0x0daa0,0x16aa6,0x056d0,0x04ae0,0x0a9d4,0x0a2d0,0x0d150,0x0f252,0x0d520],solarMonth:[31,28,31,30,31,30,31,31,30,31,30,31],nStr2:["\u521d","\u5341","\u5eff","\u5345"],nStr3:["\u6b63","\u4e8c","\u4e09","\u56db","\u4e94","\u516d","\u4e03","\u516b","\u4e5d","\u5341","\u51ac","\u814a"],leapDays:function(y){if(this.leapMonth(y)){return((this.lunarInfo[y-1900]&0x10000)?30:29)}return(0)},monthDays:function(y,m){if(m>12||m<1){return-1}return((this.lunarInfo[y-1900]&(0x10000>>m))?30:29)},toChinaMonth:function(m){if(m>12||m<1){return-1}var s=this.nStr3[m-1];s+="\u6708";return s},toChinaDay:function(d){var s;switch(d){case 10:s='\u521d\u5341';break;case 20:s='\u4e8c\u5341';break;break;case 30:s='\u4e09\u5341';break;break;default:s=this.nStr2[Math.floor(d/10)];s+=this.nStr1[d%10]}return(s)},solar2lunar:function(y,m,d){y=parseInt(y);m=parseInt(m);d=parseInt(d);if(y<1900||y>2100){return-1}if(y==1900&&m==1&&d<31){return-1}if(!y){var objDate=new Date()}else{var objDate=new Date(y,parseInt(m)-1,d)}var i,leap=0,temp=0;var y=objDate.getFullYear(),m=objDate.getMonth()+1,d=objDate.getDate();var offset=(Date.UTC(objDate.getFullYear(),objDate.getMonth(),objDate.getDate())-Date.UTC(1900,0,31))/86400000;for(i=1900;i<2101&&offset>0;i++){temp=this.lYearDays(i);offset-=temp}if(offset<0){offset+=temp;i--}var nWeek=objDate.getDay(),cWeek=this.nStr1[nWeek];if(nWeek==0){nWeek=7}var year=i;var leap=this.leapMonth(i);var isLeap=false;for(i=1;i<13&&offset>0;i++){if(leap>0&&i==(leap+1)&&isLeap==false){--i;isLeap=true;temp=this.leapDays(year)}else{temp=this.monthDays(year,i)}if(isLeap==true&&i==(leap+1)){isLeap=false}offset-=temp}if(offset==0&&leap>0&&i==leap+1){if(isLeap){isLeap=false}else{isLeap=true;--i}}if(offset<0){offset+=temp;--i}var month=i;var day=offset+1;return{'lYear':year,'IMonthCn':(isLeap?"\u95f0":'')+this.toChinaMonth(month),'IDayCn':this.toChinaDay(day),'ncWeek':"\u661f\u671f"+cWeek}},lYearDays:function(y){var i,sum=348;for(i=0x8000;i>0x8;i>>=1){sum+=(this.lunarInfo[y-1900]&i)?1:0}return(sum+this.leapDays(y))},nStr1:["\u65e5","\u4e00","\u4e8c","\u4e09","\u56db","\u4e94","\u516d","\u4e03","\u516b","\u4e5d","\u5341"],leapMonth:function(y){return(this.lunarInfo[y-1900]&0xf)}};
		var old_date = calendar.solar2lunar();
    $('#comiis_show_datebox').html('<div class="z fttime_rq f_b">' + comiis_timesadd0(dNow.getDate()) + '</div><div class="z fttime_xq"><span class="f_b">{$comiis_lang['tip231']}' + sWeek[dNow.getDay()] + '</span><em class="f_d">/</em><span class="f_b">' + getFullYear(dNow) + '{$comiis_lang['tip232']}' + comiis_timesadd0(dNow.getMonth() + 1) + '{$comiis_lang['tip233']}</span></div><div class="z fttime_nl bg_0">' + '<div class="z fttime_nl bg_0"><h2 class="f_f">'+old_date.IMonthCn+'</h2><p class="bg_f f_c">'+old_date.IDayCn+'</p></div>' + '</div>');
    <!--{/if}-->
    $(document).on('click', '.comiis_openfootbox,.comiis_openfootboxg,.comiis_gobtna', function() {
        if($('#comiis_foot_box').hasClass('comiis_footer_showbox')){
            $('#comiis_foot_memu').css('z-index','101');
            $('.comiis_openfootboxg i').html('&#x' + $('.comiis_openfootboxg').attr('icon1') + ';').removeClass('f_0');
            $('.comiis_openfootbox i').html('&#x' + $('.comiis_openfootbox').attr('icon1') + ';');
            
            $(".comiis_openfootbox img.foot_btn").attr("src", $('.comiis_openfootbox').attr('icon1'))
            $(".comiis_openfootboxg img.foot_btn").attr("src", $('.comiis_openfootboxg').attr('icon1'))
            
            $('#comiis_foot_box,.comiis_mh_footkm').removeClass('comiis_footer_showbox');
            Comiis_Touch_on = 1;
        }else{
            Comiis_Touch_on = 0;
            $('.comiis_openfootboxg i').html('&#x' + $('.comiis_openfootboxg').attr('icon2') + ';').addClass('f_0');
            $('.comiis_openfootbox i').html('&#x' + $('.comiis_openfootbox').attr('icon2') + ';');
            
            
            $(".comiis_openfootbox img.foot_btn").attr("src", $('.comiis_openfootbox').attr('icon2'))
            $(".comiis_openfootboxg img.foot_btn").attr("src", $('.comiis_openfootboxg').attr('icon2'))		
            
            
            $('#comiis_foot_box,.comiis_mh_footkm').addClass('comiis_footer_showbox');
            $('#comiis_foot_memu').css('z-index','211');
        }
    });
    </script>
    <!--{eval loadcache('forums');}-->
<!--{/if}-->	
<!--{eval comiis_load('g7J1y0H7T0j12HU32t', '');}-->
<div id="comiis_bgbox" style="display:none;"></div>
</div>
<!--{eval}-->
$comiis_wx_title_box = str_replace("&nbsp;", '', ($comiis_app_wx_share['title'] ? strip_tags($comiis_app_wx_share['title']) : strip_tags($navtitle)));;
$comiis_wx_description_box = str_replace("&nbsp;", '', ($comiis_app_wx_share['desc'] ? strip_tags($comiis_app_wx_share['desc']) : ($metadescription ? strip_tags($metadescription) : ($comiis_lang['view48'].': '.($comiis_app_switch['comiis_sitename'] ? $comiis_app_switch['comiis_sitename'] : $_G['setting']['sitename'])))));<!--{/eval}-->
<div id="comiis_wx_title_box" style="display:none;">{$comiis_wx_title_box}</div>
<div id="comiis_wx_description_box" style="display:none;">{$comiis_wx_description_box}</div>
{if $comiis_app_switch['comiis_share_html']}
	{$comiis_app_switch['comiis_share_html']}
{/if}
<script>
<!--{if $comiis_app_switch['comiis_loadimg']}-->
$(document).ready(function() {
	$("img.comiis_loadimages").lazyload();
});
<!--{/if}-->
$(document).on('click', '.comiis_openrebox', function() {
	<!--{if $_G['uid']}-->
		comiis_openrebox(1);
	<!--{else}-->
		<!--{if intval($_GET['pid']) || (!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}-->
			popup.open('{lang nologin_tip}', 'confirm', 'member.php?mod=logging&action=login');
		<!--{else}-->	
			comiis_openrebox(1);
		<!--{/if}-->
	<!--{/if}-->
	return false;
});
var comiis_wx_title, comiis_wx_description, comiis_wx_imgUrl, comiis_wx_url;
$(document).ready(function(){
	comiis_wx_title = $('#comiis_wx_title_box').html();
	comiis_wx_description = $('#comiis_wx_description_box').html();
	<!--{if $comiis_app_wx_share['img']}-->
		comiis_wx_img = "{if strpos($comiis_app_wx_share['img'], 'http') === false}{$_G['siteurl']}{/if}{$comiis_app_wx_share['img']}";
	<!--{else}-->
		var comiis_wx_img_objs;
		<!--{if ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && CURMODULE == 'viewthread'}-->
			var comiis_wx_img_obj = $(".comiis_flxx_style img[comiis_loadimages*='/attachment/'],.comiis_flxx_style img[comiis_loadimages*='forum.php?mod=image'],.comiis_flxx_style img[src*='/attachment/'],.comiis_flxx_style img[src*='forum.php?mod=image'],.comiis_messages img[comiis_loadimages*='/attachment/'],.comiis_messages img[comiis_loadimages*='forum.php?mod=image'],.comiis_messages img[src*='/attachment/'],.comiis_messages img[src*='forum.php?mod=image']");
		<!--{elseif ($_G['basescript'] == 'portal') && CURMODULE == 'view' || $_G['basescript'] == 'home' && CURMODULE == 'space' && $_GET['do']=='blog' && $_GET['id']}-->
			var comiis_wx_img_obj = $(".view_body img[comiis_loadimages*='/attachment/'],.view_body img[comiis_loadimages*='forum.php?mod=image'],.view_body img[src*='/attachment/'],.view_body img[src*='forum.php?mod=image']");
		<!--{else}-->
			var comiis_wx_img_obj = $(".comiis_bodybox img[comiis_loadimages*='/attachment/'],.comiis_bodybox img[comiis_loadimages*='forum.php?mod=image'],.comiis_bodybox img[src*='/attachment/'],.comiis_bodybox img[src*='forum.php?mod=image']");
		<!--{/if}-->
		for(var i = 0; i < comiis_wx_img_obj.length; i++){
			if(comiis_wx_img_obj[i].width >= 48 && comiis_wx_img_obj[i].height >= 48){
				if(comiis_wx_img_obj[i].src.indexOf("none.png") > 0 && !$(comiis_wx_img_obj[i]).attr('comiis_loadimages')){
				}else{
					comiis_wx_img_objs = comiis_wx_img_obj[i];
					break;
				}
			}
		}
		var comiis_wx_img = $(comiis_wx_img_objs).attr('comiis_loadimages');
		if(typeof(comiis_wx_img)=="undefined"){
			comiis_wx_img = $(comiis_wx_img_objs).attr('src');
			if(typeof(comiis_wx_img)=="undefined"){
				comiis_wx_img = '{$comiis_app_switch['comiis_wximg']}';
			}
		}
	<!--{/if}-->
		comiis_wx_imgUrl = ((comiis_wx_img.indexOf("ttp://") > 0 || comiis_wx_img.indexOf("ttps://") > 0) ? '' : "{$_G['siteurl']}") + comiis_wx_img;
		comiis_wx_url = window.location.href.replace('&mobile=2', '');
	<!--{if $_G['uid'] && !isset($_G['cookie']['checkpm'])}-->
	setTimeout(function(){
		$.ajax({
			type:'GET',
			url: 'home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]' ,
			dataType:'xml',
		});
	}, 1000);
	<!--{/if}-->
	<!--{if $comiis_isweixins}-->
		<!--{if $comiis_app_switch['comiis_wxappid'] && $comiis_app_switch['comiis_wxappsecret']}-->
			<!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/jssdk.php';}-->
				setTimeout(function(){
					wx.config({
						debug: 0,
						appId: '{$comiis_signPackage["appId"]}',
						timestamp: '{$comiis_signPackage["timestamp"]}',
						nonceStr: '{$comiis_signPackage["nonceStr"]}',
						signature: '{$comiis_signPackage["signature"]}',
						jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareQZone', 'updateAppMessageShareData', 'onMenuShareWeibo', 'updateTimelineShareData', 'getLocation', 'openLocation'{if $_G['comiis_jsApiList']}{$_G['comiis_jsApiList']}{/if}]
					});
				}, 200);
				wx.ready(function () {
					var comiis_wx_share_data = {
						title: comiis_wx_title,
						desc: comiis_wx_description,
						imgUrl: comiis_wx_imgUrl,
						link: comiis_wx_url
					}
					//wx.updateAppMessageShareData(comiis_wx_share_data);
					//wx.updateTimelineShareData(comiis_wx_share_data);	
					wx.onMenuShareWeibo(comiis_wx_share_data);
					wx.onMenuShareAppMessage(comiis_wx_share_data);
					wx.onMenuShareQQ(comiis_wx_share_data);
					wx.onMenuShareQZone(comiis_wx_share_data);
					wx.onMenuShareTimeline(comiis_wx_share_data);
				});
		<!--{/if}-->
	<!--{/if}-->
});
</script>
<!--{hook/global_footer_mobile}-->
<!--{if $comiis_app_switch['comiis_foot_backico'] < 2 && $comiis_is_new_url == 1}-->
<script>$('.backico').html('<li class="backico" style="margin-left:3px;"><a href="./" class="b_r"><i class="comiis_font f_0" style="line-height:24px;">&#xe8c8;</i></a></li>');</script>
<!--{/if}-->
</body>
</html>
<!--{eval}-->
	global $comiis_fsimage;
	$content = ob_get_contents();
	ob_end_clean();
	$content = output_replace($content);
	$content = str_replace(array('http://'.$_G['setting']['domain']['app']['default'].'/'), array($_G['siteurl']), $content);
	$_G['gzipcompress'] ? ob_start('ob_gzhandler') : ob_start();
	echo $content;
	updatesession();
	(function_exists("comiis_replace_https") ? comiis_replace_https() : "");output();		
<!--{/eval}-->