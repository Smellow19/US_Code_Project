<?php
  include_once 'header.php';
  echo "This is the Account Creation page";
?>

  <h1>Account Creation</h1>
  <div id ="Signup">
    <form class = "account_creation" action ="includes/account_creation.inc.php" method ="POST">
      <input type="text" name="first_name" placeholder="First Name"  />
      <input type="text" name="last_name" placeholder="Last name"/>
      <input type="text" name="email" placeholder="Email"/>
      <select name="account_type_id">
        <option value = 0>Standard</option>
        <option value = 1>Admin</option>
      <input type='checkbox' name='active'>Active</input>
      </select>
      <button type='submit' name='submit'>Submit</button>
    </form>
  </div>


<?php
  include_once 'footer.php';
?>
