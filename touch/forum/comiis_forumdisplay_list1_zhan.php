<?PHP exit('Access Denied');?>
<!--{if $_GET['is_comiis_wdlist'] == 1}-->
    <div class="{if count($comiis_memberrecommend_array[$thread['tid']]) || count($comiis_reply_list_array[$thread['tid']])}comiis_wxlist_showbox{/if}cl">
    <!--{if $comiis_app_switch['comiis_recommend_open'] == 0}-->
        <div class="comiis_all_txshow cl"{if !count($comiis_memberrecommend_array[$thread['tid']])} style="display:none"{/if}>
            <ul class="cl">
                <!--{eval $key=0}-->
                <!--{loop $comiis_memberrecommend_array[$thread['tid']] $temp}-->
                    <!--{eval $key++}-->
                    <!--{if !$comiis_app_switch['comiis_pyqlist_hynum'] || $key <= $comiis_app_switch['comiis_pyqlist_hynum']}-->
                        <li><a href="home.php?mod=space&uid={$temp['uid']}&do=profile" id="tid_{$thread['tid']}_uid_{$temp['uid']}" class="bg_f"><img src="{echo avatar($temp['uid'], 'small', true)}"></a></li>
                    <!--{/if}-->
                <!--{/loop}-->
                <span><a href="misc.php?op=recommend&tid=$thread['tid']&mod=faq" class="num-all_{$thread['tid']} f14 f_c">{if $thread[recommend_add]}{$thread[recommend_add]}{/if}{$comiis_lang['view7']}</a></span>
            </ul>
        </div>
    <!--{/if}-->
    </div>
    <ul class="reply_list cl">
        <div class="reply_tit"><a href="forum.php?mod=viewthread&tid=$thread['tid']"><i class="comiis_font f_e">&#xe67b</i><span class="f_d">{$thread['views']}{$comiis_lang['view47']}</span><i class="comiis_font f_e">&#xe64f</i><span class="f_d">{$thread['replies']}{$comiis_lang['all53']}</span></a></div>
        <!--{loop $comiis_reply_list_array[$thread['tid']] $temp}-->
        <li id="retid_{$thread['tid']}_pid_{$temp['pid']}"><span class="f_ok">{if $temp['author']}<a href="home.php?mod=space&uid={$temp['authorid']}&do=profile" class="top_user f_ok">$temp['author']</a>{else}<a href="javascript:;" class="top_user f_ok">{$_G['setting'][anonymoustext]}</a>{/if}</span><!--{if $temp['re_name']}--> <span class="f_b">{$comiis_lang['reply']}</span> <a href="{if $temp['re_name'] == $comiis_lang['tip138']}javascript:;{else}home.php?mod=space&username={$temp['encode_name']}{/if}" class="top_user f_ok">$temp['re_name']</a><!--{/if}--><span class="f_b">: <a href="{if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}forum.php?mod=post&action=reply&fid={$thread['fid']}&tid={$temp['tid']}{if $temp['authorid'] != $_G['uid']}&repquote={$temp['pid']}{/if}{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}" {if !(!$_G['uid'] && !((!$_G['forum']['postperm'] && $_G['group']['allowpost']) || ($_G['forum']['postperm'] && forumperm($_G['forum']['postperm']))))}class="dialog"{/if}>$temp['message']</a></span></li>
        <!--{/loop}-->
        <!--{if $comiis_app_switch['comiis_pyqlist_hfnum'] && ($thread['replies'] > $comiis_app_switch['comiis_pyqlist_hfnum'])}-->
        <li><a href="forum.php?mod=viewthread&tid=$thread['tid']&extra=$extra" class="f_b">{$comiis_lang['all5']}...</a>
        <!--{/if}-->
    </ul>
<!--{else}-->
<!--{echo comiis_load('V4mI0abRYqqnIuR2F0', 'comiis_memberrecommend_array,comiis_reply_list_array,thread')}-->
<!--{/if}-->