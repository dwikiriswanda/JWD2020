<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        $pribadi[0]["nama"] = "Axl Rose";
        $pribadi[0]["gender"] = true;
        $pribadi[0]["usia"] = 58;

        $pribadi[1]["nama"] = "Amy Lee";
        $pribadi[1]["gender"] = false;
        $pribadi[1]["usia"] = 38;

        $pribadi[2]["nama"] = "Hayley Williams";
        $pribadi[2]["gender"] = false;
        $pribadi[2]["usia"] = 31;

        //menampilkan isi $pribadi
        foreach ($pribadi as $data) {
            print("Nama: ".$data["nama"]."<br>");
            print("Jenis Kelamin: ".($data["gender"] ? "Pria" : "Wanita") . "<br>");
            print("Usia: ".$data["usia"]."<br><br>");
        }


    ?>
</body>
</html>