```php
<?php

include "koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: index.html");
    exit;
}

$id = intval($_GET['id']);

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {

    header("Location: index.html");
    exit;

} else {

    echo "Gagal menghapus data: " . mysqli_error($conn);

}

?>
```
