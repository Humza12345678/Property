<?php
require 'head.php';
require 'header-user-edit.php';
?>

<form action = "test.php" method = "POST" class="container">
    <div class="form-group">
        <label for="userid">User ID</label>
        <input required autocomplete="on" id="userid" name="userid" type="text" style="width:100%;" class="form-input form-control">
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input required autocomplete="on" id="name" name="name" type="text" style="width:100%;" class="form-input form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input required autocomplete="on" id="email" name="email" type="text" style="width:100%;" class="form-input form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input required autocomplete="on" name="password" id="password" type="password" style="width:100%;" class="form-input form-control">
    </div>

    <div class="form-group">
        <label for="c-password">Confirm Password</label>
        <input required autocomplete="on" name="c-password" id="cpassword" type="password" style="width:100%;" class="form-input form-control">
    </div>
    <div>
        <span>Active</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="form-input-label">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input required type="radio" name="active" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="form-input-label">No</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input required type="radio" name="active" value="No" id="active-no"><br>        
    </div>
    <div>
        <span>Delete</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="form-input-label">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input required type="radio" name="delete" value="Yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="form-input-label">No</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input required type="radio" name="delete" value="No" id="active-no"><br>        
    </div><br>
    
    <div>
        <input class="bg-success rounded-circle border-0" type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="bg-danger rounded-circle border-0" type="button" onclick="javascript:window.location='users.php'" value="Cancel">
    </div>
</form>
<?php
include 'footer.php';
?>
            