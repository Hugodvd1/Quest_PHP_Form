<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OSS 117 à votre service</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="./index.php" method="post">
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="fname" name="firstname" placeholder="Jean">

            <label for="name">Nom :</label>
            <input type="text" id="lname" name="lastname" placeholder="Dujardin">

            <label for="mail">E-mail : </label>
            <input type="email" id="mail" name="mail" placeholder="jean_dujardin@oss117.fr">

            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phone" placeholder="06 66 66 66 66">

            <label for="topic">C'est à quel sujet ? </label>

            <select name="topic" id="topic" required>
                <option value="" disabled selected>Select the topic</option>
                <option value="life">Nouvelle mission</option>
                <option value="universe">Recette de la blanquette </option>
                <option value="eveything">Habile Bill </option>
            </select>

            <label for="msg">Message :</label>
            <textarea id="msg" name="message" placeholder="Je vous écoute mais pas trop longtemps"></textarea>

            <button type="submit">In da data bank</button>
        </div>
    </form>

</body>

</html>
