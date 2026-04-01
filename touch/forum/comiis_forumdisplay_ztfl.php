<?PHP exit('Access Denied');?>
<!--{block comiis_ztfl}-->
    <!--{if $thread['digest'] > 0}-->
        <span class="bg_c f_f">{$comiis_lang['thread_digest']}</span>
    <!--{elseif $thread[folder] == 'lock'}-->
        <span class="bg_del f_f">{$comiis_lang['close']}</span>
    <!--{elseif $thread['special'] == 1}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_poll']}</span>
    <!--{elseif $thread['special'] == 2}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_trade']}</span>
    <!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_reward']}</span><span class="bg_a f_f">{lang reward_solved}</span>
    <!--{elseif $thread['special'] == 3}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_reward']}</span><span class="bg_a f_f"><i class="comiis_font">&#xe6e4</i>$thread[price]{$_G['setting'][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting'][extcredits][$_G['setting']['creditstransextra'][2]][title]}</span>
    <!--{elseif $thread['special'] == 4}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_activity']}</span>
    <!--{elseif $thread['special'] == 5}-->
        <span class="bg_0 f_f">{$comiis_lang['thread_debate']}</span>
    <!--{/if}-->
    <!--{if $rushreply}--><span class="bg_a f_f">{$comiis_lang['rushreply']}</span><!--{/if}-->
    <!--{if $thread['rushreply']}-->
        <span class="bg_0 f_f">{lang rushreply}</span>
    <!--{/if}-->
    <!--{if $thread['replycredit'] > 0}-->
        <span class="bg_a f_f"><i class="comiis_font">&#xe737</i>{$comiis_lang['tip374']}</span>
    <!--{/if}-->
    <!--{if $thread['displayorder'] == 0 && $comiis_app_switch['comiis_list_hotico'] == 1}-->
        <!--{if $thread[recommendicon] && $filter != 'recommend'}-->
            <span class="bg_c f_f" title="{lang thread_recommend} $thread[recommends]">{$comiis_lang['tip282']}</span>
        <!--{/if}-->
        <!--{if $thread[heatlevel]}-->        
            <span class="bg_a f_f" title="{lang heats}: {$thread[heats]}"><i class="comiis_font kmhotico">&#xe64e</i></span>
        <!--{/if}-->
    <!--{/if}-->
<!--{/block}-->