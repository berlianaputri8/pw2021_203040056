<?php 

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "tubes_203040056");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload() {
    $nama_file = $_FILES['picture']['name'];
    $tipe_file = $_FILES['picture']['type'];
    $ukuran_file = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmp_file = $_FILES['picture']['tmp_name'];

    if($error == 4) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu!') ;
        //     </script>";
        return 'noimg.png';
    }

    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if(!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    if($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!');
            </script>";
        return false;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' .$nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $power = htmlspecialchars($data['power']);
    $acceleration = htmlspecialchars($data['acceleration']);
    $fuel = htmlspecialchars($data['fuel']);
    $drive = htmlspecialchars($data['drive']);
    $price = htmlspecialchars($data['price']);
    // $picture = htmlspecialchars($data['picture']);

    $picture = upload();
    if(!$picture) {
        return false;
    }

    $query = "INSERT INTO mini
                VALUES
                (null, '$nama', '$power', '$acceleration', '$fuel', '$drive', '$price', '$picture')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus ($id)
{
    $conn = koneksi();

    $mini = query("SELECT * FROM mini WHERE id = $id");
    if($mini['picture'] != 'noimg.png') {
        unlink('../assets/img/' . $mini['picture']);
    };

    mysqli_query($conn, "DELETE FROM mini WHERE id = $id") or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $power = htmlspecialchars($data["power"]);
    $acceleration = htmlspecialchars($data["acceleration"]);
    $fuel = htmlspecialchars($data["fuel"]);
    $drive = htmlspecialchars($data["drive"]);
    $price = htmlspecialchars($data["price"]);
    $picture_lama = htmlspecialchars($data["picture_lama"]);

    $picture = upload();
    if (!$picture) {
        return false;
    }

    if($picture == 'noimg.png') {
        $picture = $picture_lama;
    }

    $query = "UPDATE mini
            SET 
            nama = '$nama',
            power = '$power',
            acceleration = '$acceleration',
            fuel = '$fuel',
            drive = '$drive',
            price = '$price',
            picture = '$picture'
            WHERE id = $id";

    mysqli_query($conn, $query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);

}

function cari ($keyword) 
{
    $conn = koneksi();

    $query = "SELECT * FROM mini
                WHERE 
                nama LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        
        // cek password
        if(password_verify($password, $user['password'])) {
        // set session
          $_SESSION['login'] = true;
        
        header("Location: admin.php");
        exit;  
        }
    } 
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
}

function registrasi($data)
    {
        $conn = koneksi();

        $username = htmlspecialchars(strtolower($data['username']));
        $password1 = mysqli_real_escape_string($conn, $data['password1']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        // jika username / password kosong
        if(empty($username) || empty($password1) || empty($password2)) {
            echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
        }

        // jika username sudah ada
        if(query("SELECT * FROM user WHERE username = '$username'")) {
            echo "<script>
                alert('username sudah terdaftar!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
        }

        // jika konfirmasi pasword tidak sesuai
        if($password1 !== $password2) {
            echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
        }

        // jika password < 5 digit
        if(strlen($password1) < 5) {
            echo "<script>
                alert('password terlalu pendek!');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
        }

        // jika username dan password sudah sesuai
        // enkripsi password
        $password_baru = password_hash($password1, PASSWORD_DEFAULT);
        
        // insert ke tabel user
        $query = "INSERT INTO user 
                    VALUES 
                  (null, '$username', '$password_baru')
                  ";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        return mysqli_affected_rows($conn);
    }

?>