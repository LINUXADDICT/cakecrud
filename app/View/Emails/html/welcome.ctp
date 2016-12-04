<table width="350" border="0" align="center" cellpadding="0" cellspacing="0"  style="background: #e2e2e2;padding: 10px 15px 10px 30px">
  <tr>
    <td>
      <img src="<?=FULL_BASE_URL.$this->base?>/img/lnklogo.png" style="margin-bottom: 15px;">
    </td>
  </tr>
  <tr>
            <td width="74%" valign="top"><font style="font-size:16px; font-family:Trebuchet MS, Arial, Helvetica, sans-serif;">
                <strong>Hello, <span style="text-transform:uppercase"><?=$name?></span></strong><br>
                <div>New Slang Has Been Requested.</div>
                <div>Slang Name : <?=$slang?> </div>
                <div>Word : <?=$word?></div>
                <div>Meaning : <?=$meaning?></div>
                <div>Origin : <?=$origin?></div>
                 
                <a href="<?=FULL_BASE_URL.$this->base?>/slangs/newslangregister/<?=$key?>" target="_blank">Click here</a> to approve or decline slang </font></td>
            </tr>
</table>