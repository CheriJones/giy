<?php include 'header.php';?>
<!------- add page here -------->
<center>    
<font color="darkblue" size="4">Add a Contact</font><br><br /><br />
<form action="add2.php" method="get" name="add1">
<table width="381" style="width:100px;">
	<tr>
    	<td width="111" align="right">
        	First Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="first"
		 			 message="Please enter the first name"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
       	<td align="right" nowrap>
        	Last Name:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="last"
		 			 message="Please enter the last name"
		 			 required="yes"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Gender:
        </td>
        <td width="100">
        	<select size="1" 
            		name="gender" 
                    style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;">
		 				<option>Male</option>
						<option>Female</option>
        	</select>
        </td>
        <td width="104" align="right">
        	Age:
        </td>
        <td width="50">
            <INPUT name="age"
		 			 message="Please enter contact age"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Email Address:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="email"
		 			 message="Please enter the email address"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Street Address:
        </td>
        <td colspan="3">
        	<INPUT name="address"
		 			 message="Please enter the complete street address"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	City:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="city"
		 			 message="Please enter the city name"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	State:
        </td> 
    	<td align="left">
			<INPUT name="state"
		 			 message="Please enter the state name"
		 			 style="WIDTH: 100px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
        <td align="right">
            Postal Code:
        </td>
        <td>
        	<INPUT name="zip"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
		</td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	County:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="county"
		 			 message="Please enter the name of the county they live in - this will be used to more closely match release location"
		 			 required="yes"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap>
        	Phone:
        </td>
        <td align="left" colspan="3">
        	<INPUT name="phone"
		 			 message="Please enter the phone number"
		 			 required="yes"
		 			 style="WIDTH: 268px; HEIGHT: 22px; background-color: white; color: darkblue;px"
		 			 size=56>
        </td>
    </tr>
    <tr>
    	<td align="right" nowrap="nowrap">
        	Willing to Bridge:
        </td>
        <td align="left">
        	<select size="1" 
            		name="interest" 
                    style="WIDTH: 100px; HEIGHT: 26px; background-color: white; color: darkblue;">
		 				<option>Both</option>
						<option>Corrections</option>
                        <option>Treatment</option>
        	</select>
        </td>
    	<td align="right" colspan="1" nowrap>
        	District Number:
        </td>
        <td align="left">
        	<INPUT name="district"
		 			 message="Please enter the number of the District"
		 			 required="yes"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=4>
        </td>
    </tr>
    <tr>
    </tr>
	<tr>
    	<td align="right" nowrap>
        	Spanish Speaking
        </td>
        <td>
        	<input type="checkbox" name="flang">
        </td>
        <td align="right">
            Other Language:
        </td>
        <td>
        	<INPUT name="olang"
		 			 message="Please enter your the code"
		 			 style="WIDTH: 50px; HEIGHT: 22px; background-color: white; color: darkblue;"
		 			 size=56>
		</td>
    </tr>
    <tr>	
		<td align="center" colspan="3">
			<input type="hidden" name="passwords" value="<?php echo $passwords;?>">
			<input type="Hidden" name="usernames" value="<?php echo $usernames;?>">
			<input type="hidden" name="adminlevel" value="<?php echo $adminlevel;?>">
			<input type="Submit" value="Add Contact" name="b2">
		</td>
	</tr>
</table>
</form>                    
</center>                    
 <!------- end page here ------------>                   
</body>
</html> 