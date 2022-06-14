    <?php
        // include header
        include_once '../app/views/includes/header.php';
    ?>

    <!-- reserve section -->
    <section style="width: 100%;">
        <h2 class="heading">Select The perfect view For you</h2>
        <div class="reserve-seats">
            <div class="movie-selected">
                <h1>Movie Title</h1>
                <h2>Playing date</h2>
                <h3>Duration</h3>
            </div>
            <div class="screen">

            </div>
            <div class="all-seats">
                <div class="seats">
                    <div class="seat-row-name">A</div>
                    <div id="seat" class="seat-number">1</div>
                    <div id="seat" class="seat-number">2</div>
                    <div id="seat" class="seat-number">3</div>
                    <div id="seat" class="seat-number">4</div>
                    <div id="seat" class="seat-number">5</div>
                    <div id="seat" class="seat-number">6</div>
                    <div id="seat" class="seat-number">7</div>
                    <div id="seat" class="seat-number">8</div>
                    <div id="seat" class="seat-number">9</div>
                    <div id="seat" class="seat-number fix">10</div>
                    <div id="seat" class="seat-number fix">11</div>
                    <div id="seat" class="seat-number fix">12</div>
                    <div id="seat" class="seat-number fix">13</div>
                    <div id="seat" class="seat-number fix">14</div>
                    <div id="seat" class="seat-number fix">15</div>
                    <div id="seat" class="seat-number fix">16</div>
                    <div id="seat" class="seat-number fix">17</div> 
                    <div id="seat" class="seat-number fix">18</div>
                    <div id="seat" class="seat-number fix">19</div>
                    <div id="seat" class="seat-number fix">20</div>
                </div>
                <div class="seats">
                    <div class="seat-row-name">B</div>
                    <div id="seat" class="seat-number">1</div>
                    <div id="seat" class="seat-number">2</div>
                    <div id="seat" class="seat-number">3</div>
                    <div id="seat" class="seat-number">4</div>
                    <div id="seat" class="seat-number">5</div>
                    <div id="seat" class="seat-number">6</div>
                    <div id="seat" class="seat-number">7</div>
                    <div id="seat" class="seat-number">8</div>
                    <div id="seat" class="seat-number">9</div>
                    <div id="seat" class="seat-number fix">10</div>
                    <div id="seat" class="seat-number fix">11</div>
                    <div id="seat" class="seat-number fix">12</div>
                    <div id="seat" class="seat-number fix">13</div>
                    <div id="seat" class="seat-number fix">14</div>
                    <div id="seat" class="seat-number fix">15</div>
                    <div id="seat" class="seat-number fix">16</div>
                    <div id="seat" class="seat-number fix">17</div> 
                    <div id="seat" class="seat-number fix">18</div>
                    <div id="seat" class="seat-number fix">19</div>
                    <div id="seat" class="seat-number fix">20</div>
                </div>
                <div class="seats">
                    <div class="seat-row-name">C</div>
                    <div id="seat" class="seat-number">1</div>
                    <div id="seat" class="seat-number">2</div>
                    <div id="seat" class="seat-number">3</div>
                    <div id="seat" class="seat-number">4</div>
                    <div id="seat" class="seat-number">5</div>
                    <div id="seat" class="seat-number">6</div>
                    <div id="seat" class="seat-number">7</div>
                    <div id="seat" class="seat-number">8</div>
                    <div id="seat" class="seat-number">9</div>
                    <div id="seat" class="seat-number fix">10</div>
                    <div id="seat" class="seat-number fix">11</div>
                    <div id="seat" class="seat-number fix">12</div>
                    <div id="seat" class="seat-number fix">13</div>
                    <div id="seat" class="seat-number fix">14</div>
                    <div id="seat" class="seat-number fix">15</div>
                    <div id="seat" class="seat-number fix">16</div>
                    <div id="seat" class="seat-number fix">17</div> 
                    <div id="seat" class="seat-number fix">18</div>
                    <div id="seat" class="seat-number fix">19</div>
                    <div id="seat" class="seat-number fix">20</div>
                </div>
                <div class="seats">
                    <div class="seat-row-name">D</div>
                    <div id="seat"  class="seat-number">1</div>
                    <div id="seat" class="seat-number">2</div>
                    <div id="seat" class="seat-number">3</div>
                    <div id="seat" class="seat-number">4</div>
                    <div id="seat" class="seat-number">5</div>
                    <div id="seat" class="seat-number">6</div>
                    <div id="seat" class="seat-number">7</div>    
                    <div id="seat" class="seat-number">8</div>
                    <div id="seat" class="seat-number">9</div>
                    <div id="seat" class="seat-number fix">10</div>
                    <div id="seat" class="seat-number fix">11</div>
                    <div id="seat" class="seat-number fix">12</div>
                    <div id="seat" class="seat-number fix">13</div>
                    <div id="seat" class="seat-number fix">14</div>
                    <div id="seat" class="seat-number fix">15</div>
                    <div id="seat" class="seat-number fix">16</div>
                    <div id="seat" class="seat-number fix">17</div> 
                    <div id="seat" class="seat-number fix">18</div>
                    <div id="seat" class="seat-number fix">19</div>
                    <div id="seat" class="seat-number fix">20</div>
                </div>
            </div>
            <a href="#payment" class="footer-button" id="getTicket">Get Your Ticket</a>
        </div>
    </section>
    <section class="none" id="payment">
        <h2 class="heading">Process Your payment</h2>
        <div class="contact-container">
            <form action="">
                <label for="">Card Type</label>
                <input type="text" placeholder="MasterCard">
                <label for="">Card Number</label>
                <input type="number" placeholder="1234 1234 1234 1234">
                <label for="">Expiry Date</label>
                <input type="date" placeholder="12/2022">
                <label for="">CVV</label>
                <input type="number" placeholder="123">
                <input type="submit" value="Get Your Ticket" style="margin-top: 20px;">
            </form>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>