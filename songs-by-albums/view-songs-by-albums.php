<h1>Songs in Album</h1>
<h5>(To edit these you must return to the Songs tab)</h5>
<div class="table-responsive">
  <table class="table">
    
    <thead>
      <tr>
        <th>ID</th>
        <th>Song Name:</th>
        <th>Song Length:</th>
        <th>Album Name:</th>
      </tr>
    </thead>
      
      <tbody>
        <?php
          while ($sbalid = $songsbyalbums->fetch_assoc()) {
        ?>
            <tr>

                <td><?php echo $sbalid['song_id']; ?></td>
                <td><?php echo $sbalid['song_name']; ?></td> 
                <td><?php echo $sbalid['song_length']; ?></td>
                <td><?php echo $sbalid['album_name']; ?></td>
                                              
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
