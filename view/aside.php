<?php

require_once '../model/DAO.php';

$marka = isset($marka) ? $marka : "";
$cena = isset($cena) ? $cena : "";

?>

<!-- aside -->
<aside>
  <fieldset>
    <legend>Unos podataka</legend>
    <form action="../controller/automobili.php" method="get">
      <label for="marka">Marka</label>
      <input type="text" id="marka" name="marka" value="<?= $marka; ?>" />
      <label for="cena">Cena</label>
      <input type="number" id="cena" name="cena" value="<?= $cena; ?>" />
      <hr>
      <input type="submit" name="action" value="Unos" />
    </form>
  </fieldset>
</aside>