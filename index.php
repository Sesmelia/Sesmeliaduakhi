<?php include("header.php");?>
    <main>
        <section id="aboutus">
            <div class="layar-atas">
              <h3>About Us</h3>
              <div class="konten">
                <p>
                  Cooking Fairy adalah adalah situs kumpulan resep masakan rumahan mudah dan praktis. 
                  Selain itu, disini akan ada banyak tips dalam memasak serta tutorial dalam memasak yang tentunya dapat dicoba dirumah.
                  <br>Cooking Fairy bertujuan agar generasi milenial lebih mengetahui berbegai hal tentang memasak. 
                  Dan tentunya dapat menjadi motivasi agar dapat lebih berkembang dalam memasak.</br>
                </p>
              </div>
            </div>
        </section>
        <section class="cream" id="recipes">
          <h3>Recipes</h3>
            <div class="layar-atas recipes">
              <div>
                <a href="browniescoklatkukus.php"><img src="foto2.jpg" /></a>
                <h6>Brownies Coklat Kukus</h6>
              </div>
              <div>
                <a href="bananacake.php"><img src="foto3.png" /></a>
                <h6>Banana Cake</h6>
              </div>
              <div>
                <a href="boluzebrakukus.php"><img src="foto4.jpg" /></a>
                <h6>Bolu Zebra Kukus</h6>
              </div>
            </div>
        </section>
        <section id="comment">
          <div class="layar-atas">
            <h3>Comment</h3>
            <div class="form_box">
            <div class="container">
                <form action="komentar.php" method="POST">
                    <table>
                        <tr>
                            <td> Nama </td>
                            <td> : </td>
                            <td> <input type="text" name="nama"> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <input type="text" name="email"> </td>
                        </tr>
                        <tr>
                            <td> Request Recipe </td>
                            <td> : </td>
                            <td> <input type="text" name="request"> </td>
                        </tr>
                        <tr>
                            <td> Masukan atau Saran </td>
                            <td> : </td>
                            <td> <textarea name="masukan_saran"></textarea> </td>
                        </tr>
                        <tr>
                            <td> <button type="submit" name="submit"> Submit </button> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
      </section>
    </main>
<?php include("footer.php");?>