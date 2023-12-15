<h1>Artist's Albums</h1>
<h5>(To edit these you must return to the Albums tab)</h5>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Album Name:</th>
        <th>Genre:</th>
        <th>Album Name:</th>
        <th>Album Year:</th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($aba = $albumsbyartists->fetch_assoc()) {
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
