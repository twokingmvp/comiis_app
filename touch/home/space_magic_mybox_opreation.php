<?PHP exit('Access Denied');?>
<!--{template common/header}-->
<div id="hkey_$_GET[handlekey]" class="comiis_tip bg_f cl">
<form id="magicform" method="post" action="home.php?mod=magic&action=mybox&infloat=yes&loc=1">
    <div id="return_$_GET[handlekey]"></div>
    <input type="hidden" name="formhash" value="{FORMHASH}" />
    <input type="hidden" name="handlekey" value="$_GET[handlekey]" />
    <input type="hidden" name="operation" value="$operation" />
    <input type="hidden" name="magicid" value="$magicid" />    
    <!--{eval comiis_load('p9M66RpWjmP0MK9wGJ', 'operation,magic,buddyarray,magiclist,magicselect,magicclass,useperoid,magicid,discountprice');}-->
    <div id="hbtn_$_GET[handlekey]" class="comiis_stylino mt5 mb12 cl">
        <!--{if $operation == 'give'}-->
            <button class="formdialog comiis_btn bg_c f_f" type="submit" name="operatesubmit" id="operatesubmit" value="true">{lang magics_operation_present}</button>
        <!--{elseif $operation == 'use'}-->
            <button class="formdialog comiis_btn bg_c f_f" type="submit" name="usesubmit" id="usesubmit" value="true">{lang magics_operation_use}</button>
        <!--{elseif $operation == 'sell'}-->
            <button class="formdialog comiis_btn bg_c f_f" type="submit" name="operatesubmit" id="operatesubmit" value="true">{lang magics_operation_sell}</button>
        <!--{elseif $operation == 'drop'}-->
            <button class="formdialog comiis_btn bg_c f_f" type="submit" name="operatesubmit" id="operatesubmit" value="true">{lang magics_operation_drop}</button>
        <!--{/if}-->
    </div>
</form>
</div>
<script type="text/javascript" reload="1">
	function succeedhandle_$_GET[handlekey](url, msg) {
		popup.close();
		if(arguments[2] && arguments[2]['avatar']) {
			msg += ' <ul class="ml mls cl"><li><a class="avt" target="_blank" href="home.php?mod=space&uid='+arguments[2]['uid']+'"><em class=""></em><img src="{$_G['setting'][ucenterurl]}/avatar.php?uid='+arguments[2]['uid']+'&size=middle" /></a><p><a title="admin" href="home.php?mod=space&uid='+arguments[2]['uid']+'" target="_blank"><b>'+arguments[2]['username']+'</b></a></p></li></ul>';
		}
		<!--{if !$location}-->
			if(url.indexOf(".php") != -1){
				popup.open(msg, 'confirm', url);
			}else{
				popup.open(msg, 'alerts');
			}
		<!--{else}-->
			$.ajax({
				type:'GET',
				url:'home.php?$querystring&inajax=1',
				dataType:'xml'
			})
			.success(function(s) {
				popup.open(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				window.location.href = obj.attr('href');
				popup.close();
			});
		<!--{/if}-->
		//showCreditPrompt();
	}
</script>
    		  	  		  	  		     	  	       		   		     		       	  	       		   		     		       	   		     		   		     		       	  	 		    		   		     		       	  	  	    		   		     		       	  			     		   		     		       	  				    		   		     		       	  			     		   		     		       	 	  	     		   		     		       	   			    		   		     		       	  	  	    		   		     		       	 			 		    		   		     		       	  		      		   		     		       	 	  	     		   		     		       	   		     		   		     		       	  			     		   		     		       	   			    		   		     		       	 					     		   		     		       	 	  	     		   		     		       	  			     		   		     		       	  				    		   		     		       	  			     		   		     		       	 				      		   		     		       	 	  	     		   		     		       	 				 	    		   		     		       	  	 	     		   		     		       	 				 	    		   		     		       	 				 	    		   		     		       	   			    		   		     		       	  			     		   		     		       	  	       		   		     		       	 			  	    		   		     		       	  	 		    		   		     		       	 				 	    		   		     		       	  				    		   		     		       	 			 	     		 	      	  		  	  		     	
<!--{template common/footer}-->