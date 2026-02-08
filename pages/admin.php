<?php
$filePath = __DIR__ . "/../data/bookings.csv";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - View Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-dark">Recent Bookings</h2>
        <div class="card shadow border-0">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <?php
                            if (($handle = fopen($filePath, "r")) !== FALSE) {
                                $headers = fgetcsv($handle, 1000, ",");
                                foreach ($headers as $header) {
                                    echo "<th>" . htmlspecialchars($header) . "</th>";
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                    echo "<tr>";
                                    foreach ($data as $cell) {
                                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                                    }
                                    echo "</tr>";
                                }
                                fclose($handle);
                            } else {
                                echo "<tr><td colspan='8' class='text-center'>No bookings found yet.</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="../index.php" class="btn btn-secondary mt-3">Back to Site</a>
    </div>
</body>
</html>