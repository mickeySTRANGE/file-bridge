<?

$uploaddir = '/app/files';
$uploadfile = $uploaddir . '/' . basename($_FILES['userfile']['name']);

echo ini_get('upload_max_filesize');

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
