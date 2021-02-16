<div class="card mt-3">
<h5 class="card-header">Login</h5>
  <div class="card-body">
<form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="password">
</div>
<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
</form>
</div>
</div>