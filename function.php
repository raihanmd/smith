<?php
    //konek ke database
    // urutan = "namahost", "username mySQL", 'password', "nama database" 
    $conn = mysqli_connect("localhost", "root", "", "gallery");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function contact($data){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $data["nama"]);
        $email = mysqli_real_escape_string($conn, $data["email"]);
        $nohp = mysqli_real_escape_string($conn, $data["nohp"]);
        $pesan = mysqli_real_escape_string($conn, $data["pesan"]);

        $sql = "INSERT INTO contact (nama, email, nohp, pesan)
        VALUES ('$nama', '$email', '$nohp', '$pesan')";
        if ($conn->query($sql) === TRUE) {
            $lieur = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        return mysqli_affected_rows($conn);
    }

    function registrasi($data){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $data["nama"]);
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password1"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username apakah sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM account WHERE username = '$username'");
        if( mysqli_fetch_assoc($result) ){
            echo "
            <script>
                alert('username sudah terdaftar');
            </script>
            ";
            return false;
        }

        //cek konfirmasi password
        if($password !== $password2){
            echo "
            <script>
                alert('konfirmasi password tidak sesuai');
            </script>
            ";
            return false;
        }


        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //tambahkan user baru ke database
        // mysqli_query($conn, "INSERT INTO pahamdigital VALUES('', '$nama', '$username', '$password')");
        $sql = "INSERT INTO account (nama, username, password)
        VALUES ('$nama', '$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            $lieur = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        return mysqli_affected_rows($conn);
    }

    function tambah($data){
        global $conn;

        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }

        // querry insert data
        $query = "INSERT INTO picture VALUES ('', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function upload(){
        // ambil dr isi $_FILES
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        //cek apakah tidak ada gambar yg diupload
        if($error === 4){
            echo "
            <script>
                alert('pilih gambar terlebih dahulu');
            </script>
            ";
            return false;
        }

        // cek apakah yg diupload adalah gambar
        $ekstensiGambarValid = ["jpg", "jpeg", "png"];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
            echo "
            <script>
                alert('upload gambar dek!');
            </script>
            ";
        }

        // cek jika ukuran terlalu besar
        if( $ukuranFile > 2000000 ){
            echo "
            <script>
                alert('ukuran gambar terlalu besar maksimal 2MB');
            </script>
            ";
        }

        //lolos pengecekan gambar siap diupload

        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }