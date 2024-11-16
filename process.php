<?php
    $birthdate = $_POST['birthdate'];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

    $tanggal_lahir = date("j F Y", strtotime($birthdate));

    echo "<h2>Hasil:</h2>";
    echo "Tanggal lahir: $tanggal_lahir<br>";
    if (empty($hobbies)) {
        echo "Hobi: -";
    } else {
        echo "Hobi: " . implode(", ", $hobbies);
    }
    echo '<br><br><a href="javascript:history.back()"><button>Kembali</button></a>';
?>