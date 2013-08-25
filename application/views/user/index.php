
<table class="table table-bordered table-striped table-condensed">
   <thead>
      <tr>
         <th>ID</th>
         <th>Username</th>
         <th>Password</th>
         <th>Is Active?</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($users as $user): ?>
      <tr>
         <td><?=$user['user_id'];?></td>
         <td><?=$user['username'];?></td>
         <td><?=$user['password'];?></td>
         <td><?=$user['is_active'];?></td>
      </tr>
      <?php endforeach ?>
   </tbody>
</table>