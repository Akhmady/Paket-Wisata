<?php

session_start();

$id = $_GET['id'] ?? '0';

$packageName = [
    ["Bali", 2000000],
    ["Lombok", 3000000],
    ["Raja Ampat", 4000000]
];


$packageChosen = $_POST['choosePackage'] ?? $id;
$packagePrice = $packageName[$packageChosen][1];

$name = $_POST['name'] ?? '';
$identity = $_POST['identity'] ?? '';
$packageType = $_POST['packageType'] ?? '';
$people = $_POST['people'] ?? '';
$departure = $_POST['departure'] ?? '';
$basePrice = $_POST['baseprice'] ?? 0;
$packageTypePrice = 0;
$grandTotal = 0;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    if ($packageType == 'regular') {
        $packageTypePrice = 5000000;
    } elseif ($packageType == 'premium') {
        $packageTypePrice = 6000000;
    } elseif ($packageType == 'vip') {
        $packageTypePrice = 7500000;
    }


    if (isset($_POST['documentation'])) {
        $documentationStatus = "Yes";
        $documentation = 500000;
    } else {
        $documentationStatus = "No";
        $documentation = 0;
    }

    if (isset($_POST['insurance'])) {
        $insuranceStatus = "Yes";
        $insurance = 300000;
    } else {
        $insuranceStatus = "No";
        $insurance = 0;
    }

    if (isset($_POST['pickup'])) {
        $pickupStatus = "Yes";
        $pickup = 400000;
    } else {
        $pickupStatus = "No";
        $pickup = 0;
    }

    if (isset($_POST['calculate']) || isset($_POST['order'])) {
        if ($people >= 10) {
            $discount = 0;
            $grandTotal = ($packagePrice * $people) + $packageTypePrice + $documentation + $insurance + $pickup - $packagePrice; // dikurangi $packagePrice karena menyatakan harga per orang        
        } elseif ($people >= 5) {
            $discount = 10;
            $grandTotal = ($packagePrice * $people * 0.9)  + $packageTypePrice + $documentation + $insurance + $pickup;
        } else {
            $discount = 0;
            $grandTotal = ($packagePrice * $people) + $packageTypePrice + $documentation + $insurance + $pickup;
        }
    }

    $orderData = [];
    if (isset($_POST['order'])) {
        $orderData = [
            'Name' => $name,
            'Identity Number ' => $identity,
            'Package Name' => $packageName[$packageChosen][0],
            'Package Type' => ucfirst($packageType),
            'People' => $people,
            'Departure' => $departure,
            'Documentation' => $documentationStatus,
            'Insurance' => $insuranceStatus,
            'Pickup' => $pickupStatus,
            'Discount' => $discount . '%',
            'Grand Total' => "Rp" . number_format($grandTotal, 0, ',', '.')
        ];
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-5 mb-3">
        <div class="card">
            <div class="card-header text-center">
                <h5> Order </h5>
            </div>

            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <input type="name" class="form-control" name="name" placeholder="Enter your name here"
                            value="<?= $name ?>">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="identity" min="16" placeholder="Identity Number" value="<?= $identity ?>" required>
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="choosePackage" onchange="this.form.submit()">
                            <?php foreach ($packageName as $index => $type) : ?>


                                <option value="<?= $index ?>" <?= $index == $packageChosen ? 'selected' : '' ?>>
                                    <?= $type[0] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-3">Package Type</h5>
                        <input type="radio" name="packageType" value="regular" required
                            <?= $packageType == 'regular' ? 'checked' : '' ?>>
                        <label class="form-check-label">Regular - Rp. 5.000.000</label>
                        <br>
                        <input type="radio" name="packageType" value="premium" required
                            <?= $packageType == 'premium' ? 'checked' : '' ?>>
                        <label class="form-check-label">Premium - Rp. 6.000.000</label>
                        <br>
                        <input type="radio" name="packageType" value="vip" required
                            <?= $packageType == 'vip' ? 'checked' : '' ?>>
                        <label class="form-check-label">VIP - Rp. 7.500.000</label>
                    </div>

                    <div class="mb-3">
                        <input type="number" class="form-control" name="people" min="1" placeholder="Enter Passenger Count" value="<?= $people ?>">
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" name="departure" placeholder="Your Departure Date" value="<?= $departure ?>">
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="yes" name="documentation"
                            <?= isset($_POST['documentation']) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="driver">
                            Documentation Team (Rp.500.000 add-on)
                        </label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="yes" name="insurance"
                            <?= isset($_POST['insurance']) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="driver">
                            Insurance (Rp.300.000 add-on)
                        </label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="yes" name="pickup"
                            <?= isset($_POST['pickup']) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="driver">
                            Pick Up (Rp.400.000 add-on)
                        </label>
                    </div>



                    <div class="mb-3">
                        <label for="baseprice" class="form-label">Base Price (without Add-on and discount and package type)</label>
                        <input type="text" class="form-control" name="subtotal" placeholder="Harga Paket"
                            value="<?= number_format($packagePrice, 0, ',', '.') ?>" readonly>
                    </div>
                    <button type="submit" name="calculate" class="btn btn-primary w-10 mb-3">Calculate</button>
                    <div class="mb-3">
                        <label for="grandtotal" class="form-label">Grand Total to be paid</label>
                        <input type="text" class="form-control" name="hargatotal" value="<?= number_format($grandTotal, 0, ',', '.') ?>"
                            readonly>
                    </div>




                    <div class="mb-3">
                        <button type="submit" name="order" class="btn btn-success mb-3">Order</button>
                    </div>
                </form>
            </div>

        </div>
        <?php if (!empty($orderData)) : ?>
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h5>Order Details</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($orderData as $key => $value) : ?>
                            <li class="list-group-item"><strong><?= $key ?>:</strong> <?= $value ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>