<?php $__env->startSection('content'); ?>


<form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="date" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      
      <input type="date" class="form-control" id="autoSizingInputGroup" placeholder="Username">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>Choose...</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Search</button>
  </div>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.forntend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dineth/Desktop/hotel/resources/views/booking.blade.php ENDPATH**/ ?>