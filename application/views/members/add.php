<h2>Add Member</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('members/add', array('class' => 'form-horizontal')) ?>

<label  for="last_name">Last Name</label>
<input type="text" name="last_name" placeholder="Last Name"/>

<label  for="first_name">First Name</label>
<input type="text" name="first_name" />

<label  for="middle_name">Middle Name</label>
<input type="text" name="middle_name" />

<label  for="birthday">Birthday</label>
<input type="date" name="birthday" />

<label  for="position">Position</label>
<select name="position">
   <option value="User" selected="selected">User</option>
   <option value="Admin">Admin</option>
</select>

<label for="address">Address</label>
<textarea name="address" ></textarea><br /> 

<label for="membership_date">Birthday</label>
<input type="date" name="membership_date" />

<label class="checkbox">
   <input name="is_active" type="checkbox" value="1">
   Active
</label>

<input class="btn" type="submit" name="submit" value="Save" />

</form>