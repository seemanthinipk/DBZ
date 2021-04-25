<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
  <title>$WikiTitle</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

<!--HTMLHeader-->
</head>
<body>
    <?PHP
    define ("THEME_WIDTH", "100%");
    define ("LEFT", "LEFT STUFF");
    define ("RIGHT", "RIGHT STUFF");
    // Header
    echo "<div style='background-color:#BABEC7;height:3px;'></div>";
	echo "<table cellspacing='0' cellpadding='0' id='main' width='".THEME_WIDTH."' class='center'>";
	echo "<tr>";
	echo "<td align='left'><img src='images/1.png' alt='1.png' class='spacer' /></td>";
	echo "<td class='sidess' style='width:100%;'>\nBANNER STUFF</td>";
	echo "<td align='right'><img src='images/2.png' alt='2.png' class='spacer' /></td>";
	echo "</tr>";
	echo "</table>\n";

	echo "<center><table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' class='center'>";
	echo "<tr>";
	echo "<td class='sub-header-left'></td>\n";
	echo "<td class='sub-header' align='center'>Link1 Link2 Link3 Link4</td>\n";
	echo "<td class='sub-header-right'></td>\n";
	echo "</tr>\n</table></center>\n";

	//Content
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' class='center'>";
	echo "<tr>";
	echo "<td class='body-left'></td>";
	if (LEFT) { echo "<td class='side-border-left' valign='top' style='border-style: solid; border-width: 1px;'>".LEFT."</td>"; }
	echo "<td class='main-bg' valign='top'>CENTER STUFF</td>";
	if (RIGHT) { echo "<td class='side-border-right' valign='top' style='border-style: solid; border-width: 1px;'>".RIGHT."</td>"; }
	echo "<td class='body-right'></td>";
	echo "</tr>\n";
	echo "</table>\n";

	//Footer
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' class='center'>";
	echo "<tr>";
	echo "<td class='footer-left'></td>\n";
	echo "<td align='center' class='footer'>FOOTER STUFF</td>";
	echo "<td class='footer-right'></td>\n";
	echo "</tr>\n";
	echo "</table>\n";
	echo "<table cellpadding='0' cellspacing='0' width='".THEME_WIDTH."' class='center'>";
	echo "<tr>";
	echo "<td class='bottom-footer-left'></td>";
	echo "<td align='left' style='padding-left:10px;border-style: solid; border-width: 1px;' class='bottom-footer'>LEFT<BR />FOOTER<br />TEXT</td>";
	echo "<td align='center' style='padding-right:0px;border-style: solid; border-width: 1px;' class='bottom-footer'>Roycat &copy; 2015</td>";
	echo "<td align='right' style='padding-right:10px;border-style: solid; border-width: 1px;' class='bottom-footer'>HIT COUNTER</td>\n";
	echo "<td class='bottom-footer-right'></td>";
	echo "</tr>\n";
	echo "</table>\n";
	echo "<div style='background-color:#BABEC7;height:3px;'></div>";
    ?>
<!--PageHeaderFmt-->
  <a href='$ScriptUrl/'><img src='$PageLogoUrl'
    alt='$WikiTitle' border='0' /></a>
<!--/PageHeaderFmt-->
  <hr />
<!--PageTitleFmt-->
  <h1 id='location'><a href='$ScriptUrl/$Group'>$Group</a>
  &raquo; $Title</h1>
<!--PageText-->
  <hr />
<!--PageFooterFmt-->
  <a href='$ScriptUrl/$[$Group/RecentChanges]'>$[Recent Changes]</a> |
  <a href='$PageUrl?action=print' target='_blank'>$[Printable View]</a> |
  <a href='$PageUrl?action=diff'>$[Page History]</a> |
  <a href='$PageUrl?action=edit'>$[Edit Page]</a><br />
  $[Page last modified on $LastModified]
<!--PageLeftFmt-->
  <div id='sidebar'><!--wiki:$Group.SideBar $SiteGroup.SideBar--></div>
<!--HTMLFooter-->
</body>
</html>