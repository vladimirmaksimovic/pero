<?php

require_once '../model/DAO.php';

$dao = new DAO();

$automobili = $dao->selectAllCars();

/* echo "<pre>";
    print_r ($automobili);
    echo "</pre>"; */

$msg = isset($msg) ? $msg : "";
$marka = isset($marka) ? $marka : "";
$cena = isset($cena) ? $cena : "";

?>

<!-- prikaz sekcija -->
<section class="content">
  <h2>Sekcija prikaza</h2>
  <table class="cars">
    <thead>
      <tr>
        <th>RB</th>
        <th>Marka vozila</th>
        <th>Cena vozila</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($automobili as $auto) { ?>
        <tr>
          <td><?php echo $auto['id']; ?></td>
          <td><?php echo $auto['marka']; ?></td>
          <td><?php echo $auto['cena']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>