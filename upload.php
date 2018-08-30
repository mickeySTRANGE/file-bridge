<?

$uploaddir = '/app/files';
$uploadfile = $uploaddir . '/' . basename($_FILES['userfile']['name']);

echo ini_get('upload_max_filesize');
ini_set('upload_max_filesize', '2000M');
echo ini_get('upload_max_filesize');

ini_set('post_max_size', '2000M');
ini_set('memory_limit', '3000M');

echo '<pre>';
var_dump($_FILES['userfile']['error']);
echo '<br>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

require('download.php');

?>
