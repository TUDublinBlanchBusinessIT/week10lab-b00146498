<?php
include("finalStepHeader.html");

session_start();

echo "Passenger's First Name: " . $_SESSION['passengerFN'] . "<br>";

echo "Passenger's Surname: " . $_SESSION['passengerSN'] . "<br>";

if (isset($_SESSION['luggage'])) {
    
    echo "Bags Under 10kg: " . $_SESSION['subTenKG'] . "<br>";

    echo "Bags Over 10kg: " . $_SESSION['overTenKG'] . "<br>";
}

?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>

