<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quick Bookings | Compare & Save</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
    <header class="text-center my-5">
        <h1 class="display-4 fw-bold text-primary">Quick Bookings</h1>
        <p class="lead">Compare trip prices easier than ever.</p>
    </header>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 p-4">
                    <form name="hotel" method="post" autocomplete="off" action="pages/hotels.php">
                        <div class="mb-3">
                            <label for="inDate" class="form-label">Check-in Date</label>
                            <input class="form-control" type="date" name="inDate" id="inDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="outDate" class="form-label">Check-out Date</label>
                            <input class="form-control" type="date" name="outDate" id="outDate" required>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success btn-lg" type="submit" name="CompareRates">Compare Rates</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="row mt-5 g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="images/bayworld.jpg" class="card-img-top" alt="bayworld">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Bayworld Oceanarium</h5>
                        <p class="card-text text-muted">Diverse displays including a museum, oceanarium, and snakepark.</p>
                        <a href="https://www.bayworld.co.za/" target="_blank" class="btn btn-outline-primary mt-auto">More Info</a>
                    </div>
                </div>
            </div>
            </section>
    </main>

    <footer class="mt-5 py-5 bg-dark text-white text-center">
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>