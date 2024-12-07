<?php
// Kontrollo nëse të dhënat janë dërguar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Merr të dhënat nga kërkesa POST
    $latitude = $_POST['latitude'] ?? null;
    $longitude = $_POST['longitude'] ?? null;

    // Kontrollo nëse të dhënat janë valide
    if ($latitude && $longitude) {
        // Ruaj të dhënat në një skedar
        $file = 'geo_locations.txt';
        $data = "Latitude: $latitude, Longitude: $longitude\n";

        // Shto të dhënat në skedar
        file_put_contents($file, $data, FILE_APPEND);

        // Kthe një përgjigje për klientin
        echo "Location saved successfully!";
    } else {
        echo "Invalid data received!";
    }
} else {
    echo "Invalid request method!";
}
?>
