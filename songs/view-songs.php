<div class="modal fade" id="newSongModal" tabindex="-1" aria-labelledby="newSongModalLabel" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="newSongModalLabel">New Song</h1>
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
                                      <label for="alid" class="form-label">Album</label>

                                      <?php
                                      $albumsList = selectAlbumsforInput();
                                      $selectedAlbum = 0;
                                      include "dropdowns/view-albums-input-list.php";
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
                                      <label for="sName" class="form-label">Song Name</label>
                                      <input type="text" class="form-control" id="sName" name="sName">
                                    </div>
                                        
                                    <div class="mb-3">
                                      <label for="sLength" class="form-label">Song Length</label>
                                      <input type="text" class="form-control" id="sLength" name="sLength">
                                    </div>                                  
                                  
                                <input type="hidden" name="actionType" value="Add">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form> 
                  </div>      
        </div> 
  </div> 
</div>











<div class="row">
  <div class="col">
      <h1>Songs</h1>
  </div>
  <div class="col-auto">
<?php
    include "newform-songs.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">   
    
    <thead>
      <tr>
        <th> </th>
        <th>ID:</th>
        <th>Song Name:</th>
        <th>Song Length:</th>
        <th>Artist:</th>
        <th>Album:</th>
        <th>Genre:</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
      
      <tbody>
        
        <?php
          while ($song = $songs->fetch_assoc()) {
        ?>
            <tr>

               <td>
                    <form method="post" action="">
                       <input type="hidden" name="sid" value="<?php echo $song['song_id']; ?>">
                       <input type="hidden" name="actionType" value="">
                        <button type="submit" class="btn btn-link" onclick="return confirm('Unfortunately there is no audio file?');">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                        </svg>                          
                        </button>
                      </form>
                </td>
              
                <td><?php echo $song['song_id']; ?></td>
                <td><?php echo $song['song_name']; ?></td> 
                <td><?php echo $song['song_length']; ?></td>
                <td><?php echo $song['artist_name']; ?></td>
                <td><?php echo $song['album_name']; ?></td>
                <td><?php echo $song['genre_name']; ?></td>
                <td><?php
                     include "editform-songs.php";
                     ?></td>
                   <td>
                    <form method="post" action="">
                        <input type="hidden" name="sid" value="<?php echo $song['song_id']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure?');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg>
                        </button>
                      </form>
                </td>
              
                
              
            </tr>

        <?php
          }
        ?>          
      </tbody>
  </table>
</div>

<head>
<style>
body {  
  background-image: url(imageex.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
