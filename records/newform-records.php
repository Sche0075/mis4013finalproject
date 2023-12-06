<!-- Button trigger modal -->
<div style="margin-right:20px;margin-top:50px;">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newRecordModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
          <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
    </svg>
  </button>
</div>
  
<!-- Modal -->
<div class="modal fade" id="newRecordModal" tabindex="-1" aria-labelledby="newRecordModalLabel" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="newRecordModalLabel">New Record Label</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="modal-body">
                          <form method="post" action="">
                                    <div class="mb-3">
                                      <label for="rName" class="form-label">Record Label Name</label>
                                      <input type="text" class="form-control" id="rName" name="rName">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="rCeo" class="form-label">Record Label Ceo</label>
                                      <input type="text" class="form-control" id="rCeo" name="rCeo">
                                    </div>                                  
                                  
                                <input type="hidden" name="actionType" value="Add">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>
