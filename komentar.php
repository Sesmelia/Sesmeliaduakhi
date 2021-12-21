<?php include("header.php"); ?>
<?php
    include("koneksi.php");
    $nama = "";
    $email = "";
    $request = "";
    $masukan_saran = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $request = $_POST["request"];
        $masukan_saran = $_POST["masukan_saran"];
    }
    if($nama!="" || $email!="" ||$request!="" || $masukan_saran!=""){
        $sql = "INSERT INTO komentar(nama, email, request, masukan_saran)
                VALUES ('$nama', '$email', '$request', '$masukan_saran')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created succesfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<div id="komen">
    <div id="table">
        <h3>Data yang memberikan Comment</h3>
        <table width="50%">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Request Recipe</th>
                <th>Masukan atau Saran</th>
            </thead>
            <tbody id="comm">
                <tr>
                <?php
                    $sql = "SELECT * FROM komentar ORDER BY id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // ouput data dari setiap baris
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                            <td>".$row["ID"]."</td>
                            <td>".$row["nama"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["request"]."</td>
                            <td>".$row["masukan_saran"]."</td>
                            </tr>";
                        }
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include("footer.php"); ?>