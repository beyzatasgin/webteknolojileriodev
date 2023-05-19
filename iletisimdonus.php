<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BEYZA TAŞĞIN</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1922f4bd30.js" crossorigin="anonymous"></script>

</head>

<body>
<!-- iletisim -->
<section class="p-5 text-center">
        <div class="container">
            <h2 class="mb-3 font-weight-bold" id="iletisimkontrolbaslik">İLETİŞİM KONTROL</h2><i class="fas fa-code" id="iconn"></i>
            <hr class="cizgi">
        </div>
    </section>
    <br><br>
    <!-- bitis -->


    <table class="table">
        <thead class="table">
            <tr>
                <th colspan="5" id="basliklar">
                    <h3> GELEN BİLGİLER</h3>
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td id="basliklar">İsminiz</td>
                <td id="basliklar">

                    <?php
                    echo $_POST['isim'];
                    ?>

                </td>
            </tr>

            <tr>
                <td id="basliklar">E-Mail</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mail'];
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Konu</td>
                <td id="basliklar">
                    <?php
                    if (isset($_POST['gonder'])) {

                        $secim = $_POST['radio'];
                        echo $secim;
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Cinsiyetiniz</td>
                <td id="basliklar">
                    <?php
                    if (isset($_POST['gonder'])) {

                        $secim2 = $_POST['radio2'];
                        echo $secim2;
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Mesajınız</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mesaj'];
                    ?>
                </td>
            </tr>

        </tbody>

    </table>

  
  <footer class="py-3 text-center clr">
    <p> 2023 Web Teknolojileri Projesi Beyza Taşğın </p>
    <p><a href="" class="Link"> <i class="fabfa-github"></i>GitHub </a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="boostrap.js"></script>


    
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
        crossorigin="anonymous"></script>


    <script src="boostrap.js"></script>
</body>

</html>