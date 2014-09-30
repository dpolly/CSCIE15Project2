<div id="information" class="small-3 columns">
    <div class="panel">
        <div class="row">
            <h4>What is it?</h4>
            <p> This application will generate random passwords using real words.   Using real words makes
                easier for you to remember your password.
            </p>
        </div>
        <div class="row">
            <h4>How does it work?</h4>
            <p>Select the options such as how many words, special characters, numbers and capitalization you want.
                Then press the "Generate Password" button and the system will display a randomly generated password for you.
            </p>
        </div>
    </div>
</div>

<div id="password" class="small-9 columns">
    <form method="GET" action="index.php">
        <div id="pwButtonRow" class="row">
            <div id="pwButton" class="small-4 columns">
                <button class="button" type="submit" value="generate">Generate Password</button>
            </div>
            <div id="pwDisplay" class="small-8 columns">
                <div class="panel">
                    <?php echo $pwList; ?>
                </div>
            </div>
        </div>
        <div id="pwOptionsRow" class="row">
            <div class="small-9 columns">
                    <input placeholder="number of words 1 thru 5" type="number" name="optNumberWords"><br>
                    <label for="left-label" class="left">Do you want to capitalize the first letter of each word?</label>
                    <input type="checkbox" value="true" name="optCapitalize"><br>
                    <label for="left-label" class="left">Do you want a number included?</label>
                    <input type="checkbox" value="true" name="optNumberIncluded"><br>
                    <label for="left-label" class="left">Do you want any special characters included?</label>
                    <input type="checkbox" value="true" name="optSpecialChar"><br>
            </div>
        </div>
    </form>
</div>












