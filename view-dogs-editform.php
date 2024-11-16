<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-warm-orange" data-bs-toggle="modal" data-bs-target="#editDogModal<?php echo $dog['iddog']; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
        </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editDogModal<?php echo $dog['iddog']; ?>" tabindex="-1" aria-labelledby="editDogModalLabel<?php echo $dog['iddog']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDogModalLabel<?php echo $dog['iddog']; ?>">Edit Dog</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="dogName<?php echo $dog['iddog']; ?>" class="form-label">Dog name</label>
                <?php
                  $dogList = selectDogsForInput();
                  $selectDog = $dog['iddog'];
                  include "view-dog-input-list.php"
                  ?>
            </div>
            <div class="mb-3">
              <label for="dogCol<?php echo $dog['iddog']; ?>" class="form-label">Dog color #</label>
              <input type="number" class="form-control" id="dogCol<?php echo $dog['iddog']; ?>" name="dogCol" value="<?php echo $dog['dogcol']; ?>">
            </div>
           <div class="mb-3">
              <label for="dogBreed<?php echo $dog['iddog']; ?>" class="form-label">Breed name #</label>
              <input type="number" class="form-control" id="dogBreed<?php echo $dog['iddog']; ?>" name="dogBreed" value="<?php echo $dog['dogbreed']; ?>">
            </div>
           <div class="mb-3">
              <label for="dogSize<?php echo $dog['iddog']; ?>" class="form-label">Dog size #</label>
              <input type="number" class="form-control" id="dogSize<?php echo $dog['iddog']; ?>" name="dogSize" value="<?php echo $dog['dogsize']; ?>">
            </div>
              <input type="hidden" name="did" value="<?php echo $dog['iddog']; ?>">
              <input type="hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
