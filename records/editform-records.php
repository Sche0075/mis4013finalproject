<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editRecordModal<?php echo $record['record_id']; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z"/>
        <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5"/>
      </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editRecordModal<?php echo $record['record_id']; ?>" tabindex="-1" aria-labelledby="editRecordModalLabel<?php echo $record['record_id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="editRecordModalLabel<?php echo $record['record_id']; ?>">Edit Record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="modal-body">
                          <form method="post" action="">
                                    <div class="mb-3">
                                      <label for="pName<?php echo $record['record_id']; ?>" class="form-label">Record Label Name</label>
                                      <input type="text" class="form-control" id="rName<?php echo $record['record_id']; ?>" name="rName" value="<?php echo $record['record_name']; ?>">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="rCeo<?php echo $record['record_id']; ?>" class="form-label">Record CEO</label>
                                      <input type="text" class="form-control" id="rCeo<?php echo $player['record_id']; ?>" name="rCeo" value="<?php echo $record['record_ceo']; ?>">
                                    </div>
                                                                    
                                <input type="hidden" name="rid" value="<?php echo $record['record_id']; ?>">
                                <input type="hidden" name="actionType" value="Edit">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>
