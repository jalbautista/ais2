<h2>Member Information</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('members/add', array('class' => 'form-horizontal')) ?>

<label  for="member_id">ID</label>
<input type="text" name="member_id" value="<?php echo $members_item['member_id']; ?>"/>

<label  for="last_name">Last Name</label>
<input type="text" name="last_name" value="<?php echo $members_item['last_name']; ?>"/>

<label  for="first_name">First Name</label>
<input type="text" name="first_name" value="<?=$members_item['first_name']?>"/>

<label  for="middle_name">Middle Name</label>
<input type="text" name="middle_name" value="<?=$members_item['middle_name']?>"/>

<label  for="birthday">Birthday</label>
<input type="date" name="birthday" value="<?=$members_item['birthday']?>"/>

<label  for="position">Position</label>
<select name="position">
   <option value="User" selected="selected">User</option>
   <option value="Admin">Admin</option>
</select>

<label for="address">Address</label>
<textarea id="address" name="address"><?=$members_item['address']?></textarea><br /> 

<label for="membership_date">Membership Date</label>
<input type="date" name="membership_date" value="<?=$members_item['membership_date']?>" /><br /><br />

<label class="checkbox">
   <input name="is_active" type="checkbox" value="1" 
      <?php 
         if($members_item['is_active'] == 1){
            echo "checked=\"checked\"";
         }
      ?>
    >
   Active
</label>

<a href="<?php echo base_url()?>index.php/members"> Back to Members</a>
<input class="btn" type="submit" name="submit" value="Save" />

</form>