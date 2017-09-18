<form action="db_table.php" method="post">

  Which is your favorite movie?

 <input type="text" name="formMovie" maxlength="50" value="<?=$varMovie;?>" />


  What is your name?

  <input type="text" name="formName" maxlength="50" value="<?=$varName;?>" />
 

  Please choose your gender?

  <select name="formGender">

     <option value="">Select...</option>

     <option value="M">Male</option>

     <option value="F">Female</option>

  </select>

 

<input type="submit" name="formSubmit" value="Submit" />

</form>
