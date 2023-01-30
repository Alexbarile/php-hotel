<?php

    // array alberghi

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- form parcheggio -->

                <form action="./index.php" method="GET">
                    <h3>Parcheggio</h3>
                    <input type="radio" name="parcheggio" value="Si">
                    <label for="Si">Si</label><br>
                    <input type="radio" name="parcheggio" value="No">
                    <label for="No">No</label><br>
                    <button type="submit">Cerca</button>
                </form>

                <!-- form voto -->

                <form action="/index.php" method="GET">
                    <h3>Voto</h3>
                    <label for="quantity">Voto:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="5"><br>
                    <button type="submit">Cerca</button>
                </form>

                <!-- tabella -->

                <table class="table">
                    <thead>

                        <!-- ciclo le chiavi dell'array di array -->

                         <?php foreach($hotels[0] as $key => $item){?>
                            <th>
                                <?php echo ($key); ?>
                            </th>
                        <?php
                        }
                        ?>
                    </thead>
                    <tbody>

                        <!-- ciclo gli oggetti dell'array -->
                        
                        <?php foreach($hotels as $item){?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td><?php echo $item['description']; ?></td>
                                <td>
                                    <?php if($item['parking']){
                                        echo 'Si';
                                    }else{
                                        echo 'No';
                                    }; ?>
                                </td>
                                <td><?php echo $item['vote']; ?></td>
                                <td><?php echo $item['distance_to_center']." Km"; ?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>