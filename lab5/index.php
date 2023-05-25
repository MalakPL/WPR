<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $cena = $_POST["cena"];
    $rok = $_POST["rok"];
    $opis = $_POST["opis"];

    $data = Array (
        "marka" => $marka,
        "model" => $model,
        "cena" => $cena,
        "rok" => $rok,
        "opis" => $opis
    );

    $id = $db->insert ('samochody', $data);

    if ($id)
        echo 'Samochód został dodany pomyślnie.';
    else
        echo 'Wystąpił błąd podczas dodawania samochodu.';
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal samochodowy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tab-link').on('click', function(e) {
                e.preventDefault();
                var tabId = $(this).attr('href');
                $('.tab-content').hide();
                $(tabId).show();
            });
        });
    </script>
</head>

<body class="bg-gray-200">
<div class="w-full flex justify-center bg-blue-500 p-3">
    <nav class="w-1/2 flex justify-between text-white font-bold">
        <a href="#home" class="tab-link py-2">Strona główna</a>
        <a href="#allCars" class="tab-link py-2">Wszystkie samochody</a>
        <a href="#addCar" class="tab-link py-2">Dodaj samochód</a>
    </nav>
</div>
<div class="tab-content" id="home">
    <div class="mt-5 w-1/2 mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Strona główna</h2>
        <table class="table bg-white table-auto w-full text-center">
            <thead class="bg-blue-500 text-white font-bold">
            <tr>
                <th>ID</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Cena</th>
                <th>Rok</th>
                <th>Opis</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $db->orderBy('cena','asc');
            $allCars = $db->get('samochody', 5);
            foreach($allCars as $car): ?>
            <tr>
                <td><?php echo $car['id']; ?></td>
                <td><?php echo $car['marka']; ?></td>
                <td><?php echo $car['model']; ?></td>
                <td><?php echo $car['cena']; ?></td>
                <td><?php echo $car['rok']; ?></td>
                <td><?php echo $car['opis']; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="tab-content" id="allCars" style="display: none;">
    <div class="mt-5 w-1/2 mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Wszystkie samochody</h2>
        <table class="table bg-white table-auto w-full text-center">
            <thead class="bg-blue-500 text-white font-bold">
            <tr>
                <th>ID</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Cena</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            <?php
            $db->orderBy('rok','desc');
            $allCars = $db->get('samochody');
            foreach($allCars as $car): ?>
                <tr class="border border-gray-200">
                    <td><?php echo $car['id']; ?></td>
                    <td><?php echo $car['marka']; ?></td>
                    <td><?php echo $car['model']; ?></td>
                    <td><?php echo $car['cena']; ?></td>
                    <td><a href="details/<?php echo $car['id']; ?>" class="inline-block my-2 bg-blue-500 text-white px-2 py-1">Szczegóły</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="tab-content" id="addCar" style="display: none;">
    <div class="mt-5 w-1/2 mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Nowy samochód</h2>
        <form method="post" action="/" class="bg-white p-5">
            <label for="marka">Marka:</label><br>
            <input type="text" id="marka" name="marka" class="border border-gray-300 p-2 w-full"><br>
            <label for="model">Model:</label><br>
            <input type="text" id="model" name="model" class="border border-gray-300 p-2 w-full"><br>
            <label for="cena">Cena:</label><br>
            <input type="number" id="cena" name="cena" step="0.01" class="border border-gray-300 p-2 w-full"><br>
            <label for="rok">Rok:</label><br>
            <input type="number" id="rok" name="rok" class="border border-gray-300 p-2 w-full"><br>
            <label for="opis">Opis:</label><br>
            <textarea id="opis" name="opis" class="border border-gray-300 p-2 w-full"></textarea><br>
            <input type="submit" value="Dodaj samochód" class="bg-blue-500 text-white px-2 py-1 mt-3">
        </form>
    </div>
</div>



</body>
</html>
