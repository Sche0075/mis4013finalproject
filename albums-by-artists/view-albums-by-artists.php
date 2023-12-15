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

                <td><?php echo $aba['album_id']; ?></td>
                <td><?php echo $aba['artist_name']; ?></td> 
                <td><?php echo $aba['genre_name']; ?></td>
                <td><?php echo $aba['album_name']; ?></td>
                <td><?php echo $aba['album_year']; ?></td>
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
