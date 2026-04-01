<?PHP exit('Access Denied');?>
<!--{if $_GET['from'] != 'space'}--><!--{eval $comiis_bg = 1;}--><!--{/if}-->
<!--{template common/header}-->
<!--{if $_GET['from']=='space'}-->
	<!--{template home/space_header}-->
	<div class="bg_f b_t mt10">
<!--{else}-->
    <!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:40px;"><div class="comiis_scrollTop_box"><!--{/if}-->
	<div class="comiis_topnv b_b">
		<ul class="comiis_flex">
			<!--{if $_G['uid'] == $space['uid']}-->
				<li class="flex{if $actives[me]} f_0{/if}">{if $actives[me]}<em class="bg_0"></em>{/if}<a href="{if $_G['uid']}home.php?mod=space&do=album&view=me{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if !$actives[me]} class="f_c"{/if} comiis_ajax=".comiis_album_box" comiis_t_ajax=".comiis_topnv">{lang my_album}</a></li>
			<!--{else}-->
				<li class="flex{if $actives[me]} f_0{/if}">{if $actives[me]}<em class="bg_0"></em>{/if}<a href="javascript:;"{if !$actives[me]} class="f_c"{/if}>Ta{lang eccredit_s}{lang album}</a></li>
			<!--{/if}-->
			<li class="flex{if $actives[we]} f_0{/if}">{if $actives[we]}<em class="bg_0"></em>{/if}<a href="{if $_G['uid']}home.php?mod=space&do=album&view=we{elseif !$_G[connectguest]}javascript:popup.open('{$comiis_lang['tip16']}', 'confirm', 'member.php?mod=logging&action=login');{else}javascript:popup.open('{$comiis_lang['reg23']}', 'confirm', 'member.php?mod=connect');{/if}"{if !$actives[we]} class="f_c"{/if} comiis_ajax=".comiis_album_box" comiis_t_ajax=".comiis_topnv">{lang friend_album}</a></li>
			<li class="flex{if $actives[all]} f_0{/if}">{if $actives[all]}<em class="bg_0"></em>{/if}<a href="home.php?mod=space&do=album&view=all"{if !$actives[all]} class="f_c"{/if} comiis_ajax=".comiis_album_box" comiis_t_ajax=".comiis_topnv">{lang view_all}</a></li>
		</ul>
	</div>
	<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<!--{/if}-->
<div class="comiis_album_box">
<!--{if $count}-->
	<!--{eval comiis_load('t9V4xOZqIyVL9i12dv', 'list,space');}-->
<!--{if $multi}-->$multi<!--{/if}-->
<!--{else}-->
	<!--{if $space[self] && $_GET['view']=='me'}-->
		<div class="comiis_album_list cl">
			<ul>
				<li>
				<a href="home.php?mod=space&uid=$value['uid']&do=album&id=-1"><img src="{IMGDIR}/comiis_noalbum.jpg" class="vm"><span class="album_tit">{lang default_album}</span></a>
				</li>
			</ul>
		</div>
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
</div>
<!--{if $_GET['from']=='space'}-->
	<!--{if $space['uid'] == $_G['uid']}-->
	</div>
	<div class="cl" style="height:40px;"></div>
	<div class="comiis_space_footfb bg_f b_t">
		<a href="home.php?mod=spacecp&ac=upload"><i class="comiis_font f_wb">&#xe642;</i><span class="f_b">{lang publish}{lang album}</span></a>
	</div>
	<!--{else}-->
	</div>
	<!--{template home/space_footer}-->
	<!--{/if}-->
<!--{/if}-->
{eval}
$comiis_app_wx_share['img'] = './template/comiis_app/pic/icon152.png';
$comiis_app_wx_share['title'] = $comiis_lang['tip402'].'{lang album}'.$comiis_lang['tip401'];
$comiis_app_wx_share['desc'] = $comiis_lang['view48'].': '.($comiis_app_switch['comiis_sitename'] ? $comiis_app_switch['comiis_sitename'] : $_G['setting']['sitename']);
{/eval}
<!--{eval $comiis_foot = 'no';}-->
    		  	  		  	  		     	  	 			    		   		     		       	   	 		    		   		     		       	   	 		    		   		     		       	   				    		   		     		       	   		      		   		     		       	   	 	    		   		     		       	 	        		   		     		       	 	        		   		     		       	   				    		   		     		       	   		 	    		   		     		       	  				     		   		     		       	   		      		   		     		       	  	        		   		     		       	   				    		   		     		       	  	 	      		   		     		       	  				     		   		     		       	  	   	    		   		     		       	 	   	    		   		     		       	  			      		   		     		       	  	        		   		     		       	  	  	     		   		     		       	 	        		 	      	  		  	  		     	
<!--{template common/footer}-->