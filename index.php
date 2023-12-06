<?php
$pageTitle = "Home";
include "headfoot/view-header.php";
?>
<script>
      import Letterize from "https://cdn.skypack.dev/letterizejs@2.0.0";
      const test = new Letterize({
              targets: ".animate-me"
            });
      
            const animation = anime.timeline({
              targets: test.listAll,
              delay: anime.stagger(100, {
                grid: [test.list[0].length, test.list.length],
                from: "center"
              }),
              loop: true
            });
      
            animation
              .add({
                scale: 0.5
              })
              .add({
                letterSpacing: "10px"
              })
              .add({
                scale: 1
              })
              .add({
                letterSpacing: "6px"
              });
</script>

<div class="animate-me">
        Song Data Base
 </div>
      
<?php
include "headfoot/view-footer.php";
?>
