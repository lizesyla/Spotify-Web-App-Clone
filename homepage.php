<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page - Spotify</title>
    <link rel="stylesheet" href="homepage.css">
    
    
</head>
<body>
    
    <header>
        <div class="navhomepage">
            <a href="loginpage.php"><img src="Images/headerlogo.png" alt="Header Logo" class="navheaderlogo"></a>
            <div class="navlist">
                <a href="homepage.php" class="navanchor">Home</a>
                <a href="#" class="navanchor">Playlists</a>
                <a href="aboutus.php" class="navanchor">About</a>
                <a href="#" class="navanchor">Contact</a>
            </div>
        </div>
    </header>

    

   <main>

    <div class="headingbody">
        <h2>Spotify Playlists</h2>
        <p>Spotify made these playlists based on your taste</p>
    </div>

        <div class="mainbody">

            <div class="fotot">
                <h3>Rap Playlist</h3>
                <img src="Images/asaprockycover.webp" alt="Rap playlist">
                <p>Rap music from Asap Rocky, <br>
                    Travis Scott and more... </p>
            </div>

            <div class="fotot">
               <h3>Chill Playlist</h3>
                <img src="Images/albumcoverRODEO.jpg" alt="Chill Playlist">
                <p>Chill music from Drake, <br>
                    Travis Scoot and more... </p>
            </div>

            <div class="fotot">
                <h3>Hip-hop&RnB</h3>
                <img src="Images/albumcoverUTOPIA.webp" alt="Hip-hop&RnB Playlist">
                <p>Hip-hop&RnB music <br> to calm your mind </p>
            </div>

            <div class="fotot">
                <h3>Pop Playlist</h3>
                <img src="Images/lanadelreyalbum.webp" alt="Pop Playlist">
                <p>Pop songs from different pop <br>
                pop music artists </p>
            </div>

            <div class="fotot">
                 <h3>80s Playlist</h3>
                 <img src="Images/aloneatpromcover.webp" alt="80s Playlist">
                 <p>80s songs to dance to the <br> fullest  </p>
            </div>

            <div class="fotot">
                <h3>00s Playlist</h3>
                <img src="Images/mariahcareyalbum.webp" alt="00s Playlist">
                <p>Best hits from early 00s music <br>
                to bring back nostalgia </p>
           </div>

           <div class="fotot">
            <h3>Today Top Hits</h3>
            <img src="Images/tylatravis.jpeg" alt="Today's top hits">
            <p>Music from today's top hits<br>
            from various artists </p>
       </div>

            <div class="fotot">
                <h3>Dua Lipa Radio</h3>
                <img src="Images/dualipa1.webp" alt="Dua Lipa Radio">
                <p>Best songs from the Albanian <br>
                singer Dua Lipa </p>
           </div>

           <div class="fotot">
            <h3>Tate McRae Hits</h3>
            <img src="Images/tatemcrae.png" alt="Tate McRae Radio">
            <p>Different songs from Tate <br>
            McRae discography </p>
       </div>

            <div class="fotot">
                <h3>2016 Radio</h3>
                <img src="Images/albumcoverbitt.webp" alt="2016 music radio">
                <p>Top hits from the nostalgic <br>
                year of 2016 </p>
           </div>

        </div>

        <div class="headingbody">
            <h2>Your favorite artists</h2>
            <p>Your favorite artists based on music you listened lately</p> 
        </div>
   </main>

   <div id="kontenti">
        <header>
            <img id="slideshow" />
            <img src="/Images/travisscott2.jpg"alt="">
        </header>
        <button onclick="ndrroImg()">Next</button>
    </div>

   <footer>
    
        <div class="kolona1">
            <h3>Company</h3>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">For the record</a></li>
        </div>

        <div class="kolona2">
            <h3>Communities</h3>
            <li><a href="#">For artists</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Vendors</a></li>
        </div>

        <div class="kolona3">
            <h3>Useful links</h3>
            <li><a href="support.php">Support</a></li>
            <li><a href="terms.php">Terms and conditions</a></li>
        </div>

   </footer>

   <div class="footerbottom">
            <p>© 2023 Spotify AB</p>
        </div>

        <script src="scripthomepage.js">

        </script>

    <?php  ?>
</body>
</html>