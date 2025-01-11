<?php

// [1] Menyisipkan file config.php
include "./config.php";

// [2] Mengecek apakah tombol add-button sudah di klik
if (isset($_POST['add-button'])) {

    // [3] menampung value yang diinputkan oleh user ke dalam variabel baru
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // [4] Membuat prepare statement
    $stmt = mysqli_prepare($koneksi, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

    // [5] Binding variabel
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

    // [6] Execute Query
    mysqli_stmt_execute($stmt);

    // [7] Cek Query
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Data berhasil disimpan";
        header("Location: list_users.php");
        exit();
    } else {
        echo "Data gagal disimpan";
    }
}
