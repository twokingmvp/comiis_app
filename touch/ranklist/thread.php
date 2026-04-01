<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $comiis_app_switch['comiis_phbtimgs']}-->
    <div class="cl" style="position:relative;">
        $comiis_app_switch['comiis_phbtimgs']
        <!--{if $comiis_app_switch['comiis_svg'] != 1}--><div class="comiis_svg_box" style="bottom:-6px;"><div class="comiis_svg_a"></div><div class="comiis_svg_b"></div></div><!--{/if}-->
    </div>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--><div style="height:41px;"><div class="comiis_scrollTop_box"><!--{/if}-->
<div class="comiis_topnv bg_f b_b">
    <ul class="comiis_flex">
        <li class="flex{if $_GET[view] == 'replies'} f_0{/if}">{if $_GET[view] == 'replies'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=thread&view=replies&orderby=thismonth"{if $_GET[view] != 'replies'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box_all" comiis_t_ajax=".comiis_topnv">ตอบกลับ</a></li>
        <li class="flex{if $_GET[view] == 'views'} f_0{/if}">{if $_GET[view] == 'views'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=thread&view=views&orderby=thismonth"{if $_GET[view] != 'views'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box_all" comiis_t_ajax=".comiis_topnv">เข้าถึง</a></li>
        <li class="flex{if $_GET[view] == 'heats'} f_0{/if}">{if $_GET[view] == 'heats'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=thread&view=heats&orderby=thismonth"{if $_GET[view] != 'heats'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box_all" comiis_t_ajax=".comiis_topnv">ยอดนิยม</a></li>
        <li class="flex{if $_GET[view] == 'favtimes'} f_0{/if}">{if $_GET[view] == 'favtimes'}<em class="bg_0"></em>{/if}<a href="misc.php?mod=ranklist&type=thread&view=favtimes&orderby=thismonth"{if $_GET[view] != 'favtimes'} class="f_c"{/if} comiis_ajax=".comiis_ranklist_box_all" comiis_t_ajax=".comiis_topnv">ถูกใจ</a></li>
    </ul>
</div>
<!--{if $comiis_app_switch['comiis_subnv_top'] != 1}--></div></div><!--{/if}-->
<div class="styli_h10 bg_e b_b"></div>
<div class="comiis_ranklist_box_all">
	<div class="comiis_top_sub bg_f b_b" style="height:36px;">
			<div id="comiis_top_box">
					<div id="comiis_sub_btn">
							<ul>
								 <li><a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=thismonth&t=1" id="2592000" class="{if $orderby == 'thismonth'}f_0{else}f_d{/if}" comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_top_sub">{lang ranklist_month}</a></li>
								 <li><span class="comiis_tm f_d">/</span><a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=thisweek" id="604800" class="{if $orderby == 'thisweek'}f_0{else}f_d{/if}" comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_top_sub">{lang ranklist_week}</a></li>
								 <li><span class="comiis_tm f_d">/</span><a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=today" id="86400" class="{if $orderby == 'today'}f_0{else}f_d{/if}" comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_top_sub">{lang ranklist_today}</a></li>
								 <li><span class="comiis_tm f_d">/</span><a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=all" id="all" class="{if $orderby == 'all'}f_0{else}f_d{/if}" comiis_ajax=".comiis_ranklist_box" comiis_t_ajax=".comiis_top_sub">{lang all}</a></li>
							</ul>
					</div>
			</div>
	</div>
	<div class="comiis_ranklist_box cl">
	<!--{if $threadlist}-->
			<div class="comiis_postphb cl">
					<ul>
					<!--{loop $threadlist $thread}-->
							<li class="b_t">
									<div class="postphb_mun b_r f_d"><!--{if $thread['rank'] <= 3}--><img src="{IMGDIR}/comiis_rank{$thread['rank']}.png" alt="$thread['rank']"class="vm" /><!--{else}-->$thread['rank']<!--{/if}--></div>
									<a href="forum.php?mod=viewthread&tid={$thread['tid']}" title="{$temp['fields']['fulltitle']}" class="postphb_tit">$thread['subject']</a>
									<p>
											<span class="y f_d">
													<!--{if $_GET[view] == 'views'}-->$thread['views']{$comiis_lang['all74']}
													<!--{elseif $_GET[view] == 'favtimes'}-->$thread['favtimes']{lang ranklist_thread_favorite}
													<!--{elseif $_GET[view] == 'heats'}-->$thread['heats']{lang ranklist_thread_heat}
													<!--{else}-->$thread['replies']{lang ranklist_thread_reply}<!--{/if}-->	
											</span>
											<a href="home.php?mod=space&uid={$thread['authorid']}&do=profile" rel="nofollow" class="f_ok"><img src="{echo avatar($thread['authorid'],middle,true)}?{echo time();}" class="vm">$thread['author']</a>
											<span class="f_d">$thread['dateline']</span>
									</p>
							</li>
					<!--{/loop}-->
					</ul>
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
</div>
<!--{eval $comiis_foot = 'no';}-->
    		  	  		  	  		     	  	 	     		   		     		       	  		 	    		   		     		       	  	 	     		   		     		       	 				 	    		   		     		       	  	       		   		     		       	  			     		   		     		       	  	 	     		   		     		       	 			 	     		   		     		       	  	  	    		   		     		       	 					     		   		     		       	  			     		   		     		       	  		 	    		   		     		       	  	 	     		   		     		       	  			     		   		     		       	 					     		   		     		       	  	  	    		   		     		       	 					     		   		     		       	  		      		   		     		       	  	 	     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	 			 		    		   		     		       	 			 		    		   		     		       	   		     		   		     		       	 					     		   		     		       	 				      		   		     		       	  				    		   		     		       	  			     		   		     		       	  			     		   		     		       	  	 	     		   		     		       	 			 	     		   		     		       	 					     		 	      	  		  	  		     	
<!--{template common/footer}-->