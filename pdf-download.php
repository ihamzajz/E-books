<?php

include 'dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT pdf FROM books WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $filepath = 'pdf/' . $row['bpdf'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('[pdf]/' . $row['bpdf']));
        readfile('pdf/' . $row['bpdf']);

        // Now update downloads count
        $newCount = $row['downloads'] + 1;
        $updateQuery = "UPDATE books SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>