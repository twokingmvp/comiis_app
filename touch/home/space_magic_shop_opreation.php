<?PHP exit('Access Denied');?>
<!--{eval
$_G['home_tpl_titles'] = array('{lang magic}');
}-->
<!--{template common/header}-->
<div class="comiis_tip bg_f cl">
<form id="$_GET[handlekey]" method="post" action="home.php?mod=magic&action=shop&infloat=yes&loc=1">
    <input type="hidden" name="formhash" value="{FORMHASH}" />
    <!--{if !empty($_GET['infloat'])}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
    <input type="hidden" name="operation" value="$operation" />
    <input type="hidden" name="mid" value="$_GET['mid']" />
    <!--{if !empty($_GET['idtype']) && !empty($_GET['id'])}-->
        <input type="hidden" name="idtype" value="$_GET[idtype]" />
        <input type="hidden" name="id" value="$_GET['id']" />
    <!--{/if}-->
    <!--{eval comiis_load('ZHTI3L3tKI1KIT6Rmh', 'operation,magic,allowweight,useperoid,useperm,buddyarray');}-->
    <div class="comiis_stylino mt5 mb12 cl">
    <!--{if $operation == 'buy'}-->
        <button class="formdialog comiis_btn bg_c f_f" type="submit" name="operatesubmit" id="operatesubmit" value="true">{lang magics_operation_buy}</button>
    <!--{elseif $operation == 'give'}-->
        <button class="formdialog comiis_btn bg_c f_f" type="submit" name="operatesubmit" id="operatesubmit" value="true">{lang magics_operation_present}</button>
    <!--{/if}-->
    </div>
</form>
</div>
<script type="text/javascript" reload="1">
function succeedhandle_$_GET[handlekey](url, msg) {
    popup.close();
    <!--{if $location}-->
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