<?php
include "./connection.php";
$result = $conn->query("SELECT * FROM stagiaires");
$stagaires = $result->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($stagaires);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires Table</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Stagiaires Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Add more table headers for other columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php
                include "./connection.php";
                $result = $conn->query("SELECT * FROM stagiaires");
                $stagiaires = $result->fetchAll(PDO::FETCH_ASSOC);

                foreach ($stagiaires as $stagiaire) {
                    echo "<tr>";
                    echo "<td>{$stagiaire['id']}</td>";
                    echo "<td>{$stagiaire['full_name']}</td>";
                    echo "<td>{$stagiaire['email']}</td>";
                    // Add more table cells for other columns as needed
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>






