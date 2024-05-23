<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Bahan Bakar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            
        }
        center {
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            box-shadow: black 5px 5px 5px;
        }
        .title {
            background-color: blue;
            border-radius: 10px;
            box-shadow: black 3px 3px 3px;
        }

        h1 {
            color: white;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        label, select, input {
            text-align: center;
            margin: 10px 0;
            width: 100%;
            
        }
        select, input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            box-shadow: black 3px 3px 3px;
        }
        input[type="submit"]:hover {
            background-color: lightblue;
            box-shadow: black 3px 3px 3px;
        }
    </style>
</head>
<body>
    <center>
        <div class="title">
        <h1>Bahan Bakar Shell</h1>
        </div>
        <form action="" method="POST">
            <label>Pilih Tipe Bahan Bakar :</label>
            <select name="jenis" id="jenis"> 
                <option disabled selected> --- Pilih Tipe Shell ---</option>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V Power</option>
                <option value="SVPowerDiesel">Shell V Power Diesel</option>
                <option value="SVPowerNitro">Shell V Power Nitro</option>
            </select>
            <label>Jumlah Liter :</label>
            <input type="number" name="jumlah" id="jumlah" placeholder="Masukan Jumlah Liter">          
            <input type="submit" value="kirim" name="kirim">
        </form>
    </center>
</body>
<?php
        include 'shell.php';
        $beli = new Beli();
        $beli->SetHarga(15420, 16130, 18310 , 16510);
        if (isset($_POST['kirim'])) {
            $beli->jenis = isset($_POST['jenis']) ?  $_POST['jenis'] : '';
            $beli->jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;    
            if($beli->jumlah > 0 && !empty($beli->jenis)){
                $beli->CetakPembelian();
            }
        }
?>
</html>
