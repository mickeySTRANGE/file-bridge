<!DOCTYPE HTML>

<html>

<head>
  <title>bridge</title>
</head>

<body>

  <?
  foreach(glob('files/*') as $file){
    if(is_file($file)){ ?>
    <a href="<? echo htmlspecialchars($file); ?>">
      <? echo htmlspecialchars($file); ?>
    </a>
    <br>
    <?
    }
  } ?>

</body>

</html>
