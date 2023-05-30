<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Stagiaire</title>
</head>
<body>
<a href="index.php" class="ca">SE Deconnecter</a>

<!-- ********************************************************************************************************************* -->
<nav class="navbar navbar-light justify-content fs-3 mb-5" style="background-color: #00ff5573; margin: 50px;"> 
 <b> LISTES DES FILIERES</b>
</nav>
<!-- second container -->
<div class="container">

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID Filière</th>
                <th scope="col">Nom Filière</th>
                <th scope="col">Niveau</th>
               
            </tr>
        </thead>

        <tbody>
            <?php

            include "db_conn.php";

            $sql =  "SELECT * FROM filiere";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['idFiliere'] ?></td>
                        <td><?php echo $row['nomFiliere'] ?></td>
                        <td><?php echo $row['niveau'] ?></td>
                        
                        
                    </tr>

                <?php

             } 

            ?>
            
        </tbody>

    </table>
</div>
</div>

<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>