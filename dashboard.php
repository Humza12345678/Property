<?php
   include 'head.php';
   include 'header-dashboard.php';
   ?><br>
<table style="justify-content:center;box-sizing:border-box;text-align:center;padding:0;margin-left: 300px;">
<thead class="text-center">
    <th>&nbsp;&nbsp;&nbsp;<label class="users"  for="total-users">Total Users</label></th>
    <th>&nbsp;&nbsp;&nbsp;<label class="users"  for="deleted-users">Deleted Users</label></th>
    <th>&nbsp;&nbsp;&nbsp;<label class="users"  for="active-users">Active Users</label></th>
</thead>
<tbody>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;<textarea name="t-users" class="textarea" cols="30" rows="10"></textarea></td>
        <td>&nbsp;&nbsp;&nbsp;<textarea name="d-users" class="textarea" cols="30" rows="10"></textarea></td>
        <td>&nbsp;&nbsp;&nbsp;<textarea name="a-users" class="textarea" cols="30" rows="10"></textarea></td>
    </tr>
</tbody>

</table>




   <?php
   include 'footer.php';
   ?>