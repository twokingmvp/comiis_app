<?PHP exit('Access Denied');?>
<div class="comiis_a comiis_message_table">$post[message]</div>
<div class="comiis_poll cl comiis_input_style b_t">
<form id="poll" name="poll" method="post" autocomplete="off" action="forum.php?mod=misc&action=votepoll&fid=$_G['fid']&tid=$_G['tid']&pollsubmit=yes{if $_GET[from]}&from=$_GET[from]{/if}&quickforward=yes&mobile=2" >
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="comiis_poll_top">
        <i class="comiis_font bg_a f_f">&#xe640;</i>
        <h2><!--{if $multiple}-->{lang poll_multiple}{lang thread_poll}<!--{if $maxchoices}--><em class="f_c"> {lang poll_more_than}</em><!--{/if}--><!--{else}-->{lang poll_single}{lang thread_poll}<!--{/if}--></h2>
        <p class="f_c"><!--{if $visiblepoll && $_G['group']['allowvote']}-->{lang poll_after_result}, <!--{/if}-->{lang poll_voterscount}</p>
        <!--{if $_G['forum_thread'][remaintime]}-->
        <p class="kmbtn">
            <span class="bg_e">{lang poll_count_down}:
            <!--{if $_G['forum_thread'][remaintime][0]}--><em class="f_a">$_G['forum_thread'][remaintime][0]</em> {lang days}<!--{/if}-->
            <!--{if $_G['forum_thread'][remaintime][1]}--><em class="f_a">$_G['forum_thread'][remaintime][1]</em> {lang poll_hour}<!--{/if}-->
            <em class="f_a">$_G['forum_thread'][remaintime][2]</em> {lang poll_minute}</span>
        </p>
        <!--{elseif $expiration && $expirations < TIMESTAMP}-->
        <p class="kmbtn"><span class="bg_e f_c">{lang poll_end}</span></p>
        <!--{/if}-->
	</div>
	<!--{eval comiis_load('StLvwXTkXBKxSjwSx6', 'isimagepoll,polloptions,optiontype,visiblepoll');}-->
    <div class="comiis_poll_bottom cl">
	<!--{if $_G['group']['allowvote'] && !$_G['forum_thread']['is_archived']}-->
		<input type="submit" name="pollsubmit" id="pollsubmit" value="{lang submit}" class="formdialog comiis_btn kmshow bg_c f_f" />
		<!--{if $overt}-->
		<div class="comiis_quote bg_h b_dashed f_a"><i class="comiis_font">&#xe69d;</i>{lang poll_msg_overt}</div>
		<!--{/if}-->
	<!--{elseif !$allwvoteusergroup}-->
		<!--{if !$_G['uid']}-->
		<div class="comiis_quote bg_h b_dashed"><i class="comiis_font f_a">&#xe69d;</i>{$comiis_lang['poll_msg_allwvote_user']}</div>
		<!--{else}-->
		<div class="comiis_quote bg_h b_dashed f_a"><i class="comiis_font">&#xe69d;</i>{lang poll_msg_allwvoteusergroup}</div>
		<!--{/if}-->
	<!--{elseif !$allowvotepolled}-->
		<div class="comiis_quote bg_h b_dashed f_a"><i class="comiis_font">&#xe69d;</i>{lang poll_msg_allowvotepolled}</div>
	<!--{elseif !$allowvotethread}-->
		<div class="comiis_quote bg_h b_dashed f_a"><i class="comiis_font">&#xe69d;</i>{lang poll_msg_allowvotethread}</div>
	<!--{/if}-->
	</div>	
</form>
</div>
<script>
<!--{if $optiontype=='checkbox'}-->
	var max_obj = $maxchoices;
	var p = 0;
	function poll_checkbox(obj) {
		if(obj.checked) {
			if(p >= max_obj) {
				obj.checked = false;
				popup.open('{$comiis_lang['view26']} ' + max_obj + ' {$comiis_lang['view27']}', 'alert');
				return false;
			}else{
				p++;
			}
		} else {
			p--;
		}
		document.getElementById('pollsubmit').disabled = p <= max_obj && p > 0 ? false : true;
	}
<!--{/if}-->
</script>