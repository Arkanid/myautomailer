<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="Arkanid MyAutoMailer-v1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="gidis-styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="myautomail"><h1>MyAutoMailer - V1</h1></div>
    <form action="/mailsend.php" method="post">
    <input type="text" id="gonderenisim" name="gonderenisim" placeholder="Gönderen adını giriniz.">
    <p></p>
    <input type="email" id="email" name="email" placeholder="Mail adresinizi giriniz.">
    <p></p>
    <input type="password" id="password" name="password" placeholder="Şifrenizi giriniz.">
    <p></p>
    <input type="email" id="email2" name="email2" placeholder="Mailin gideceği adresi yazınız.">
    <p></p>
    <input type="text" id="konubaslik" name="konubaslik" placeholder="Konu başlığını giriniz.">
    <p></p>
    <input type="submit" name="submit" id="submit" class="btn btn-secondary" value="Mail Yolla">
    <p></p>
    <div class="textareacss">
  <textarea placeholder="Body kısmına yazılacak şeyi girin. ÖRNEK: Instagram, Twitter taslakları." 
  name="bodykisim" id="bodykisim" rows="3"></textarea>
</div>

</div>
    </form>
        
        
    </body>
</html>