<?PHP exit('Access Denied');?>
{eval}
$fid = $_G['fid'] ? $_G['fid'] : intval($_GET['fid']);
$comiis_favorite = DB::fetch_all("SELECT * FROM `%t` WHERE idtype='fid' AND id='{$fid}' ORDER BY dateline DESC".DB::limit(5), array('home_favorite'));
$comiis_fiddata = DB::fetch_first("SELECT fid, favtimes FROM %t WHERE fid='%d'", array('forum_forum', $fid));
{/eval}
<ul class="cl">
	<!--{loop $comiis_favorite $temp}-->
		<li><a href="home.php?mod=space&uid={$temp['uid']}&do=profile"><img src="./uc_server/avatar.php?uid={$temp['uid']}&size=middle"></a></li>
	<!--{/loop}-->
</ul>
<span class="f_f comiis_tm7">{$comiis_fiddata['favtimes']}{$comiis_lang['juanz']}</span>