<div class="row">
  <div class="col">
      <h1>Genres</h1>
  </div>
  <div class="col-auto">
<?php
    include "newform-genres.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">   
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Genre Name:</th>
        <th>Genre Description:</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($genre = $genres->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $genre['genre_id']; ?></td>
                <td><?php echo $genre['genre_name']; ?></td> 
                <td><?php echo $genre['genre_description']; ?></td>
                <td><?php
                     include "editform-genres.php";
                     ?></td>
                   <td>
                    <form method="post" action="">
                        <input type="hidden" name="gid" value="<?php echo $genre['genre_id']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure?');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg>
                        </button>
                      </form>
                </td>
              
                <td>
                      <form method="post" action="3-artists-by-genres.php">
                        <input type="hidden" name="abgid" value="<?php echo $genre['genre_id']; ?>">
                        <button type="submit" class="btn btn-primary">Genre Artists</button>
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
