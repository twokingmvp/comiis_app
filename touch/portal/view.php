<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<!--{if $article['allowcomment'] != 1}--><style>.pg_view .comiis_footer_scroll {bottom:30px;}</style><!--{/if}-->
<!--{eval include_once DISCUZ_ROOT.'./template/comiis_app/comiis/php/comiis_view.php'}-->
<!--{if $_GET['inajax'] == 1}-->
	<!--{loop $commentlist $comment}-->
		<!--{eval $nn++;}-->
		<!--{if $nn <= 10}-->
			<!--{template portal/comment_li}-->
		<!--{/if}-->
	<!--{/loop}-->
<!--{else}-->
<div class="comiis_wzv{if $comiis_app_switch['comiis_portal_view_fg'] == 1} mb2{/if} lkmtks">
	<!--{if $comiis_app_switch['comiis_portal_view_top'] == 0}-->
	<div class="view_top">
		<h2><!--{if $article['status'] == 1}--><span class="view_cat bg_del f_f">{lang moderate_need}</span><!--{elseif $article['status'] == 2}--><span class="view_cat bg_del f_f">{lang ignored}</span><!--{/if}-->$article[title]</h2>
		<div class="view_time">
            <!--{if ($comiis_isweixin == 1 || $comiis_app_switch['comiis_leftnv'] == 1) && ($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage'])}-->
                <span href="#moption" class="popup f_g comiis_xifont comiis_edit_rico"><i class="comiis_font">&#xe655;</i>{$comiis_lang['edit']}</span>
            <!--{/if}-->
			<span class="y f_d">
				<i class="comiis_font f_e">&#xe67b</i><!--{if $article[viewnum] > 0}-->$article[viewnum]<!--{else}-->0<!--{/if}-->
				<!--{if $article['allowcomment']==1}--><i class="comiis_font f_e">&#xe64f</i><!--{if $article[commentnum] > 0}-->$article[commentnum]<!--{else}-->0<!--{/if}--><!--{/if}-->
			</span>
			<a href="{echo getportalcategoryurl($cat[catid])}" class="f_ok">$cat[catname]</a><span class="f_d">&nbsp; $article['dateline']</span>
		</div>	
	</div>
	<!--{elseif $comiis_app_switch['comiis_portal_view_top'] == 1}-->
	<div class="view_topv1">
		<h2>$article[title]</h2>
		<div class="view_timev1">
       <!--{if ($comiis_isweixin == 1 || $comiis_app_switch['comiis_leftnv'] == 1) && ($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage'])}-->
            <span href="#moption" class="popup f_g comiis_xifont comiis_edit_rico" style="position:absolute;top:1px;right:0"><i class="comiis_font">&#xe655;</i>{$comiis_lang['edit']}</span>
        <!--{/if}-->
		<!--{if $article['status'] == 1}--><span class="f_g">{lang moderate_need}</span><!--{elseif $article['status'] == 2}--><span class="f_g">{lang ignored}</span><!--{/if}--><!--{if $article[viewnum] > 0}--><span class="f_d">$article[viewnum]{$comiis_lang['view47']}</span><!--{/if}--><span class="f_d"><a href="{echo getportalcategoryurl($cat[catid])}">$cat[catname]</a></span><span class="f_d">$article['dateline']</span>
		</div>
	</div>
	<!--{/if}-->	
	<!--{if $article[summary] && empty($cat[notshowarticlesummay]) && $comiis_app_switch['comiis_pwzview_zy'] == 1}-->
		<div class="comiis_wzv_s comiis_bodybg f_b cl"><span class="bg_a f_f"><!--{if $comiis_app_switch['comiis_pwzview_zytit']}-->$comiis_app_switch['comiis_pwzview_zytit']<!--{else}-->{lang article_description}<!--{/if}--></span>$article[summary]</div>
	<!--{/if}-->	
	<div class="view_body{if $comiis_app_switch['comiis_pwzview_atd'] == 0 && $comiis_app_switch['comiis_pwzview_next'] == 0} mb5{/if} cl">
        <!--{if $content[title]}--><strong>$content[title]</strong><!--{/if}-->
		<!--{echo str_replace(array(' onclick="zoom',' width="'), array(' a="zoom',' b="'), $content[content]);}-->
	</div>
	<!--{if $article[from] && $comiis_app_switch['comiis_pwzview_from'] == 1}--><div class="view_toply f_c">{$comiis_lang['tip397']}: <!--{if $article[fromurl]}--><a href="$article[fromurl]" target="_blank">$article[from]</a><!--{else}-->$article[from]<!--{/if}--></div><!--{/if}-->
	<!--{hook/view_article_content}-->
	<!--{if $multi}--><div class="cl">$multi</div><!--{/if}-->
	<!--{if $comiis_app_switch['comiis_pwzview_atd'] == 1}-->
	<!--{subtemplate home/space_click}-->
	<!--{/if}-->
	<!--{if ($article['preaid'] || $article['nextaid']) && $comiis_app_switch['comiis_pwzview_next'] == 1}-->
	<div class="view_sxwz f_b cl"> 
		<!--{if $article['prearticle']}--><a href="{$article['prearticle']['url']}">{lang pre_article}{$article['prearticle']['title']}</a><!--{/if}-->
		<!--{if $article['nextarticle']}--><a href="{$article['nextarticle']['url']}">{lang next_article}{$article['nextarticle']['title']}</a><!--{/if}-->
	</div>
	<!--{/if}-->
</div>
<!--{if $comiis_app_switch['comiis_pwzview_relatedwz'] == 0}-->
<!--{eval comiis_load('Mu3890UnqJjAJabA42', 'article,common_url,comiis_thead_fav,content,commentlist,cat,comiis_fav_count,comiis_isweixin,comiis_is_new_url');}-->
<!--{/if}-->
<!--{if $article['allowcomment']==1}-->
<a name="comiis_allreplies" id="comiis_allreplies"></a>
	<!--{if $comiis_app_switch['comiis_portal_view_fg'] == 0}-->
	<div class="comiis_wztit cl">
		<h2 class="b_0 f_0">
			<span class="f_d" style="float:right"><!--{if $article[commentnum] > 0}--><a href="$common_url">{$article[commentnum]}{$comiis_lang['view40']}</a><!--{else}-->0{$comiis_lang['view40']}<!--{/if}--></span>
			<i class="comiis_font">&#xe607</i> {$comiis_lang['tip97']}
		</h2>
	</div>
	<!--{elseif $comiis_app_switch['comiis_portal_view_fg'] == 1}-->
	<div class="styli_h10 bg_e b_t b_b"></div>
	<div class="comiis_pltit bg_f b_b cl"><h2><em class="z">{$comiis_lang['tip97']}</em><span class="f14 f_d z"><!--{if $article[commentnum] > 0}--><a href="$common_url">{$article[commentnum]}</a><!--{/if}--></span></h2></div>
	<!--{elseif $comiis_app_switch['comiis_portal_view_fg'] == 2}-->
	<div class="comiis_pltit bg_e b_t b_b cl"><h2><em class="z">{$comiis_lang['tip97']}</em><span class="f14 f_d z"><!--{if $article[commentnum] > 0}--><a href="$common_url">{$article[commentnum]}</a><!--{/if}--></span></h2></div>
	<!--{/if}-->
	<div class="comiis_plli{if $comiis_app_switch['comiis_portal_view_fg'] == 1} mb3{/if} cl">
		<!--{if $article[commentnum] > 0}-->
			<!--{eval $nn = 0}-->
			<!--{loop $commentlist $comment}-->
				<!--{eval $nn++;}-->
				<!--{if $nn <= 10}-->
					<!--{template portal/comment_li}-->
				<!--{/if}-->
			<!--{/loop}-->
		<!--{else}-->
			<div class="comiis_notip cl">
                <!--{if $comiis_app_switch['comiis_nodata_ico']}-->
                    <!--{if strpos($comiis_app_switch['comiis_nodata_ico'], '/') !== false}--><img src="$comiis_app_switch['comiis_nodata_ico']" /><!--{else}--><i class="comiis_font f_e cl">&#x{$comiis_app_switch['comiis_nodata_ico']}</i><!--{/if}-->
                <!--{else}-->
                    <i class="comiis_font f_e cl">&#xe613</i>
                <!--{/if}-->
				<span class="f_d">{$comiis_lang['all6']}, {$comiis_lang['all7']}</span>
			</div>				
		<!--{/if}-->
		<!--{if $article[commentnum] > 10}--><a href="$common_url" class="comiis_loadbtn bg_e b_ok f_c">{$comiis_lang['view3']}{$article[commentnum]}{$comiis_lang['view40']}</a><!--{/if}-->
	</div>
<!--{/if}-->
<!--{if $comiis_app_switch['comiis_pwzview_relatedwz'] == 1}-->
<!--{eval comiis_load('Mu3890UnqJjAJabA42', 'article,common_url,comiis_thead_fav,content,commentlist,cat,comiis_fav_count,comiis_isweixin,comiis_is_new_url');}-->
<!--{/if}-->
<div class="comiis_foot_height"></div>
<!--{/if}-->
<!--{if $_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']}-->
	<div id="moption" popup="true" class="comiis_manage comiis_bodybg comiis_popup" style="display:none;" comiis_popup="comiis">
		<ul>
			<li><a href="portal.php?mod=portalcp&ac=article&op=edit&aid=$article[aid]&openrelated=yes" class="redirect bg_f b_b">{lang article_related}</a></li>
			<li><a href="portal.php?mod=portalcp&ac=article&op=edit&aid=$article[aid]" class="redirect bg_f b_b">{lang edit}</a></li>
			<li><a href="portal.php?mod=portalcp&ac=article&op=delete&aid=$article[aid]" class="dialog bg_f b_b">{lang delete}</a></li>			
			<li><a href="javascript:;" class="comiis_glclose mt10 bg_f b_t f_g">{lang cancel}</a></li>
		</ul>
	</div>
<!--{/if}-->
{eval $comiis_app_wx_share['desc'] = $article[summary];}
{eval $comiis_app_wx_share['title'] = $article[title];}
<!--{eval $comiis_foot = 'no';}-->
<!--{template common/footer}-->