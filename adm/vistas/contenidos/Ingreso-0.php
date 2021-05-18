<div class="container mt-5">
   <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
         <div class="form-outline">
            <input type="text" class="form-control" id="validationCustom01" value="Mark" required />
            <label for="validationCustom01" class="form-label">First name</label>
            <div class="valid-feedback">Looks good!</div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-outline">
            <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
            <label for="validationCustom02" class="form-label">Last name</label>
            <div class="valid-feedback">Looks good!</div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="input-group form-outline">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="invalid-feedback">Please choose a username.</div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-outline">
            <input type="text" class="form-control" id="validationCustom03" required />
            <label for="validationCustom03" class="form-label">City</label>
            <div class="invalid-feedback">Please provide a valid city.</div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-outline">
            <input type="text" class="form-control" id="validationCustom05" required />
            <label for="validationCustom05" class="form-label">Zip</label>
            <div class="invalid-feedback">Please provide a valid zip.</div>
         </div>
      </div>
      <div class="col-12">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
            <label class="form-check-label" for="invalidCheck">
               Agree to terms and conditions
            </label>
            <div class="invalid-feedback">You must agree before submitting.</div>
         </div>
      </div>
      <div class="col-12">
         <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
   </form>

</div>
<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (() => {
      'use strict';

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation');

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms).forEach((form) => {
         form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
               event.preventDefault();
               event.stopPropagation();
            }
            form.classList.add('was-validated');
         }, false);
      });
   })();
</script>