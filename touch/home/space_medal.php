<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_medaltimgs']}-->
    <div class="cl" style="position:relative;">
        <!--{if $comiis_app_switch['comiis_medaltimgs']}-->$comiis_app_switch['comiis_medaltimgs']<!--{/if}-->
        <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box" style="bottom:-6px;"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
    </div>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:41px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
    <ul class="comiis_flex">
        <li class="flex{if empty($_GET[action])} f_0{/if}">{if empty($_GET[action])}<em class="bg_0"></em>{/if}<a href="home.php?mod=medal&km=1"{if !empty($_GET[action])} class="f_c"{/if} comiis_ajax=".comiis_medal_box" comiis_t_ajax=".comiis_topnv">{lang medals_center}</a></li>
        <li class="flex{if $_GET[action] == 'log'} f_0{/if}">{if $_GET[action] == 'log'}<em class="bg_0"></em>{/if}<a href="home.php?mod=medal&action=log"{if $_GET[action] != 'log'} class="f_c"{/if} comiis_ajax=".comiis_medal_box" comiis_t_ajax=".comiis_topnv">{lang my_medals}</a></li>
    </ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="styli_h10 bg_e b_b"></div>
<div class="comiis_medal_box">
<!--{if empty($_GET[action])}-->
    <!--{if $medallist}-->
        <!--{eval comiis_load('sCD3U3DijRy2udB3mU', 'medalcredits,medallist,membermedal,mymedals');}-->
    <!--{else}-->
        <!--{if $medallogs}-->
            <div class="comiis_notip mt10 f_a cl">
                <i class="comiis_font comiis_tm cl">&#xe690;</i>
                <span>{lang medals_nonexistence}</span>
            </div>
        <!--{else}-->
            <div class="comiis_notip mt10 cl">
                <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                    <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
                <!--{else}-->
                    <i class="comiis_font f_e cl">&#xe613</i>
                <!--{/if}-->
                <span class="f_d">{lang medals_noavailable}</span>
            </div>
        <!--{/if}-->
    <!--{/if}-->
    <!--{if $lastmedals}-->
        <div class="styli_h10 bg_e b_t b_b"></div>
        <div class="comiis_uibox cl">
            <h2 class="b_b"><span class="f_c">{lang medals_record}</span></h2>    
            <div class="comiis_userlist01 cl">
                <ul>
                    <!--{loop $lastmedals $lastmedal}-->
                    <li class="b_t">
                    <a href="home.php?mod=space&uid=$lastmedal['uid']&do=profile" class="block">
                        <span class="list01_limg bg_e"><!--{avatar($lastmedal['uid'],'middle')}--></span>
                        <p class="tit"><font class="y f12 f_e">$lastmedal['dateline']</font>$lastmedalusers[$lastmedal['uid']][username]</p>
                        <p class="txt f_d">{lang medals_message2}{$medallist[$lastmedal['medalid']]['name']}{lang medals}</p>
                    </a>
                    </li>
                    <!--{/loop}-->                    
                </ul>
            </div>
        </div>
    <!--{/if}-->
<!--{elseif $_GET[action] == 'log'}-->
    <!--{if $mymedals}-->
        <div class="comiis_medalbox bg_f cl">
            <ul>
            <!--{loop $mymedals $mymedal}-->                
                <li class="medal_li bg_e">
                    <div class="medal_img"><img src="{if strpos($mymedal[image], 'image/') == false}{STATICURL}image/common/{/if}$mymedal[image]" alt="$mymedal[name]" class="vm" /></div>
                    <p class="medal_mytit f_c">$mymedal[name]</p>
                </li>
            <!--{/loop}-->
            </ul>
        </div>
    <!--{/if}-->
    <!--{if $medallogs}-->
        <div class="styli_h10 bg_e b_t b_b"></div>
        <div class="comiis_uibox cl">
            <h2 class="b_b"><span class="f_c">{lang medals_record}</span></h2>    
            <div class="comiis_userlist01 cl">
                <ul>
                    <!--{loop $medallogs $medallog}-->
                    <li class="b_t f13 f_b">
                        <!--{if $medallog['type'] == 2 || $medallog['type'] == 3}-->
                            $medallog['dateline'] {lang medals_message4} <span class="f_ok">$medallog[name]</span> {lang medals},<!--{if $medallog['type'] == 2}-->{lang medals_operation_2}<!--{elseif $medallog['type'] == 3}-->{lang medals_operation_3}<!--{/if}-->
                        <!--{elseif $medallog['type'] != 2 && $medallog['type'] != 3}-->
                            $medallog['dateline'] {lang medals_message5} <span class="f_ok">$medallog[name]</span> {lang medals},<!--{if $medallog[expiration]}-->{lang expire}: $medallog[expiration]<!--{else}-->{lang medals_noexpire}<!--{/if}-->
                        <!--{/if}-->
                    </li>
                    <!--{/loop}-->                  
                </ul>
            </div>
        </div>
        <!--{if $multipage}--><div class="comiis_pgs cl">$multipage</div><!--{/if}-->
    <!--{else}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang medals_nonexistence_own}</span>
        </div>
    <!--{/if}-->
<!--{/if}-->
</div>
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->