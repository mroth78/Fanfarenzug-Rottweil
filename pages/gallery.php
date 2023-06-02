<style rel="stylesheet">
      .photo-gallery {
  color:#313437;
  background-color:#fff;
}

.photo-gallery p {
  color:#7d8285;
}

.photo-gallery h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .photo-gallery h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.photo-gallery .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto 40px;
}

.photo-gallery .intro p {
  margin-bottom:0;
}

.photo-gallery .photos {
  padding-bottom:20px;
}

.photo-gallery .item {
  padding-bottom:30px;
}
</style>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'albumLabel': "Bild %1 von %2",
      'showImageNumberLabel' : false
    })
</script>


<?php    
      if (isset($_GET['year']))
      {
            $year = $_GET['year'];

            echo '<h2>Bilder aus dem Jahr ' . $year . '</h2>';

            // Get the album directory from the URL parameter      
            if (isset($_GET['album']))
            {
                  $albumDir = $_GET['album'];            
            }

            // Set the base directory for the albums            
            $baseDir = "bilder/" . $year . "/";            

            // If no album directory is specified, show the album list
            if (empty($albumDir))
            {

                  // Get all the subdirectories of the base directory
                  $directories = glob($baseDir . '*', GLOB_ONLYDIR);                  
                  
                  if (empty($directories))
                  {
                    echo "Es wurden leider noch keine Alben angelegt.";
                  }                                    

                  // Loop through each directory and get the album name and description
                  foreach($directories as $directory)
                  {                                              
                        $contentFile = $directory . "/content.json";

                        // Check if the Readme.txt file exists and read the album description from it
                        if(file_exists($contentFile))
                        {
                            $content = json_decode(file_get_contents(($contentFile), true));
                            $albumDescription = $content->{'Description'};
                            $albumName = $content->{'Album'};                        
                        }
                        else
                        {
                              echo "<h2>Fehler beim Laden der Inhaltsdatei.</h2>";
                        }

                        // Output the album name and description as a link to the album
                        echo "<a href='?album=$albumName'>$albumName</a><br>";
                        echo "$albumDescription<br><br>";
                  }
            }
            else
            {
                  // Get the full path to the album directory
                  $albumPath = $baseDir . $albumDir . "/";

                  // Get all the image files in the album directory
                  $imageFiles = glob($albumPath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

                  // Output the album name
                  echo "<h1>$albumDir</h1>";

                  // Loop through each image file and display it as a thumbnail linked to the full-size image
                  foreach($imageFiles as $imageFile)
                  {
                        $imageFileName = basename($imageFile);
                        echo "<a href='$imageFile' onclick='loadHtml('gallerie/2010.php')'><img src='$imageFile' width='150'></a>";
                  }
            }
      }
      else
      {
        echo "<h1>Das Jahr wurde nicht gefunden!</h1>";
      }
?>
