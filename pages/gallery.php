<?php    
      if (isset($_GET['year']))
      {
            $year = $_GET['year'];

            echo '<h2>Bilder aus dem Jahr ' . $year . '</h2>';
              
            // Verzeichnis des Albums aus dem URL Parameter holen
            if (isset($_GET['album']))
            {
                  $albumDir = $_GET['album'];            
            }
            
            // Basisverzeichnis der Bilder setzen
            $baseDir = "assets/bilder/" . $year . "/";            
            
            // Wenn kein Albumverzeichnis gesetzt wurde, dann die Albumliste anzeigen
            if (empty($albumDir))
            {                  
                  // Alle Unterverzeichnisse abholen
                  $directories = glob($baseDir . '*', GLOB_ONLYDIR);                  
                  
                  if (empty($directories))
                  {
                    echo "Es wurden leider noch keine Alben angelegt.";
                  }                                    
                  else
                  {                  
                        echo "<div class='row' id='album'>";
                                                
                        // Alle Verzeichnisse durchlaufen und Albumname, Thumbnail und Beschreibung auslesen
                        foreach($directories as $directory)
                        {                                              
                              $contentFile = $directory . "/content.json";
                                                            
                              // Prüfen ob die Datei content.json vohanden ist und die Daten wenn möglich auslesen.
                              if (file_exists($contentFile))
                              {
                                    $content = json_decode(file_get_contents(($contentFile), true));
                                    $albumDescription = $content->{'Description'};
                                    $albumName = $content->{'Album'};                        
                                    $thumbnailFile = $content->{'Thumbnail'};
                                    $thumbnailFileNamePath = $directory . DIRECTORY_SEPARATOR . $thumbnailFile;        

                                    // Bild als Zelle im Bootstrap Grid ausgeben
                                    echo "<div class='col-md-3'>";
                                    echo "<a href='?page=gallery&year=$year&album=$directory&name=$albumName'><img src='$thumbnailFileNamePath' class='img-thumbnail' alt=''/></a>";
                                    echo "<br>";
                                    echo "<p class='text-center'><a href='?page=gallery&year=$year&album=$directory&name=$albumName'>$albumName</a></p>";
                                    echo "<p class='text-center'>$albumDescription</p>";
                                    echo "</div>";                                    
                              }
                              else
                              {
                                    echo "<h2>Fehler beim Laden der Inhaltsdatei.</h2>";
                              }                        
                        }

                        echo "</div>";                        
                  }          
            }            
            else
            {                          
                  // Pfad und Name zum Album holen
                  $albumPath = $albumDir . "/";
                  $albumName = $_GET['name'];                                     
                  
                  // Alle Bilder aus dem Verzeichnis holen
                  $imageFiles = glob($albumPath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                                                     
                  // Albumnamen ausgeben
                  echo "<h3 style='clear: both;'>$albumName</h3>";

                  echo "<div class='image-row'>";
                  echo "<div class='image-set'>";
                  
                  // Durch alle Bilder laufen und diese in der Lightbox als Thumbnail anzeigen
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
        echo "<h3>Das Jahr ' . $year . ' wurde nicht gefunden!</h3>";
      }
?>
