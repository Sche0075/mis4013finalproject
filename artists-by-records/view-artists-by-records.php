<h1>Record Label Artist</h1>
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
          while ($abr = $artistbyrecords->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $abr['a.artist_id']; ?></td>
                <td><?php echo $abr['a.atrist_name']; ?></td> 
                <td><?php echo $abr['a.artist_hometown']; ?></td>
                <td><?php echo $abr['r.record_name']; ?></td>
                <td><?php echo $abr['g.genre_name']; ?></td>
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
