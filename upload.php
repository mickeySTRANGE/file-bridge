<?

foreach(glob('*') as $file){
    if(is_file($file)){
        echo htmlspecialchars($file);
        echo '<br>';
    }
}

echo '<br>';

foreach(glob('files/*') as $file){
    if(is_file($file)){
        echo htmlspecialchars($file);
        echo '<br>';
    }
}


?>
