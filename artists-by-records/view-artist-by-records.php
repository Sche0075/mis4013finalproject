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
          while ($artistsbyrecords = $teams->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $team['player_id']; ?></td>
                <td><?php echo $team['player_name']; ?></td> 
                <td><?php echo $team['player_position']; ?></td>
                <td><?php echo $team['player_age']; ?></td>
                <td><?php echo $team['level']; ?></td>
                <td><?php echo $team['practice_time']; ?></td>
              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>
