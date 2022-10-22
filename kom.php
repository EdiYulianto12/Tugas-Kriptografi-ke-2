
  <h2>Menghitung Kombinasi</h2>
  <form method="POST">
    <div class="form-group">
      <label for="n">Ketik Jumlah Objek :</label>
      <input type="n"  id="n" placeholder="Ketik Jumlah" name="n"><br>
    </div>
    <div class="form-group">
      <label for="r">Ketik Jumlah urutan</label>
      <input type="r"  id="r" placeholder="Ketik urutan" name="r">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="Hitung Faktorial">Hitung Faktorial</button>
  </form>
</div>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
  $n=$_POST['n'];
  $r=$_POST['r'];
  $faktorial=1;
  for($x=$faktorial; $x<=$n;$x++){
    $faktorial=$faktorial*$x;
    $a=$faktorial;
}
  $faktorial=1;
  for($x=$faktorial; $x<=$r;$x++){
    $faktorial=$faktorial*$x;
  $b=$faktorial;
  $c=$n-$r;
}
  $faktorial=1;
  for($x=$faktorial; $x<=$c;$x++){
    $faktorial=$faktorial*$x;
    $d=$faktorial;
    $e=$d*$b;
    $kombinasi=$a/$e;
  }
   echo 'Nilai Faktorial dari &nbsp'.$n.'&nbsp Dengan Urutan &nbsp'.$r.'&nbspadalah :&nbsp'.$kombinasi;
  }

 ?>