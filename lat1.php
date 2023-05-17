<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        form{
            padding: 10px 20px;
            border-radius: 10px;
            background-color: #284c7b;
            box-shadow: 0 3px 7px rgba(0, 0, 0, .8);
            color: whitesmoke;
        }
        form h1{
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <form class="container" action="lat1.php" method="POST" onsubmit="return checkForm(this)">

        <h1>FORM DATA DIRI</h1>
    
        <div class="mb-3">
            <label class="form-label" for="NAME">Nama</label>
            <input class="form-control" type="text" name="txNAME" id="NAME">
        </div>
        <div class="mb-3">
            <label class="form-label" for="NIM">NIM</label>
            <input class="form-control" type="text" name="txNIM" id="NIM">
        </div>
        <div class="mb-3">
            <label class="form-label" for="JK">Jenis Kelamin</label>
            <input class="form-check-input me-1" type="radio" name="txJK" id="JK" value="Laki-laki">Laki - Laki
            <input class="form-check-input me-1" type="radio" name="txJK" id="JK" value="Perempuan">Perempuan
        </div>
        <div class="mb-3">
            <label class="form-label" for="jurusan">Jurusan</label>
            <select class="form-select" name="txJurusan" id="jurusan">
                <option value="Hukum">Hukum</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Hobi: </label>
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Singing" value="Singing">Singing
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Reading" value="Reading">Reading
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Sleeping" value="Sleeping">Sleeping
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Swiming" value="Swiming">Swiming
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Watching" value="Watching">Watching
            <input class="form-check-input me-2" type="checkbox" name="txHobi_Watching" value="Watching">COLI
        </div>
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-primary btn-lg" type="submit">Kirim Data</button>
        </div>
    
    </form>

<script>
    function checkForm(frm){
        let F= frm.elements;
        let nim= F.namedItem("txNIM").value;
        let name= F.namedItem("txNAME").value;
        let jkel= F.namedItem("txJK").value;
        let jurusan= F.namedItem("txJurusan").value;
        let hobi_1= [
            F.namedItem("txHobi_Singing").checked,
            F.namedItem("txHobi_Reading").checked,
            F.namedItem("txHobi_Sleeping").checked,
            F.namedItem("txHobi_Swiming").checked,
            F.namedItem("txHobi_Watching").checked
        ];


        console.log(`NAMA: ${name}\nNIM: ${nim}\nJenis Kelamin: ${jkel}\nJurusan: ${jurusan}`);
        console.log("Hobi: "+hobi_1);

        return false;
    }
</script>
</body>
</html>