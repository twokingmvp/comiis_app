<?PHP exit('Access Denied');?>
<!--{if $operation == 'uselog'}-->
	<!--{if $loglist}-->
        <div class="comiis_credits_log bg_f cl">
            <ul>
            <!--{loop $loglist $log}-->
                <li class="xtlist b_b">
                    <h2><span class="f_d y">$log['dateline']</span><span class="f_0">$log[name]</span></h2>
                    <p class="f_c">
                        <!--{if $log[idtype] == 'uid'}-->
                            <a href="home.php?mod=space&uid=$log[targetid]&do=profile">{$comiis_lang['tip355']}</a>
                        <!--{elseif $log[idtype] == 'tid'}-->
                            <a href="forum.php?mod=viewthread&tid=$log[targetid]">{$comiis_lang['tip356']}</a>
                        <!--{elseif $log[idtype] == 'pid'}-->
                            <a href="forum.php?mod=redirect&pid=$log[targetid]&goto=findpost">{$comiis_lang['tip357']}</a>
                        <!--{elseif $log[idtype] == 'sell'}-->
                            {lang magics_operation_sell}{$comiis_lang['tip354']}
                        <!--{elseif $log[idtype] == 'drop'}-->
                            {lang magics_operation_drop}{$comiis_lang['tip354']}
                        <!--{/if}-->
                    </p>
                </li>
            <!--{/loop}-->
            </ul>
        </div>			
		<!--{if $multipage}--><div class="mb5 cl">$multipage</div><!--{/if}-->
	<!--{else}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang data_nonexistence}</span>
        </div>
	<!--{/if}-->
<!--{elseif $operation == 'buylog'}-->
	<!--{if $loglist}-->
        <div class="comiis_credits_log bg_f cl">
            <ul>
            <!--{loop $loglist $log}-->
                <li class="xtlist b_b">
                    <h2><span class="f_d y">$log['dateline']</span><span class="f_0">$log[name]</span></h2>
                    <p class="f_c">
                        <span>{lang magics_amount_buy} <em class="f_a">{$log[amount]}</em></span> {lang magics_price_buy} <em class="f_a">$log[price]</em> {$_G['setting']['extcredits'][$log[credit]][unit]}{$_G['setting']['extcredits'][$log[credit]][title]}
                    </p>
                </li>
            <!--{/loop}-->
            </ul>
        </div>	
		<!--{if $multipage}--><div class="mb5 cl">$multipage</div><!--{/if}-->
	<!--{else}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang data_nonexistence}</span>
        </div>
	<!--{/if}-->
<!--{elseif $operation == 'givelog'}-->
	<!--{if $loglist}-->
        <div class="comiis_credits_log bg_f cl">
            <ul>
            <!--{loop $loglist $log}-->
                <li class="xtlist b_b">
                    <h2><span class="f_d y">{lang magics_amount_present}: $log[amount]</span><span class="f_d">$log['dateline']</span></h2>
                    <p><em class="f_c">{lang magics_target_present}</em> <a href="home.php?mod=space&uid=$log[targetuid]&do=profile" class="f_0">$log[username]</a> <em class="f_c">$log[name]</em></p>
                </li>
            <!--{/loop}-->
            </ul>
        </div>
		<!--{if $multipage}--><div class="mb5 cl">$multipage</div><!--{/if}-->
	<!--{else}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang data_nonexistence}</span>
        </div>
	<!--{/if}-->
<!--{elseif $operation == 'receivelog'}-->
	<!--{if $loglist}-->
        <div class="comiis_credits_log bg_f cl">
            <ul>
            <!--{loop $loglist $log}-->
                <li class="xtlist b_b">
                    <h2><span class="f_d y">{lang magics_amount_receive}: $log[amount]</span><span class="f_d">$log['dateline']</span></h2>
                    <p><a href="home.php?mod=space&uid=$log['uid']&do=profile" class="f_0">$log[username]</a> <em class="f_c">{$comiis_lang['tip358']} $log[name]</em></p>
                </li>
            <!--{/loop}-->
            </ul>
        </div>
		<!--{if $multipage}--><div class="mb5 cl">$multipage</div><!--{/if}-->
	<!--{else}-->
        <div class="comiis_notip mt10 cl">
            <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
            <!--{else}-->
                <i class="comiis_font f_e cl">&#xe613</i>
            <!--{/if}-->
            <span class="f_d">{lang data_nonexistence}</span>
        </div>
	<!--{/if}-->
<!--{/if}-->