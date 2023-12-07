<h1>Record Label Artists</h1>
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
          while ($abr = $artistsbyrecords->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $abr['artist_id']; ?></td>
                <td><?php echo $abr['artist_name']; ?></td> 
                <td><?php echo $abr['artist_hometown']; ?></td>
                <td><?php echo $abr['record_name']; ?></td>
                <td><?php echo $abr['genre_name']; ?></td>
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
