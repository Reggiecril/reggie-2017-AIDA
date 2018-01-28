
<form method="post" action="index.php?content=contactSubmit">
    
    <fieldset class="fieldset-width1">
        <legend>
            Contact Details
        </legend>
        <label class="align" for="cust">Name:</label>
        <input type="text" name="cust" value="<?php
        /*check to see if there has been an entry for each form element
         *and pre-populate value if there has been.
         *If there are any errors detected then display a message alongside
         *the relevant field
         */
         if (isset($_SESSION['cust'])){
             echo $_SESSION['cust'];
         }
         ?>"/>
         <span class="error"> <?php
         if (isset($_SESSION['errors']['name'])){
             echo $_SESSION['errors']['name'];
         }
         ?>
         </span>
         <br /><br />
         <label class="align" for="email">Email:&nbsp;</label>
         <input type="text" name="email" value="<?php
         if (isset($_SESSION['email'])){
             echo $_SESSION['email'];
         }
         ?>" />
         <span class="error"> <?php
         if (isset($_SESSION['errors']['email'])){
             echo $_SESSION['errors']['email'];
         }
         ?></span>
         
    </fieldset>
    <fieldset class="fieldset-width2">
        
        <legend>
            Enquiry
        </legend>
        <textarea id="txtEnquire" name="txtEnquire" rows="10"><?php
        if (isset($_SESSION['enquiry'])){
            echo $_SESSION['enquiry'];
        }
        ?></textarea>
        <span class="error"> <?php
        if (isset($_SESSION['errors']['enquiry'])){
            echo $_SESSION['errors']['enquiry'];
        }
        ?></span>
        <p>
            <label>Age:</label>
            <input type = "radio"
            name = "radAge"
            id = "agelow"
            value = "low"
            <?php
            if (isset($_SESSION['age'])){
                
                if($_SESSION['age']=='low'){
                    echo 'checked=checked';
                }
            }
            ?>
            />
            <label for ="ageLow">Under 5</label>
            
            <input type = "radio"
            name = "radAge"
            id = "ageMid"
            value = "middle"
            <?php
            if (isset($_SESSION['age'])){
                
                if($_SESSION['age']=='middle'){
                    echo 'checked=checked';
                }
            }
            ?>
            />
            <label for="ageHigh">6-9</label>

             <input type = "radio"
            name = "radAge"
            id = "agehigh"
            value = "high"
            <?php
            if (isset($_SESSION['age'])){
                
                if($_SESSION['age']=='high'){
                    echo 'checked=checked';
                }
            }
            ?>
            />
            <label for ="ageHigh">10 and over</label>
            <?php
        if (isset($_SESSION['age'])){
            echo $_SESSION['age'];
        }
        ?>
            
        </p>
        <span class="error"> <?php
        if (isset($_SESSION['errors']['age'])){
            echo $_SESSION['errors']['age'];
        }
        ?></span>
        <p><label>Type</label>
        <select name="selSize">
            <option value="Please select">Please select</option>
            <option value="advice">advice</option>
            <option value="complaint">complaint</option>
            <option value="purchase">purchase</option>
        </p>
        </select>
    </fieldset>
    <input name="submit" value="submit" type="submit">
    <input name="clear" value="clear" type="reset">
</form>
