<!DOCTYPE html>
<html>
    <head>
        <title>stage professionnel</title>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width,instal-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body background-color="green">
        <center>
        <header>
            <h1>demande des stage profesinnel</h1>
        </header>
        <main>
                <form action="submit.php" method="post">
                    <label for="nom">NOM:</label>
                    <input type="text" id="nom" name="nom" requiered><br>
                    <label for="prenom">PRENOM</label>
                    <input type="TEXT" id="prenom" name="prenom" required><br>
                    <label for="email">ADRESSE EMAIL:</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="telephone">NUMERO DE TELEPONE:</label>
                    <input type="tel" id="telephone" required><br>
                    <label for="ecole">ECOLE/UNIVERSITE:</label>
                    <input type="text" id="ecole" name="ecole" required><br>
                    <label for="diplome">DIPLOME PREPARER:</label>
                    <input type="text" id="diplome" name="diplome" required><br>
                    <label for="date_debut">DATE DE DEBUT:</label>
                    <input type="date" id="date_de_debut" name="date_de_debut" required><br>
                    <label for="date_de_fin">DATE DE FIN:</label>
                    <input type="date" id="date_fin" name="=date_de_fin" required><br>
                    <label for="lettre_motivation">LETTRE DE MOTIVATION:</label>
                    <textarea id="lettre_motivation" name="lettre_motivation" required></textarea><br>
                    <label for="piece_jointe">importer une piece jointe:</label><br>
            <input type="file" id="piece_jointe" name="piece_jointe"><br>
            
                    
                </form>
        </main>
        <footer>
            <p> copyright @
                <script>
                    document.write(date().getFUllyear());
                </script>
                 entreprise:ACEP cameroun 
    
            </p>
        </footer>
        
        </center>
    </body>
</html>