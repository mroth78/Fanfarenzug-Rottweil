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

                        // Check if the content.json file exists and read the album description from it
                        if (file_exists($contentFile))
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
                            echo "<img src='$thumbnail' width='150'/><br>";
                            echo "<a href='?page=gallery&year=$year&album=$albumDirectory'>$albumName</a><br>";
                            echo "$albumDescription<br><br>";
                        }          
                  }
            }
            else
            {
                  // Get the full path to the album directory
                  $albumPath = $baseDir . $albumDir . "/";

                  // Get all the image files in the album directory
                  $imageFiles = glob($albumPath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

                  // Output the album name
                  echo "<h3 style='clear: both;'>$albumName</h3>";

                  echo "<div class='image-row'>";
                  echo "<div class='image-set'>";

                  // Loop through each image file and display it as a thumbnail linked to the full-size image
                  foreach($imageFiles as $imageFile)
                  {
                    $imageFileName = basename($imageFile);
                    $imageFileNamePath = "../" . $imageFile;
                    echo "<a class='example-image-link' href='$imageFileNamePath' data-lightbox='album'><img class='example-image' src='$imageFileNamePath'/></a>";
                  }

                  echo "</div>";
                  echo "</div>";
            }
      }
      else
      {
        echo "<h3>Das Jahr wurde nicht gefunden!</h3>";
      }
?>
