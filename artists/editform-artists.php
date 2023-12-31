<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#editArtistModal<?php echo $artist['artist_id']; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
        <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
      </svg>
</button>


<div class="modal fade" id="editArtistModal<?php echo $artist['artist_id']; ?>" tabindex="-1" aria-labelledby="editArtistModalLabel<?php echo $artist['artist_id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="editArtistModalLabel<?php echo $artist['artist_id']; ?>">Edit Artist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="modal-body">
                          <form method="post" action="">
                                
                                    <div class="mb-3">
                                      <label for="rid<?php echo $artist['artist_id']; ?>" class="form-label">Record Label:</label>

                                    <?php
                                      $recordsList = selectRecordsforInput();
                                      $selectedRecord = $artist['record_name'];
                                      include "dropdowns/view-records-input-list.php";
                                      ?>
                                          
                                    </div>
                                
                                    <div class="mb-3">
                                      <label for="gid<?php echo $artist['artist_id']; ?>" class="form-label">Genre:</label>
      
                                      <?php
                                      $genresList = selectGenresforInput();
                                      $selectedGenre = $artist['genre_name'];
                                      include "dropdowns/view-genres-input-list.php";
                                      ?>

                                    </div>                                    
                                
                                    <div class="mb-3">
                                      <label for="aName<?php echo $artist['artist_id']; ?>" class="form-label">Artist Name:</label>
                                      <input type="text" class="form-control" id="aName<?php echo $artist['artist_id']; ?>" name="aName" value="<?php echo $artist['artist_name']; ?>">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="aHometown<?php echo $artist['artist_id']; ?>" class="form-label">Atrist Hometown:</label>
                                      <input type="text" class="form-control" id="aHometown<?php echo $artist['artist_id']; ?>" name="aHometown" value="<?php echo $artist['artist_hometown']; ?>">
                                    </div>
                                                                                                     
                                <input type="hidden" name="aid" value="<?php echo $artist['artist_id']; ?>">
                                <input type="hidden" name="actionType" value="Edit">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>

