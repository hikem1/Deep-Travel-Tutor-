<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="image/chip.png" alt="#">
                <img src="image/visa.png" alt="#">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>titulaire de la carte</span>
                    <div class="card-holder-name">Monsieur Jacques Dupont</div>
                </div>
                <div class="box">
                    <div class="expiration">
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="image/visa.png" alt="#">
            </div>
        </div>

    </div>

    <form method="post" action="#">
        <div class="inputBox">
            <span>numéro de carte</span>
            <input type="text" maxlength="16" name="numero" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>titulaire de la carte</span>
            <input type="text" name="titulaire" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration</span>
                <select name="months" id="months" class="month-input">
                    <option value="month" selected disabled>mois</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration </span>
                <select name="years" id="years" class="year-input">
                    <option value="year" selected disabled>annees</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" name="cvv" class="cvv-input">
            </div>
        </div>
        <input type="submit" value="submit" name="submit" class="submit-btn">
    </form>

</div>    
<script src="payement.js"></script>

<?php
include_once './partial/footer.php';
?>