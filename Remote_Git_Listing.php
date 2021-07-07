<?
$git_domain = "github.com";
$git_user = "ZenMondo";
$repo_name = "Virtual-World-Scripts";
$branch_name = "main";


header('Content-type: text/html');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>My GitHub Reoistory</TITLE>
</HEAD>
<BODY>

<?
$git_dir =  null;
$retval = null;

//exec("svn ls https://github.com/ZenMondo/Virtual-World-Scripts.git/branches/main", $git_dir, $retval);
exec("svn ls https://$git_domain/$git_user/$repo_name.git/branches/$branch_name", $git_dir, $retval);

echo "<P>";

//print_r($git_dir);


printf("<P><B>There are %d files in the repository %s </B><P>\n", count($git_dir), $repo_name);

foreach($git_dir as $script_name)
{
	print("<A HREF = \"https://$git_domain/$git_user/$repo_name/blob/$branch_name/$script_name\" TARGET=\"_GIT_$repo_name\"> $script_name</a><BR><BR>\n");
}

?>
</body>
</html>
