<!DOCTYPE html>
<html>
    <head>
        <title>stage academique</title>
        <style>
            form{
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f2f2f2;
                border-radius: 10px;
            }
                label{
                    display: block;
                    margin-top: 10px;
                    font-weight: bold;
                }
                    input[type="text"],
                    input[type="date"],
                    select, 
                    textarea{
                        width: 100%;
                        padding: 10px;
                        border: none;
                        border-radius: 5px;
                        background-color: #fff;
                        box-shadow: 0 0 5px #ccc;
                        font-size: 16px;
                        margin-bottom: 20px;
                    } 
                    input[type="submit"] {
                        background-color: #4CAF50;
                        color: pink;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 5px;
                        cursor:pointer;
                        font-size: 16px;
                        margin-top: 20px;
                    }
                    body{
                        background-color: aquamarine;
                    }
        </style>

    </head>
    <body>
        <center> <h1>  formulaire de demande de stage</h1></CENTER> 
        <form>
            <label for="nom">NOM:</label><br>
            <input type="text" id="nom" name="nom"><br>
            <label for="prenom">PRENOM:</label><br>
            <input type="text" id="prenom" name="prenom"><br>
            <label for="mail">E_mail:</label><br>
            <input type="text" id="mail" name="mail"><br>
            <label for="sexe">SEXE:</label><br>
            <input type="radio" id="homme" name="sexe" value="homme">
            <label for="homme">HOMME</label>
            <input type="radio" id="homme" name="sexe" value="homme">
            <label for="femme">FEMME</label>
            <input type="radio" id="femme" name="sexe" value="femme">
            <label for="femme">FEMME</label><br>
            <label for="date_naissance">DATE DE NAISSANCE </label><br>
            <input type="date" id="date_naissance" name="date_naissance"><br>
            <label for="lieu_denaissance">LIEU DE NAISSANCE:</label><br>
            <input type="text" id="lieu_denaissance" name="lieu_denaissance"><br>
            <label for="niveau_etude">CHOISIRE LE NIVEAU D'ETUDE:</label><br>
            <select id="niveau_etudes" name="niveau_etude">
                <option value="BTS">BTS</option>
                <option value="LICENCE">LICENCE</option>
                <option value="MASTER1">MAASTER1</option>
                <option value="MASTER2">MAASTER2</option>
            </select><br>
            <label for="FILIERE">CHOISIR LA FILIERE:</label><br>
            <select id="filiere" name="filiere">
                <option value="SR">SYSTEME ET RESEAU</option>
                <option value="GL">GENIE LOGICIEL</option>
                <option value="TELECOM">TELECOM</option>
            </select><br>
            <label for="institut_frequente">INSTITUT FREQUENTER:</label><br>
            <input type="text" id="instiutu_frequenter" name="institut_frequenter"><br>
            <label for="commentaires">SAISIR DEMANDE:</label><br>
            <textarea id="commentaire" name="commentaires"></textarea><br>
            <label for="piece_jointe">importer une piece jointe:</label><br>
            <input type="file" id="piece_jointe" name="piece_jointe"><br>
            <input type="submit" value="valider">
            
        </form>
    </body>
</html>