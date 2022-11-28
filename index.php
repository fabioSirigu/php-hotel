<?php
/* Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus: 1
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
 */

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
/* foreach ($hotels as $hotel) {
      echo '<br>';
      foreach ($hotel as $key => $details) {
            echo $key . ': ' . $details . '<br>';
      }
}; */
// METODO INIZIALE
/* <?php foreach ($hotels as $key => $hotel)
                              foreach ($hotel as $key => $details) : ?>
                              <th scope="row"><?php echo $key  ?></th>

                        <?php endforeach; ?> */

/* if ($_GET[$parking] == 'true') {
} */
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <title>Document</title>
</head>

<body>
      <div class="container mt-5 d-flex align-items-center flex-column">
            <form action="index.php" method="get" class="py-5 text-center">
                  <div class="pb-3">
                        <label for="parking">Parcheggio</label>
                        <select name="parking" id="parking">
                              <option value="" disabled="disabled" selected>Seleziona un opzione</option>
                              <option value="true">Si</option>
                              <option value="false">No</option>
                        </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Cerca</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
            </form>
            <table>
                  <thead>
                        <tr>
                              <?php foreach ($hotels[0] as $key => $hotel) { ?>
                                    <th class="p-3"> <?= $key ?> </th>
                              <?php } ?>
                        </tr>
                  </thead>

                  <tbody>
                        <?php foreach ($hotels as $key => $hotel) { ?>
                              <tr>
                                    <?php foreach ($hotel as $key => $details) { ?>
                                          <?php if ($key == 'parking' && $details == true) {
                                                $details = 'disponibile';
                                          } elseif ($key == 'parking' && $details == false) {
                                                $details = 'non disponibile';
                                          }
                                          ?>
                                          <td class="p-3"> <?= $details ?> </td>
                                    <?php } ?>
                              </tr>
                        <?php } ?>
                  </tbody>
            </table>
      </div>

</body>

</html>