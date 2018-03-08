<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Confirmation Page </title>
        <link rel="stylesheet" type="text/css" href="./CSS/Styles.css"> 
    </head>
    <body>  
    <?php 
             if ((empty($_POST["name"]))){
                 echo "<h2> Name was not filled out. </h2>";
             }
             if ((empty($_POST["age"]))){
                 echo "<h2> Age was not filled out. </h2>";
             }
             if ((empty($_POST["category"]))){
                 echo "<h2> An answer for the question was not selected. </h2>";
             }
             if ((empty($_POST["merchandise"]))){
                  echo "<h2> The type of chocolate to order was not checked. </h2>";
             }
            if((empty($_POST["boxes"]))){
                echo "<h2> The number of boxes to order was not selected. </h2>";
            }
            if (empty($_POST["name"]) || empty($_POST["age"]) || empty($_POST["category"])
              || empty($_POST["merchandise"]) || empty($_POST["boxes"])){
                  echo "<form>";
                  echo "<input type='button' value='Go back!' onclick='history.back()'>";
                  echo "</form>";
             }
            else{
                ?>
        

        <div class="container">
            <div class="content">
                <p>Thank you, <strong><?= $_POST["name"] ?></strong>!</p>
                <p>Your order has been placed.</p>
                <p><b>You ordered:</b></p>
            
                <?php
                    echo "<div class=\"center\">";
                        $price = 0;
                        if(!empty($_POST['merchandise']))
                        {
                            foreach($_POST['merchandise'] as $value)
                            {
                                echo $value . "<br />";
                                switch ($value)
                                {
                                    case "Milk Chocolate (\$12.99)":
                                        $price += 12.99;
                                        break;
                                    case "Dark Chocolate (\$16.99)":
                                        $price += 16.99;
                                        break;
                                    case "White Chocolate (\$9.99)":
                                        $price += 9.99;
                                        break;
                                    case "Assorted Chocolates (\$22.99)":
                                        $price += 22.99;
                                        break;
                                }
                            }
                        }
                        $boxes = $_POST["boxes"];
                        if(!empty($boxes))
                        {
                            echo "<br />" . $boxes . " boxes of each chocolate";   
                            $price = $boxes * $price;
                        }
                    echo "<h1 id='dividerTwo'>-----------------------------------</h1>";
                    echo "</div>";
                    echo "<p><b>Total: $" . $price . "</b></p>";
                ?>
            </div>
        </div>
        
        <h1 id="divider">--------------------------------------------------------------</h1>

        <div class="container">
        <div class="content">
        <h1>You Entered:</h1><br />
        
        <form action="result.php" method="POST">
                <div class="radios">
                <label for="name"><strong> Enter Name:  </strong></label>
                <input type="text" name="name" id="name" value="<?= $_POST["name"] ?>"/>                             
                </div>
            
                <div class="radios">
                <p><strong>Enter your age (must be 18 or older):</strong>
                <input type="number" name="age" min="18" max="120" value="<?= $_POST["age"] ?>"/>
                </p>
                </div>
            
                <div class="radios">
                    <?php 
                        $category = $_POST["category"]
                    ?>
                     <label for="category"><strong>What's your favorite chocolate brand? </strong></label>
                    <select id = "dropdown" name="category" value="/>
                        <option value = "- Select One -">- Select One -</option>
                        <option <?php if (isset($category) && $category=="HERSHEY'S") echo "selected";?>>HERSHEY'S</option>
                        <option <?php if (isset($category) && $category=="Ghirardelli") echo "selected";?>>Ghirardelli</option>
                        <<option <?php if (isset($category) && $category=="Ferrero Rocher") echo "selected";?>>Ferrero Rocher</option>
                        <option <?php if (isset($category) && $category=="Lindt") echo "selected";?>>Lindt</option>
                        <option <?php if (isset($category) && $category=="Cadbury") echo "selected";?>>Cadbury</option>
                        <option <?php if (isset($category) && $category=="None") echo "selected";?>>None</option>
                    </select>
                </div>
            <div class="radios">
                <fieldset>
                <legend><h3>Which Chocolate would you like to order? <strong>(Select One)</strong></h3></legend>
                
                <input id="milkchoc" type="checkbox" name="merchandise[]" 
                    <?php if (in_array('Milk Chocolate ($12.99)', $_POST['merchandise'])) echo "checked";?>
                value="Milk Chocolate ($12.99)">
                <label for="milkchoc">Milk Chocolate <strong>($12.99)</strong>, 16 oz. Box</label><br>
                
                <input id="darkchoc" type="checkbox" name="merchandise[]" 
                <?php if (in_array('Dark Chocolate ($16.99)', $_POST['merchandise'])) echo "checked";?>
                value="Dark Chocolate ($16.99)">
                <label for="darkchoc">Dark Chocolate <strong>($16.99)</strong>, 20 oz. Box</label><br>
                
                <input id="whitechoc" type="checkbox" name="merchandise[]" 
                <?php if (in_array('White Chocolate ($9.99)', $_POST['merchandise'])) echo "checked";?>
                value="White Chocolate ($9.99)">
                <label for="whitechoc">White Chocolate <strong>($9.99)</strong>, 10 oz. Box</label><br>
                
                <input id="mixchoc" type="checkbox" name="merchandise[]" 
                <?php if (in_array('Assorted Chocolates ($22.99)', $_POST['merchandise'])) echo "checked";?>
                value="Assorted Chocolates ($22.99)">
                <label for="mixchoc">Assorted Chocolates <strong>($22.99)</strong>, 24 oz. Box</label><br>
                
                </fieldset>
                </div>
                
                <div class="radios">
                <fieldset>
                <legend><h3>How Many Boxes of each Would You Like to Order?</h3></legend>
                    <input id="1" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="1") echo 'checked';?>
                    value="1">
                    <label for="1">1 boxes</label>
                    
                    <input id="2" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="2") echo "checked";?>
                    value="2">
                    <label for="2">2 boxes</label>
                    
                    <input id="3" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="3") echo "checked";?>
                    value="3">
                    <label for="3">3 boxes</label>
                    
                    <input id="4" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="4") echo "checked";?>
                    value="4">
                    <label for="4">4 boxes</label>
                    
                    <input id="5" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="5") echo "checked";?>
                    value="5">
                    <label for="5">5 boxes</label>
                    
                    <input id="6" type="radio" name="boxes" <?php if (isset($boxes) && $boxes=="6") echo "checked";?>
                    value="6">
                    <label for="6">6 boxes</label>
                </fieldset>
            </div>
            
        </div>
        
        <br /><br />
    
    </form>
    <div class="formSubmissions">
    <h2><strong>Would You like to order again? </strong></h2>
        <form action="index.php">
            <input type="submit" alt="Submit" value="Yes">
        </form><br/>
        
        <form action="exit.php">
            <input type="submit" alt="Submit" value="No">
        </form>
        
        <br/>
    </div>
    </div>  
   <?php
            }
    ?>
    </body>
</html>
