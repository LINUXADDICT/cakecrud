<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact</title>
<?php echo $this->Html->css('style.default.css'); ?>
</head>
<!--style="background:#32415A url(<?php //echo FULL_BASE_URL.$this->base.'/img/default/noise.white.png';?>); -->
<body style="font-size:13px; font-family:Segoe UI, Lucida Grande, Lucida Sans Unicode, Helvetica, Arial, Verdana, san-serif;">
<table cellpadding="0" cellspacing="0" border="0" width="660px" >
<tr>
	<td align="center" >
	<table  width="600px" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td style="padding:10px; padding-right:20px; color:black; text-align:left">
			<table cellpadding="0" cellspacing="0" style="width:100%;" border="0">
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td >
						<?php echo $content_for_layout; ?>
					</td>
				</tr>
				<!--<tr><td>&nbsp;</td></tr>
				<tr>
					<td>
						Best regards,<br>
						<b>Clickspace Team</b>
					</td>
				</tr>
				<tr><td>&nbsp;</td></tr>-->			
			</table>
		</td>
	</tr>
	</table>
	</td>
</tr>
</table>
</body>
</html>