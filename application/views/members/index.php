
<div>
   <div>
      <a class="btn btn-small" href="<?php echo base_url() ?>index.php/members/add/">Add Member</a>
   </div>
   <table class="table table-bordered table-striped table-condensed">
      <thead>
         <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Position</th>
            <th>Status</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($members as $members_item): ?>
            <tr>
               <td>
                  <a href="<?php echo base_url() ?>index.php/members/view/<?php echo $members_item['member_id'] ?>">
                     <?php echo $members_item['member_id'] ?></a></td>
               <td><?php echo $members_item['username'] ?></td>
               <td><?php echo $members_item['last_name'] ?></td>
               <td><?php echo $members_item['first_name'] ?></td>
               <td><?php echo $members_item['middle_name'] ?></td>
               <td><?php echo $members_item['position'] ?></td>
               <td>
                  <?php
                  if ($members_item['is_active']) {
                     echo "Active";
                  }
                  else
                     echo "---";
                  ?>

               </td>
            </tr>
<?php endforeach ?>
      </tbody>
   </table>
</div>
