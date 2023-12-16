<h1>Count of Songs in Genres</h1>
<div class="table-responsive">
<table class="table">
<thead>
  <tr>
    <th></th>
  </tr>
</thead>
<tbody>
  <?php
while ($genre = $genres->fetch_assoc()) {
  include "model-charts.php"
  }
    ?>
</tbody>
</table>
</div>
