<div class="container">
 <h1 class="text-center mt-5">Edit Profile</h1>
 <form>
 <div class="form-group">
 <label for="username">Username</label>
 <input type="text" class="form-control" id="username" value="johndoe">
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="email" class="form-control" id="email" value="johndoe@example.com">
 </div>
 <button type="submit" class="btn btn-primary">Update Profile</button>
 </form>
</div>
o change-password.blade.php:
<div class="container">
 <h1 class="text-center mt-5">Change Password</h1>
 <form>
 <div class="form-group">
 <label for="current-password">Current Password</label>
 <input type="password" class="form-control" id="current-password">
 </div>
 <div class="form-group">
 <label for="new-password">New Password</label>
 <input type="password" class="form-control" id="new-password">
 </div>
 <button type="submit" class="btn btn-primary">Change Password</button>
 </form>
</div>