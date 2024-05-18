<?php
include 'head.php';
include 'header-users.php';
?>


<br>
&nbsp;&nbsp;&nbsp;&nbsp;<input placeholder="search..." type="text" class="search" id="search"><?php include 'space.php' ?>
<input type="button" value="add" onclick = "javascript:window.location='user-edit.php'">

<br><br><br><br>
<table class="table">
   <thead>
      <th>Sn</th>
      <th>Name</th>
      <th>User ID</th>
      <th>Email</th>
      <th>Active</th>
      <th>Deleted</th>
      <th>Edit</th>
      <th>Delete</th>
      </thead>
      <tbody>
         <tr>
            <td><b>1:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" selected = "active" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" selected = "delete" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>2:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
            <select class="form-select" selected="delete">
               <option value="1">Yes</option>
               <option value="2">No</option>
            </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>3:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>4:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>5:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>6:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
            <select class="form-select" >
               <option selected>Yes</option>
               <option value="1">Yes</option>
               <option value="2">No</option>
            </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>7:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>8:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>9:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>10:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
            <select class="form-select">
               <option selected>Yes</option>
               <option value="1">Yes</option>
               <option value="2">No</option>
            </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>11:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
         <tr>
            <td><b>12:</b></td>
            <td><input type="text" readonly name="name" class="input"></td>
            <td><input type="text" readonly name="userid" class="input"></td>
            <td><input type="email" readonly name="email" class="input"></td>
            <td>
               <select class="form-select" name="active">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td>
               <select class="form-select" name="deleted">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
               </select>
            </td>
            <td><button onclick="javascript:window.location='users-edit.php'" class="border-0 rounded bg-success">Edit</button></td>
            <td><button onclick="confirm('You are going to delete this user! Press Ok to continue')" class="border-0 rounded bg-danger">Delete</button></td>
         </tr>
      </tbody>
</table>
<p class="d-none"><?php 
include 'test.php';
?></p>


<?php
include 'footer.php';
?>