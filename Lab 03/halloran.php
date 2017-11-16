<?php

/*************************************************
Compose a script that enables the user to submit two numbers in a form and choose an operation (addition, multiplication, division, or subtraction) to perform on them.
Do not allow division by zero.
Output the total calculation with its answer.
**************************************************/
class calculator
{
    var $a;
    var $b;

    function checkoperation($operator)
    {
         switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
                if ($_POST['n2'] == 0){
                    echo "Invalid.";
                }
                else{
            return $this->a / $this->b;
                }
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperation($c);
    }
}

$a = $_POST['n1'];
$b = $_POST['n2'];
$c = $_POST['op'];

$cal = new calculator();
	if(isset($_POST['submit'])) 
		{$result = $cal -> getresult($a,$b,$c);
		}
	else{
		return null;
	}
?>














<form action="halloran.php" method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $_POST['n1'].' '.$_POST['op'].' '.$_POST['n2'].' = '.$result; ?><strong></td>
    </tr>
    <tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>