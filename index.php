<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - hotel</title>
    <!--style bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!--my style-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>

    <div class="container">
        <!-- tabella per ogni hotel in array-->
        <?php
        foreach ($hotels as $hotel) {
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <!-- colonna per ogni info in hotel-->
                        <?php
                        foreach ($hotel as $info => $value) {
                            ?>
                            <th scope="col">

                                <?php echo $info ?>

                            </th>
                        <?php } ?>

                    </tr>
                </thead>
                <!-- riempire tabella con dati di ogni hotel-->
                <tbody>
                    <tr>
                        <td>
                            <?php echo $hotel["name"] ?>
                        </td>
                        <td>
                            <?php echo $hotel["description"] ?>
                        </td>
                        <!--trasformare echo booleano che restituisce solo 1 o null-->
                        <td>
                            <?php echo $hotel['parking'] ? 'Yes' : 'No' ?>
                        </td>
                        <td>
                            <?php echo $hotel["vote"] ?> / 5
                        </td>
                        <td>
                            <?php echo $hotel["distance_to_center"] ?> Km
                        </td>
                    </tr>
                </tbody>
            </table>

        <?php
        }
        ?>
    </div>

    <!--bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>