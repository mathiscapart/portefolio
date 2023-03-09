<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style_contact.css">
    <title>Contact</title>
</head>
<body>
    <div class="display">
        <p id="logo"><strong>Mathis</strong></p>
        <img id="round" src="https://s2.qwant.com/thumbr/0x0/f/b/589a57077b2e4bdad756f0b4e9bb9f02798378af6ee411b66e675aed202d88/red.round_.png?u=https%3A%2F%2Fpalettepaint.com%2Fwp-content%2Fuploads%2Fred.round_.png&q=0&b=1&p=0&a=0">
        <div id="menu" class="menu">
            <a href="index.html" class="barre" id="home">Home</a>
            <a href="contact.php" id="contact" class="barre">Contact</a>
        </div>
    </div>
    <img id="sep" src="https://s2.qwant.com/thumbr/0x380/4/c/2714a78061e4dc941b5974eb16fffb40023259d1d38918a4772e53a22ad721/line-normal-begin.png?u=https%3A%2F%2Fwww.xn--icne-wqa.com%2Fimages%2Ficones%2F4%2F3%2Fline-normal-begin.png&q=0&b=1&p=0&a=0">
    <img src="image/Contact.png" id="enveloppe">

    <form action="" id="formulaire" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name">
        <label for="mail">Mail:</label>
        <input type="email" id="mail" name="mail">
        <label for="sujet">Sujet:</label>
        <input type="text" id="sujet" name="sujet">
        <label for="textarea">Texte de votre message:</label>
        <textarea id="textarea" name="textarea"></textarea>
        <button type="submit">Soumettre</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=formulaire;charset=utf8", 'root' , 'root');
    }catch (Exception $e){
        echo "Erreur :" . $e->getMessage();
    }
    if(!empty($_POST['user_name']) && !empty($_POST['mail']) && !empty($_POST['sujet']) && !empty($_POST['textarea']))
    {
        $name = $_POST['user_name'];
        $email = $_POST['mail'];
        $sujet = $_POST['sujet'];
        $textarea  = $_POST['textarea'];
        $req = $bdd->prepare('INSERT INTO formulaire (user_name, email, sujet, textarea) VALUES ( ?, ?, ?, ?)');
        $req->execute(array(
            $name, $email, $sujet, $textarea
        ));
        return;
    }
    else{
        echo "<p id='connect'>* compléter tout les champs</p>";
    }
    ?>
</body>
</html>