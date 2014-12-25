<?php
    $facebook = 'EWB Western University Chapter';
    $facebook_url = 'https://www.facebook.com/uwoewb';
    $twitter = '@EWBWestern';
    $twitter_url = 'https://twitter.com/ewbwestern';
    $instagram = 'ewbwestern';
    $instagram_url = 'http://instagram.com/ewbwestern';
    $email = 'shivanichotalia@me.com';
    $email_link = 'mailto:shivanichotalia@me.com';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <div id="footer">
            <table>
                <tr>
                    <td id="footer-left">
                        <span>
                            <img class="social" src="resources/facebook-circle.png" alt="Facebook">
                            <a href="<?php echo $facebook_url;?>"><?php echo $facebook;?></a>
                        </span>
                        <span>
                            <img class="social" src="resources/twitter-circle.png" alt="Twitter">
                            <a href="<?php echo $twitter_url;?>"><?php echo $twitter;?></a>
                        </span>
                        <span>
                            <img class="social" src="resources/instagram-circle.png" alt="Instagram">
                            <a href="<?php echo $instagram_url;?>"><?php echo $instagram;?></a>
                        </span>
                        <span>
                            <img class="social" src="resources/email-circle.png" alt="Email">
                            <a href="<?php echo $email_link;?>"><?php echo $email;?></a>
                        </span>  
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
