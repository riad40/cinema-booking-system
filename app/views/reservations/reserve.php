    <?php
        // include header
        include_once '../app/views/includes/header.php';
        // var_dump($data['movie']);
    ?>
    <style>
        .seat-number.active{
            background-color: #41CD7D;
            color: #fff;
        }
        .seat-number.reserved{
            background-color: #41CD7D;
            color: #fff;
        }
    </style>

    <!-- reserve section -->
    <section style="width: 100%;">
        <h2 class="heading">Select The perfect view For you</h2>
        <div class="reserve-seats">
            <div class="movie-selected">
                <h1><?= $data['movie']->movie_title ?></h1>
                <h2><?= $data['movie']->movie_playing_date ?></h2>
                <h3><?= $data['movie']->movie_ticket_price ?></h3>
            </div>
            <div class="screen">

            </div>
            <div class="all-seats">
                <div class="seats">
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
                    <div id="seat" class="seat-number fix">21</div>
                    <div id="seat" class="seat-number fix">22</div>
                </div>
                <div class="seats">
                    <div id="seat" class="seat-number fix">23</div>
                    <div id="seat" class="seat-number fix">24</div>
                    <div id="seat" class="seat-number fix">25</div>
                    <div id="seat" class="seat-number fix">26</div>
                    <div id="seat" class="seat-number fix">27</div>
                    <div id="seat" class="seat-number fix">28</div>
                    <div id="seat" class="seat-number fix">29</div>
                    <div id="seat" class="seat-number fix">30</div>
                    <div id="seat" class="seat-number fix">31</div>
                    <div id="seat" class="seat-number fix">32</div>
                    <div id="seat" class="seat-number fix">33</div>
                    <div id="seat" class="seat-number fix">34</div>
                    <div id="seat" class="seat-number fix">35</div>
                    <div id="seat" class="seat-number fix">36</div>
                    <div id="seat" class="seat-number fix">37</div> 
                    <div id="seat" class="seat-number fix">38</div>
                    <div id="seat" class="seat-number fix">39</div>
                    <div id="seat" class="seat-number fix">40</div>
                    <div id="seat" class="seat-number fix">41</div>
                    <div id="seat" class="seat-number fix">42</div>
                    <div id="seat" class="seat-number fix">43</div>
                    <div id="seat" class="seat-number fix">44</div>
                </div>
                <div class="seats">
                    <div id="seat" class="seat-number fix">45</div>
                    <div id="seat" class="seat-number fix">46</div>
                    <div id="seat" class="seat-number fix">47</div>
                    <div id="seat" class="seat-number fix">48</div>
                    <div id="seat" class="seat-number fix">49</div>
                    <div id="seat" class="seat-number fix">50</div>
                    <div id="seat" class="seat-number fix">51</div>
                    <div id="seat" class="seat-number fix">52</div>
                    <div id="seat" class="seat-number fix">53</div>
                    <div id="seat" class="seat-number fix">54</div>
                    <div id="seat" class="seat-number fix">55</div>
                    <div id="seat" class="seat-number fix">56</div>
                    <div id="seat" class="seat-number fix">57</div> 
                    <div id="seat" class="seat-number fix">58</div>
                    <div id="seat" class="seat-number fix">59</div>
                    <div id="seat" class="seat-number fix">60</div>
                    <div id="seat" class="seat-number fix">61</div>
                    <div id="seat" class="seat-number fix">62</div>
                    <div id="seat" class="seat-number fix">63</div>
                    <div id="seat" class="seat-number fix">64</div>
                    <div id="seat" class="seat-number fix">65</div>
                    <div id="seat" class="seat-number fix">66</div>
                </div>
                <div class="seats">
                    <div id="seat" class="seat-number fix">67</div>    
                    <div id="seat" class="seat-number fix">68</div>
                    <div id="seat" class="seat-number fix">69</div>
                    <div id="seat" class="seat-number fix">70</div>
                    <div id="seat" class="seat-number fix">71</div>
                    <div id="seat" class="seat-number fix">72</div>
                    <div id="seat" class="seat-number fix">73</div>
                    <div id="seat" class="seat-number fix">74</div>
                    <div id="seat" class="seat-number fix">75</div>
                    <div id="seat" class="seat-number fix">76</div>
                    <div id="seat" class="seat-number fix">77</div> 
                    <div id="seat" class="seat-number fix">77</div> 
                    <div id="seat" class="seat-number fix">78</div>
                    <div id="seat" class="seat-number fix">78</div>
                    <div id="seat" class="seat-number fix">79</div>
                    <div id="seat" class="seat-number fix">79</div>
                    <div id="seat" class="seat-number fix">80</div>
                    <div id="seat" class="seat-number fix">81</div>
                    <div id="seat" class="seat-number fix">82</div>
                    <div id="seat" class="seat-number fix">83</div>
                    <div id="seat" class="seat-number fix">84</div>
                    <div id="seat" class="seat-number fix">85</div>
                </div>
            </div>
            <a href="#payment" class="footer-button" id="continueToPayment">Continue To Payment</a>
        </div>
    </section>
    <section class="none" id="payment">
        <h2 class="heading">Process Your payment</h2>
        <div class="contact-container">
            <form action="<?= URLROOT ?>/reservations/reserve/<?= $data['movie']->movie_id ?>" method="post">
                <input type="hidden" name="seats_reserved" id="booked_seats">
                <label for="">Card Type</label>
                <input type="text" name="card_type" placeholder="MasterCard">
                <label for="">Card Number</label>
                <input type="number" name="card_number" placeholder="1234 1234 1234 1234">
                <label for="">Expiry Date</label>
                <input type="date" name="card_date" placeholder="12/2022">
                <label for="">CVV</label>
                <input type="number" name="card_cvv" placeholder="123">
                <input type="submit" value="Get Your Ticket" style="margin-top: 20px;">
            </form>
    </section>
    <!-- footer -->
    <script>
        let selectedSeats=[<?= $data['reserved_seats']->reserved_seats ?>];
    </script>
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>