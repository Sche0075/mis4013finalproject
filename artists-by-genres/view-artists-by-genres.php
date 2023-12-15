<h1>Genre Artists</h1>
<h5>(To edit these you must return to the Artist tab)</h5>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Artist Name:</th>
        <th>HomeTown:</th>
        <th>Record Label:</th>
        <th>Genre:</th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($abg = $artistsbygenres->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $abg['artist_id']; ?></td>
                <td><?php echo $abg['artist_name']; ?></td> 
                <td><?php echo $abg['artist_hometown']; ?></td>
                <td><?php echo $abg['record_name']; ?></td>
                <td><?php echo $abg['genre_name']; ?></td>
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>

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
