<div style="display:flex;justify-content: center;align-items: center;">
</br>
</br>
</br>
  <h1>This is the breakdown of the Genres and the amount of Songs they contain</h1>
</br>
</br>
</br>
</div>

<style>
  #chartContainer {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh; /* Adjust the height as needed */
  }

  #Chart1 {
    width: 80%; /* Adjust the width as needed */
    height: auto; /* Maintain the aspect ratio */
  }
</style>

<div id="chartContainer">
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
        ?>
      ],
      datasets: [{
        label: '# of Songs',
        data: [
          <?php
            $genres = selectchartGenres();
            while ($genre = $genres->fetch_assoc()) {
              echo $genre['count_artist'] . ', ';
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

<head>
<style>
body {  
  background-image: url(imageex.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
