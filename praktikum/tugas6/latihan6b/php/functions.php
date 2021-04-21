<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php 

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040056");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($mb)
{
    $conn = koneksi();

    $name = htmlspecialchars($mb['name']);
    $power = htmlspecialchars($mb['power']);
    $acceleration = htmlspecialchars($mb['acceleration']);
    $fuel = htmlspecialchars($mb['fuel']);
    $drive = htmlspecialchars($mb['drive']);
    $price = htmlspecialchars($mb['price']);
    $picture = htmlspecialchars($mb['picture']);

    $query = "INSERT INTO mobil
                VALUES
                ('', '$name', '$power', '$acceleration', '$fuel', '$drive', '$price', '$picture')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
	{
		$connect = koneksi();
		mysqli_query($connect, "DELETE FROM makanan where id = $id");

		return mysqli_affected_rows($connect);
	}


function ubah($mb)
{
    $conn= koneksi();
    $id = htmlspecialchars($mb['id']);
    $name = htmlspecialchars($mb['name']);
    $power = htmlspecialchars($mb['power']);
    $acceleration = htmlspecialchars($mb['acceleration']);
    $fuel = htmlspecialchars($mb['fuel']);
    $drive = htmlspecialchars($mb['drive']);
    $price = htmlspecialchars($mb['price']);
    $picture = htmlspecialchars($mb['picture']);

    $query = "UPDATE mobil
            SET 
            name = '$name',
            power = '$power',
            acceleration = '$acceleration',
            fuel = '$fuel',
            drive = '$drive',
            price = '$price',
            picture = '$picture',
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function registrasi($mb)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($mb['username']));
    $password = mysqli_real_escape_string($conn, $mb["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}


?>