<?

$uploaddir = '/app/files';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

foreach(glob('*') as $file){
    if(is_file($file)){
        echo htmlspecialchars($file);
        echo '<br>';
    }
}

echo 'aaaaa<br>';

foreach(glob('files/*') as $file){
    if(is_file($file)){
        echo htmlspecialchars($file);
        echo '<br>';
    }
}


?>
