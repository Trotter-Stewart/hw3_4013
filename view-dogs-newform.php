<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newDogModal">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newDogModal" tabindex="-1" aria-labelledby="newDogModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newDogModalLabel">New breed</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="dogName" class="form-label">Dog name</label>
              <?php
                  $dogList = selectDogsForInput();
                  $selectDog = 0;
                  include "view-dog-input-list.php"
                  ?>
            </div>
            <div class="mb-3">
              <label for="dogCol" class="form-label">Dog color #</label>
              <input type="number" class="form-control" id="dogCol" name="dogCol">
            </div>
           <div class="mb-3">
              <label for="dogBreed" class="form-label">Breed name #</label>
              <input type="number" class="form-control" id="dogBreed" name="dogBreed">
            </div>
           <div class="mb-3">
              <label for="dogSize" class="form-label">Dog size #</label>
              <input type="number" class="form-control" id="dogSize" name="dogSize">
            </div>
              <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
