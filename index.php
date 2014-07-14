<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        
        <title>Calculator Apps</title>
        
    </head>
    
    <body>
        
        <form action="index.php" method="GET">
            
            <table>
                
                <tr>
                    
                    <td>First Number</td>
                    
                    <td><input type="text" name="firstNumberText"</td>
                    
                </tr>
                
                <tr>
                    
                    <td>Second Number</td>
                    
                    <td><input type="text" name="secondNumberText"</td>
                    
                </tr>                
                                
            </table>
            
            <table>
                
                <tr>             
                    
                    <td><input type="submit" name="additionButton" value="Add"</td>
                    
                    <td><input type="submit" name="subtractionButton" value="Subtract"</td>
                    
                    <td><input type="submit" name="muiltiplicationButton" value="Muiltiply"</td>
                    
                    <td><input type="submit" name="divisionButton" value="Divide"</td>
                    
                </tr>
                
            </table>
            
        </form>
        
        <?php
        
        require_once 'calculator.php';
        
        $a_calculator = new Calculator();
        
        if(isset($_GET['firstNumberText']) && isset($_GET['secondNumberText'] ))
        {
            $first_number = $_GET['firstNumberText'];
            
            $second_number = $_GET['secondNumberText'];
            
            if(isset($_GET['additionButton']))
            {         
                echo 'The value of Additon is : '.$a_calculator->add($first_number, $second_number);
            }
        
            elseif(isset($_GET['subtractionButton']))
            {         
                echo 'The value of subtraction is : '.$a_calculator->subtract($first_number, $second_number);
            }
        
            elseif(isset($_GET['muiltiplicationButton']))
            {         
                echo 'The value of multiply is : '.$a_calculator->multiply($first_number, $second_number);
            }
        
            elseif(isset($_GET['divisionButton']))
            {         
                echo 'The value of division is : '.$a_calculator->divide($first_number, $second_number);
            }
        
        }
        
        
        
        
        ?>
        
    </body>
    
</html>
