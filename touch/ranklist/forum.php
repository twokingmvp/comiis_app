<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/comiis_forum_ranklist.php';}-->
<!--{if $comiis_app_switch['comiis_forumtimgs']}-->
    <div class="cl" style="position:relative;">
        $comiis_app_switch['comiis_forumtimgs']
        <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box" style="bottom:-6px;"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
    </div>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:41px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
    <ul class="comiis_flex">
        <li class="flex{if $_GET[view] == 'threads'} f_0{/if}">{if $_GET[view] == 'threads'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=forum&view=threads"{if $_GET[view] != 'threads'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">โพสต์</a></li>
        <li class="flex{if $_GET[view] == 'posts'} f_0{/if}">{if $_GET[view] == 'posts'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=forum&view=posts"{if $_GET[view] != 'posts'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">ตอบกลับ</a></li>
        <li class="flex{if $_GET[view] == 'today'} f_0{/if}">{if $_GET[view] == 'today'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=forum&view=today"{if $_GET[view] != 'today'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_topnv">มาแรงวันนี้</a></li>
    </ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="styli_h10 bg_e b_b"></div>
<div class="comiis_ranklist_box cl">
<!--{if $forumsrank}-->
    <div class="comiis_bkphb">
        <div class="comiis_ranklist cl">        
            <ul>            
            <!--{loop $forumsrank $forum}-->
                <li<!--{if $forum['rank']%2==1}--> class="bg_e"<!--{/if}-->>
                    <a href="forum.php?mod=forumdisplay&fid=$forum['fid']">
                        <span class="y f_c">            
                            $forum['posts']
                            <!--{if $_GET[view] == 'today'}-->{$comiis_lang['view5']}
                            <!--{elseif $_GET[view] == 'posts'}-->{lang reply}
                            <!--{elseif $_GET[view] == 'thismonth'}-->{$comiis_lang['view5']}
                            <!--{else}-->{$comiis_lang['view5']}<!--{/if}-->                            
                        </span>
                        <span class="user_mun f_c"><!--{if $forum['rank'] <= 3}--><img src="{IMGDIR}/comiis_rank$forum['rank'].png" alt="$forum['rank']" /><!--{else}-->$forum['rank']<!--{/if}--></span>
                        <img src="{if $comiis_forum_icon_s[$forum['fid']]['icon']}{$comiis_forum_icon_s[$forum['fid']]['icon']}{else}./template/comiis_app/comiis/img/forum_new.png{/if}" />
                        <span class="user_tit">$forum['name']</span>
                    </a>
                </li>
            <!--{/loop}-->
            </ul>
        </div>
    </div>
<!--{else}-->
    <div class="comiis_notip mt10 cl">
        <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
            <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
        <!--{else}-->
            <i class="comiis_font f_e cl">&#xe613</i>
        <!--{/if}-->
        <span class="f_d">{$comiis_lang['all22']}</span>
    </div>
<!--{/if}-->
<div class="comiis_vfgohome f_d mb10" style="text-align:center;">{$comiis_lang['ranklist_update']}</div>
</div>
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->