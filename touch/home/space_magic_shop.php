<?PHP exit('Access Denied');?>
<div class="comiis_medalbox bg_f comiis_pb0 cl">
    <div class="comiis_medaltip comiis_pb0 cl">
        <!--{if $magiccredits}-->
            <!--{if $_G['setting'][exchangestatus]}-->
                <a href="home.php?mod=spacecp&ac=credit&op=exchange" class="kmbtn y bg_a f_f"><span>{lang credit_exchange}</span></a>
            <!--{/if}-->            
            <!--{if $comiis_app_switch['comiis_jifenurl']}-->
                <a href="{$comiis_app_switch['comiis_jifenurl']}" class="kmbtn y bg_a f_f">{lang buy_credits}</a>
            <!--{else}-->
                <!--{if ($_G['setting']['ec_ratio'] && ($_G['setting']['ec_tenpay_opentrans_chnid'] || $_G['setting'][ec_tenpay_bargainor] || $_G['setting']['ec_account'])) || $_G['setting']['card']['open']}-->
                    <a href="home.php?mod=spacecp&ac=credit&op=buy" class="kmbtn y bg_a f_f"><span>{lang buy_credits}</span></a>
                <!--{/if}-->
            <!--{/if}-->
        <!--{/if}-->
        <span class="f_c">
        <!--{if $_G['group']['maxmagicsweight']}-->
            {lang magics_capacity}: <span class="f_a">$totalweight</span> / {$_G['group']['maxmagicsweight']}<br>
        <!--{/if}-->
        <!--{if $magiccredits}-->
            <!--{if $_G['group']['magicsdiscount']}-->{lang magics_discount}, <!--{/if}-->
            {lang you_have_now}
            <!--{eval $i = 0;}-->
            <!--{loop $magiccredits $id}-->
                <!--{if $i != 0}-->, <!--{/if}-->{$_G['setting']['extcredits'][$id][img]} {$_G['setting']['extcredits'][$id][title]} <span class="f_a"><!--{echo getuserprofile('extcredits'.$id);}--></span> {$_G['setting']['extcredits'][$id][unit]}
                <!--{eval $i++;}-->
            <!--{/loop}-->
        <!--{/if}-->
        </span>
    </div>
</div>
<!--{eval comiis_load('gtDoo9OVGdoc47ZcvC', 'magiclist,operation,multipage');}-->