<h1>Record Label Artist</h1>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Genre</th>
        <th>HomeTown:</th>
        
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($abr = $artistbyrecords->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $abr['artist_id']; ?></td>
                <td><?php echo $abr['atrist_name']; ?></td> 
                <td><?php echo $abr['genre_name']; ?></td>
                <td><?php echo $abr['artist_hometown']; ?></td>
                              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
