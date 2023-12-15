<h1>Songs in Album</h1>
<h5>(To edit these you must return to the Songs tab)</h5>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Song Name:</th>
        <th>Genre:</th>
        <th>Album Name:</th>
        <th>Album Year:</th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($abaid = $albumsbyartists->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $abaid['album_id']; ?></td>
                <td><?php echo $abaid['artist_name']; ?></td> 
                <td><?php echo $abaid['genre_name']; ?></td>
                <td><?php echo $abaid['album_name']; ?></td>
                <td><?php echo $abaid['album_year']; ?></td>
                              
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
