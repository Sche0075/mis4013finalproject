<h1>Count of Songs in Genres</h1>

<div>
  <canvas id="Chart1"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('Chart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
            while ($genre = $genres->fetch_assoc()) {
              echo "'" . $genre['genre_name'] . "', ";
            }
            ?>],
      datasets: [{
        label: '# of Songs',
        data: [
          <?php
            $genres = selectGenres;
            while ($genre = $genres->fetch_assoc()) {
              echo "'" . $genre['count_song'] . ", ";
            }
            ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
