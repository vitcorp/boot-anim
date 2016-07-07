<?PHP
define('ROOT', rtrim(str_replace('\\', '/', dirname(__FILE__)), '/'). '/');

$name_arch = ROOT. 'bootanimation.zip';
$files_dir = rtrim(ROOT, '/');
$files_to_arch = array();

require_once(ROOT. 'pclzip.lib.php');

for($d = @opendir($files_dir); $file = @readdir($d);)
{      
    if($file!='.' && $file!='..')
    {
        //$files_to_arch[]= $files_dir. '/'. $file;
        $files_to_arch[]= $file;
    }
}

chdir($files_dir);

$archive = new PclZip($name_arch);
$v_list = $archive->create(implode(',', $files_to_arch));
          $archive->delete(PCLZIP_OPT_BY_INDEX, '1,2');

//print_r($files_to_arch);
//$v_list=$archive->create(
//    implode(',', $files_to_arch),
//    PCLZIP_OPT_REMOVE_PATH,
//    $files_dir
//);

if($v_list == 0)
{
   die("Ошибка : ".$archive->errorInfo(true));
}
else
{
   echo 'Архив успешно создан, нажмите кнопку "назад" в вашем браузере, чтобы создать ещё одну Boot-анимацию';
}
?>
