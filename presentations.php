<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <div class="page-title">
            Presentations Offered
        </div>
        <div>
        </div>
        <table class="event page-table">
            <?php
                $handle = fopen("resources/files/presentations.txt", "r");

                $html_string = '';

                if ($handle) {
                    
                    while (($line = fgets($handle)) !== false) {

                        $parts = array();

                        if (strpos($line,'Name: ') !== false) {
                            $html_string .= '<tr><td>';
                            $html_string .= '<div class="event name">';
                            $parts = explode('Name: ', $line);
                            $html_string .= $parts[1];
                            $html_string .= '</div>';
                        }
                        /*
                        else if (strpos($line,'Image: ') !== false) {
                            $html_string .= '<img class="picture"';
                            $parts = explode('Image: ', $line);
                            $html_string .= 'src="resources/'.$parts[1].'" alt="Event image">';
                        }*/
                        else if (strpos($line,'Description: ') !== false) {
                            $html_string .= '<div class="event desc">';
                            $parts = explode('Description: ', $line);
                            $html_string .= $parts[1];
                            $html_string .= '</div>';
                            $html_string .= '</td></tr>';
                        }
                    }

                } else {
                    debug_to_console("error opening events.txt");
                } 
                fclose($handle);

                echo $html_string;
            ?>
        </table>
    </body>
</html>

<?php include 'footer.php';?>