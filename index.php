<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Order Chocolates! </title>
        <link rel="stylesheet" type="text/css" href="./CSS/Styles.css"> 
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1> Which Chocolates Would You Like To Buy? </h1>
                <div class="banner">
                    <img src="./Img/chocolate.jpg"></img>
                </div>
                <br />
                <div class="entryForm">
                    <form action="result.php" method="POST">
                        <div class="formEntry">
                            <div class="radios">
                                <label for="name"><strong> Enter Name:  </strong></label>
                                <input type="text" name="name" id="name" /> 
                            </div>
                            
                            <div class="radios">
                                <p><strong>Enter your age (must be 18 or older):</strong>
                                <input type="number" name="age" min="18" max="120" />
                                </p>
                            </div>
                            
                            <div class="radios">
                                <label for="category"><strong>What's your favorite chocolate brand? </strong></label>
                                <select id = "dropdown" name="category" />
                                    <option selected disabled hidden value = ''></option>
                                    <option value="HERSHEY'S">HERSHEY'S</option>
                                    <option value="Ghirardelli">Ghirardelli</option>
                                    <option value="Ferrero Rocher">Ferrero Rocher</option>
                                    <option value="Lindt">Lindt</option>
                                    <option value="Cadbury">Cadbury</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            
                            <div class="radios">
                                <fieldset>
                                <legend><h3>Which Chocolate would you like to order? <strong>(Select One)</strong></h3></legend>
                                
                                <input id="milkchoc" type="checkbox" name="merchandise[]" value="Milk Chocolate ($12.99)">
                                <label for="milkchoc">Milk Chocolate <strong>($12.99)</strong>, 16 oz. Box</label><br>
                                
                                <input id="darkchoc" type="checkbox" name="merchandise[]" value="Dark Chocolate ($16.99)">
                                <label for="darkchoc">Dark Chocolate <strong>($16.99)</strong>, 20 oz. Box</label><br>
                                
                                <input id="whitechoc" type="checkbox" name="merchandise[]" value="White Chocolate ($9.99)">
                                <label for="whitechoc">White Chocolate <strong>($9.99)</strong>, 10 oz. Box</label><br>
                                
                                <input id="mixchoc" type="checkbox" name="merchandise[]" value="Assorted Chocolates ($22.99)">
                                <label for="mixchoc">Assorted Chocolates <strong>($22.99)</strong>, 24 oz. Box</label><br>
                                
                                </fieldset>
                            </div>
                            
                            <div class="radios">
                                <fieldset>
                                <legend><h3>How Many Boxes of each Would You Like to Order?</h3></legend>
                                    <input id="1" type="radio" name="boxes" value="1">
                                    <label for="1">1 boxes</label>
                                    
                                    <input id="2" type="radio" name="boxes" value="2">
                                    <label for="2">2 boxes</label>
                                    
                                    <input id="3" type="radio" name="boxes" value="3">
                                    <label for="3">3 boxes</label>
                                    
                                    <input id="4" type="radio" name="boxes" value="4">
                                    <label for="4">4 boxes</label>
                                    
                                    <input id="5" type="radio" name="boxes" value="5">
                                    <label for="5">5 boxes</label>
                                    
                                    <input id="6" type="radio" name="boxes" value="6">
                                    <label for="6">6 boxes</label>
                                </fieldset>
                            </div>
    
                        </div>
                        <br /><br />
                        <div class="formSubmission">
                            <input type="submit" value="Submit"> </input>
                            <input type="reset" value="Clear Form"> </input>
                        </div>
                    </form>
                </div>
                <br /> 
            </div>
        </div>
    </body>
</html>