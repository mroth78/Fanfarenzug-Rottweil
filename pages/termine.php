<h2 class="mb-5">Termine</h2>

<?php
    // Pfad zur JSON-Datei
    $file_path = 'assets/termine.json';
    // JSON-Datei lesen
    $json_data = file_get_contents($file_path);              

    if(!file_exists($file_path) || empty($json_data))
    {
        echo "Es wurden leider noch Termine angelegt.";
    }
    else
    {
        echo '<div class="table-responsive">';
        echo '<table class="table table-hover table-sm">';
        echo '<thead class="list-header">';
        echo '<tr class="">';      
        echo '<th class="" scope="col">Datum</th>'; 
        echo '<th class="text-center" scope="col">Uhrzeit</th>';                        
        echo '<th class="" scope="col">Beschreibung</th>';        
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';  

        // Ausgabe der Termine
        // JSON-Daten in ein assoziatives Array umwandeln
        $events = json_decode($json_data, true);
        
        // Aktuelles Datum erhalten        
        $current_date = strtotime(date('d.m.Y'));

        // Tabelle mit den Terminelementen erstellen
        foreach ($events as $event) 
        {   
            //$event_date = new DateTime($event["VonDatum"]);
            $event_date = strtotime($event["VonDatum"]);            
            
            // Datum und Uhrzeit des Termins prüfen            
            if($event_date >= $current_date)
            {                    
                echo '<tr>';                    
                
                // Ausgabe Datum                     
                $wholeDay = $event['Ganztaegig'];
                if (empty($event['BisDatum']) || $event['VonDatum'] == $event['BisDatum'])
                {
                    echo '<td class="column-date col-1" scope="row">' . $event['VonDatum'] . '</td>'; 
                }                    
                else
                {
                    echo '<td class="column-date col-1" scope="row">' . $event['VonDatum'] . '<br/> - <br/>' . $event['BisDatum'] . '</td>'; 
                }
                
                // Ausgabe Zeitbereich                                                
                $timeOutput = '<td class="column-time col-2">' . $event['UhrzeitVon'] . ' Uhr' . '<br/> - <br/>' . $event['UhrzeitBis'] . ' Uhr' . '</td>';
                if (empty($event['UhrzeitBis']))
                {
                    $timeOutput = '<td class="column-time col-2">' . $event['UhrzeitVon'] . ' Uhr' . '<br/> - <br/>' . 'Open End' . '</td>';
                }

                if ($wholeDay == true)
                {
                    $timeOutput = '<td class="column-time col-2">' . 'Ganztägig' . '</td>';                        
                }                                       

                echo $timeOutput;
                echo '<td class="event-title">' . $event['Beschreibung'] . '</td>';
                echo '</tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

    }
?>