<!-- Button trigger modal 
<div style="height:16px;width:16px;margin-right:70px;margin-top:30px;">
  <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#newAlbumModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z"/>
        <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5"/>
      </svg>
  </button>
</div>
  

<div class="modal fade" id="newAlbumModal" tabindex="-1" aria-labelledby="newAlbumModalLabel" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="newAlbumModalLabel">New Album</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="modal-body">
                          <form method="post" action="">
                            
                                    <div class="mb-3">
                                      <label for="aid" class="form-label">Artist</label>

                                      <?php
                                      $artistsList = selectArtistsforInput();
                                      $selectedArtist = 0;
                                      include "dropdowns/view-artists-input-list.php";
                                      ?>

                                    </div>
                            
                                    <div class="mb-3">
                                      <label for="gid" class="form-label">Genre of Music</label>

                                      <?php
                                      $genresList = selectGenresforInput();
                                      $selectedGenre = 0;
                                      include "dropdowns/view-genres-input-list.php";
                                      ?>

                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="alName" class="form-label">Album Name</label>
                                      <input type="text" class="form-control" id="alName" name="alName">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="alYear" class="form-label">Album Year</label>
                                      <input type="text" class="form-control" id="alYear" name="alYear">
                                    </div>                                  
                                  
                                <input type="hidden" name="actionType" value="Add">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>
-->
