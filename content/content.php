	<div id="information" class="small-3 columns">
	    <div class="panel">
             <p> The generator will create a random password using everyday words making them easier to remember.
		      Note to increase complexity make sure you select the option to generate multiple words and any additional
	          password requirements the system may have.  For example capital letter, special characters and/or numbers.
            </p>
	    </div>
	</div>
	<div id="password" class="small-9 columns">
	    <form method="GET" action="index.php">
	        <div id="pwButtonRow" class="row">
	            <div id="pwButton" class="small-4 columns">
	                <button class="button" type="submit">Generate Password</button>
	            </div>
	            <div id="pwDisplay" class="small-8 columns">
	               <?php echo $message; ?><br>
	               <?php echo $pwList; ?>
	            </div>
	        </div>
	        <div id="pwOptionsRow" class="row">
	            <div class="small-12 columns">
	                    <fieldset>
	                        <legend>Password Options</legend>
		                        <label>Number of words in your password?</label>
		                        <input placeholder="Maximum of 5" type="number" name="optNumberWords"><br>
		                        <label class="left" >Do you want to capitalize the first word?  </label>
		                        <input type="checkbox" value="true" name="optCapitalize"><br>
		                        <label class="left">Do you want a number included?  </label>
		                        <input type="checkbox" value="true" name="optNumberIncluded"><br>
		                        <label class="left">Do you want any special characters included?</label>
		                        <input type="checkbox" value="true" name="optSpecialChar"><br>
	                    </fieldset>
	            </div>
	        </div>
	    </form>
	</div>