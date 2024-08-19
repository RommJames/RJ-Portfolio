<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel V</title>
    <?php
	include_once("../icon.php");
	?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="book2">
        <div class="room">Book a room</div>
        <div class="Arrival">Arrival: <input type="text" name="Arrival" class="input_arrival"></div>
        <div class="Departure">Departure: <input type="text" name="Arrival" class="input_arrival"></div>
        <div class="Nights"><input type="number" value="1" min="1"> Nights</div>
        <div class="Adults"> <input type="number" value="1" min="1"> Adults <input type="number" value="3" min="1"> Children</div>
        <div class="book2-btn"><button>Check Availability</button> </div>
    </div>   
    <div class="container">       
        <main>
            <div id="content1">
                <div id="side-navbar">
                    <h1>Hotel V</h1>
                    <nav>
                        <ul>
                            <li>Find a Hotel</li>
                            <li>Meeting & Events</li>
                            <li>About Hotel</li>
                        </ul>
                    </nav>
                </div>
                <div id="sub-navbar">
                    <nav>
                        <h2>Hotel Detail</h2>
                        <ul>
                            <li>Amenities</li>
                            <li>Maps</li>
                            <li>Room Type</li>
                        </ul>
                    </nav>
                    <div id="checkin">
                        <h2>Check in</h2>  
                        <p>
                            Check In: 3pm
                        </p>
                        <p>
                            Check out: 12pm
                        </p>
                    </div>
                    
                    <div id="map">
                        <h2>Map & Location</h2>
                        <img src="Images/map.png" alt="Our office location">
                    </div>
                </div>
                <section>
                    <div id="Meeting">
                        <h2>Meeting and Events</h2>
                        <p>We provide venues for different types of events:</p>
                        <div id="Photos">
                            <div id="Gathering">
                                <img src="Images/5016.png" alt="Gathering">
                                <span>Gathering</span>
                            </div>
                            <div id="Meetings">
                                <img src="Images/5015.png" alt="Meetings">
                                <span>Meetings</span>
                            </div>
                            <div id="Workshops">
                                <img src="Images/5040.png" alt="Workshops">
                                <span>Workshops</span>
                            </div>                            
                        </div>
                        <p id="detail">
                            See how our customer said on the project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project.A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project. <br><br>

                            This is a sample project. This is really just a sample project.A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project.A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project.
                        </p>
                    </div>

                    <div id="Gallery">
                        <h2>Photo Gallery</h2>
                        <canvas id="photo-gallery" width="500" height="250" style="background-color:#efefef"></canvas>
                        <p>This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project.A sample project. This is a sample project. This is really just a sample project.A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project. This is a sample project. This is really just a sample project. A sample project.</p>

                        <div>
                            <img src="Images/5018.png" alt="Don’t just hear what we say.">
                            <span>Don’t just hear what we say</span>
                        </div>                        

                        <div id="Testimonials">
                            <div id="context">
                                <h2>Testimonials</h2>
                                <blockquote>
                                    Great hotel and convenient location. Absolute five stars !
                                </blockquote>
                                <p>This is a sample text. This is really just a sample text. A sample text. This is a sample text. This is really just a sample text. A sample text. This is a sample text. This is really just a sample text. A sample text. This is a sample text. This is really just a sample text. A sample text. This is a sample text. This is really just a sample text.A sample text. This is a sample text. This is really just a sample text. A sample text.</p>
                            </div>
                            <div id="outside">
                                <img src="Images/4912.png" alt="Photo outside hotel.">
                            </div>
                            <div id="inside">
                                <img src="Images/5029.png" alt="Photo inside room.">
                            </div>
                        </div>
                    </div>
                </section>                
                <div id="todo">
                    <div class="book">
                        <div class="room">Book a room</div>
                        <div class="Arrival">Arrival: <input type="text" name="Arrival" class="input_arrival" ></div>
                        <div class="Departure">Departure: <input type="text" name="Arrival" class="input_arrival" ></div>
                        <div class="Nights"><input type="number" value="1" min="1"> Nights</div>
                        <div class="Adults"> <input type="number" value="1" min="1"> Adults <input type="number" value="3" min="1"> Children</div>
                        <div class="book-btn"><button>Check Availability</button> </div>
                    </div>
                    <h2>Things To do</h2>       
                    <div id="ads">
                        <img src="Images/ads.png" alt="ads">
                        <img src="Images/ads.png" alt="ads">
                        <img src="Images/ads.png" alt="ads">
                        <img src="Images/ads.png" alt="ads">
                    </div>                  
                    <span>Become a sponsor.</span>
                </div>
            </div>            
        </main>        
        <footer>
            <div id="contact">
                <h3>Contact</h3>
                <p>hello@example.com</p>
                <p>2088 Meadow Lane, <br> Cranford, NJ 0701</p>
            </div>

            <div id="footer">
                <h3>footer</h3>
                <p>Footer Col Footer Col Footer Col Footer Col Footer Col Footer Col</p>
            </div>

            <div id="subscribe">
                <h3>Subscribe</h3>
                <p>Subscribe our newsletter for news</p>
            </div>

            <div id="hotels">
                <h3>Hotels Group</h3>
                <p>We hav hotels all over the world</p>
                <div id="icons">
                    <img src="Images/icon.gif" alt="icon" class="icon1">
                    <img src="Images/icon.gif" alt="icon" class="icon2">
                    <img src="Images/icon.gif" alt="icon" class="icon3">
                    <img src="Images/icon.gif" alt="icon" class="icon4">
                    <img src="Images/icon.gif" alt="icon" class="icon5">
                    <img src="Images/icon.gif" alt="icon" class="icon6">
                </div>
            </div>

            <div id="copyright">
                <p>
                    &#169; 2015. WorldSkills.
                </p>
            </div>
        </footer>
    </div>
    <script src="js/photo-gallery.js"></script>
    <script src="js/prefix-free.js"></script>
</body>
</html>