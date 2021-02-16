<div class="card mt-3">
<h5 class="card-header">Share something</h5>
  <div class="card-body">
<form method="post" action="<?php $_SERVER['REQUEST_URI']; ?>">
<div class="mb-3">
  <label for="title" class="form-label">Share Title</label>
  <input type="text" name="title" class="form-control" id="title">
</div>
<div class="mb-3">
  <label for="body" class="form-label">Description</label>
  <textarea class="form-control" name="body" id="body" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="link" class="form-label">Link</label>
  <input type="text" name="link" class="form-control" id="link">
</div>
<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
</form>
</div>
</div>