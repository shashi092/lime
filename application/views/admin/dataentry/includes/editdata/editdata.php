<script type='text/javascript'>
	<!--
		function saveshow(value)
		{
			if (document.getElementById(value).checked == true)
			{
				document.getElementById("closerecord").checked=false;
				document.getElementById("closerecord").disabled=true;
				document.getElementById("saveoptions").style.display="";
			}
			else
			{
				document.getElementById("saveoptions").style.display="none";
				document.getElementById("closerecord").disabled=false;
			}
		}
	//-->
</script>

<table>
	<tr>
		<td align='left'>
			<input type='checkbox' class='checkboxbtn' name='closerecord' id='closerecord' />
			<label for='closerecord'>".$clang->gT("Finalize response submission")."</label>
		</td>
	</tr>
    <input type='hidden' name='closedate' value='<?php echo dateShift(date("Y-m-d H:i:s"), "Y-m-d H:i:s", Yii::app()->getConfig('timeadjust')); ?>' />
    <tr>
    	<td align='left'>
    		<input type='checkbox' class='checkboxbtn' name='save' id='save' onclick='saveshow(this.id)' />
    		<label for='save'><?php $clang->eT("Save for further completion by survey user"); ?></label>
        </td>
   	</tr>
</table>

<div name='saveoptions' id='saveoptions' style='display: none'>
	<table class='outlinetable'>
    	<tr><td align='right'><?php $clang->eT("Identifier:"); ?></td>
    		<td>
    			<input type='text' name='save_identifier'"
	    			<?php if (returnGlobal('identifier')) { ?>
	    				value="<?php echo stripslashes(stripslashes(returnGlobal('identifier'))); ?>"
	                <?php } ?> />
			</td>
	    </tr>
   	</table>
    <input type='hidden' name='save_password' value='<?php echo returnGlobal('accesscode'); ?>' />
    <input type='hidden' name='save_confirmpassword' value='<?php echo returnGlobal('accesscode'); ?>' />\n"
    <input type='hidden' name='save_email' value='<?php echo $saver['email']; ?>' />\n"
    <input type='hidden' name='save_scid' value='<?php echo $saver['scid']; ?>' />\n"
    <input type='hidden' name='redo' value='yes' />\n";
</td>
</tr>
</div>
<tr>
	<td align='center'>
		<input type='submit' value='<?php $clang->eT("Submit"); ?>' />
		<input type='hidden' name='sid' value='<?php echo $surveyid; ?>' />
		<input type='hidden' name='subaction' value='insert' />
		<input type='hidden' name='language' value='<?php echo $sDataEntryLanguage; ?>' />
	</td>
</tr>
