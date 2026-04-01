<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']}-->
<div class="comiis_tg_box">
    <div class="comiis_tg_code_box bg_f cl">
        <div class="comiis_tg_tximg bg_f"><img src="{echo avatar($_G['uid'],middle,true)}?{echo time();}" class="vm"></div> 
        <div class="comiis_tg_kmtit">{$_G['member'][username]}</div> 
        <div class="comiis_tg_kmtxt f_d">UID: $_G['uid']</div>        
        <div class="comiis_tg_code_img"></div>
        <div class="comiis_tg_kmtxt f_d">{$comiis_lang['tip302']}</div>
    </div>
    <div class="comiis_tg_box_tip f_c cl">    
        <!--{if $_G['setting']['creditspolicy']['promotion_visit']}-->{$comiis_lang['post_promotion_url']}<!--{/if}-->
        <!--{if $_G['setting']['creditspolicy']['promotion_register']}-->
            <!--{if $_G['setting']['creditspolicy']['promotion_visit']}-->
                <br>{$comiis_lang['post_promotion_reg']}
            <!--{else}-->
                <br>{$comiis_lang['post_promotion']}
            <!--{/if}-->
        <!--{/if}-->
    </div>
</div>
<script src="template/comiis_app/comiis/js/jquery.qrcode.min.js?{VERHASH}"></script>
<script>$('.comiis_tg_code_img').qrcode({width: 240, height: 240, text: "{$_G['siteurl']}?fromuid={$_G['uid']}"});</script>
<!--{/if}-->
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->