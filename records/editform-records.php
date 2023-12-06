<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayerModal<?php echo $player['player_id']; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editPlayerModal<?php echo $player['player_id']; ?>" tabindex="-1" aria-labelledby="editPlayerModalLabel<?php echo $player['player_id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="editPlayerModalLabel<?php echo $player['player_id']; ?>">Edit Player</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="modal-body">
                          <form method="post" action="">
                                    <div class="mb-3">
                                      <label for="pName<?php echo $player['player_id']; ?>" class="form-label">Player Name</label>
                                      <input type="text" class="form-control" id="pName<?php echo $player['player_id']; ?>" name="pName" value="<?php echo $player['player_name']; ?>">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="pPosition<?php echo $player['player_id']; ?>" class="form-label">Player Position</label>
                                      <input type="text" class="form-control" id="pPosition<?php echo $player['player_id']; ?>" name="pPosition" value="<?php echo $player['player_position']; ?>">
                                    </div>
                                  
                                    <div class="mb-3">
                                      <label for="pAge<?php echo $player['player_id']; ?>" class="form-label">Player Age</label>
                                      <input type="text" class="form-control" id="pAge<?php echo $player['player_id']; ?>" name="pAge" value="<?php echo $player['player_age']; ?>">
                                    </div>   
                                  
                                <input type="hidden" name="pid" value="<?php echo $player['player_id']; ?>">
                                <input type="hidden" name="actionType" value="Edit">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>
