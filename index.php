<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLSHORT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="codecss.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
</head>
<body style="background-color:#081226">

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-lg-3">
            <div class="col-xl-5 mt-1">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12 p-2">
                                
                                <div class="p-5">
                                    <div class="text-center" style="margin-top:-20px;">
                                        <h3 >Penjumlahan PHP</h3>
                                    </div>
                                    <hr>
                                    <form method="post">
                                    <div class="form-group">
                                    <input class="form-control form-control-user" id="aa" type="number" name="a" value="<?php echo isset($_POST["a"]) ? $_POST["a"] : ''; ?>" placeholder="masukkan angka" required>
                                       
                                    </div>
                                    <p></p>
                                    <div class="form-group">
                                        <input class="form-control form-control-user" id="bb" type="number" name="b" value="<?php echo isset($_POST["b"]) ? $_POST["b"] : ''; ?>" placeholder="masukkan angka" required>
                                        <!-- <div><i class="btn bi bi-clipboard" style="font-size: 15px; color: #000;"></i></div> -->
                                            
                                    </div>
                                    <p></p>
                                    <h5 class="text-center">HASIL<h5>
                                    <p></p>
                                    <div class="form-group">
<?php
if(isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $penjumlahan = $a + $b;
    echo '<input class="form-control form-control-user" id="hasil" type="text" name="c" value=" ' . $penjumlahan . '" placeholder="Hasil" readonly>';
}
?>
</div>


                                     <p></p>
                                    <div class="form-group">
                                    <button class="btn btn-info text-white btn-short" type="submit" value="hasil" style="font-size: 18px; font-weight: 500; width: 100%" id="shorten">
                                        Tambah
                                    </button>
                                    </div>
                                    </form>
                                   
                                    <p></p>
                                    <div class="form-group">
                                    <button class="btn btn-dark text-white btn-copy" value="Bersihkan" onclick="clearForm()" style="font-size: 18px; font-weight: 500; width: 100%;" id="copy">
                                        Bersih
                                    </button>
                                    </div>
                                    <p></p>
                                    <div class="form-group">
                                        <a href="index.php" download class="btn btn-success text-white btn-copy" style="font-size: 18px; font-weight: 500; width: 100%;"> Download 
                                    </a>

                                    </div>
                                    <p></p>
                                    <hr>
                                    <div class="text-center">
                                        <?php 
                                        echo '<h6 >YUWAN</h6>'
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <audio autoplay>
        <source src="https://c.top4top.io/m_2799jw1uc1.mp3" type="audio/mpeg">
    </audio>

<script>
function clearForm() {
    document.getElementById("aa").value = "";
    document.getElementById("bb").value = "";
    document.getElementById("hasil").value = "";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="codejs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>