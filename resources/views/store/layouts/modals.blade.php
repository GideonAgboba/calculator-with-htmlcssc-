
    <!-- Checkout Error Modal-->
    <div class="modal fade" id="checkouterror" tabindex="-1" role="dialog" aria-labelledby="checkouterrorLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="checkouterrorLabel">Checkout Error:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <i class="text-danger fa fa-frown" style="font-size: 10em;"></i>
            <p>Please Verify your <br> account by UPDATING your profile</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary text-white" href="{{ url('/profile') }}">Update Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->
    <!-- Checkout Success Modal-->
    <div class="modal fade" id="checkoutsuccess" tabindex="-1" role="dialog" aria-labelledby="checkoutsuccessLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="checkoutsuccessLabel">Are you done shopping?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body text-center">Select "Yes" to procced to the checkout portal if you are done shopping.</div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">NO</button>
            <a class="btn btn-success" href="{{url('/checkout')}}">YES</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->