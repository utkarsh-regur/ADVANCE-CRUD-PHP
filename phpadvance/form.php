 <!-- MODAL -->
 <div class="modal fade" id="usermodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add or Update user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

            <!-- Name -->
            <div class="form-group my-3">
             <label>Name:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark" style="height:100%"><i class="fas fa-user-alt text-light"></i></span>
                    </div>

                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required">
                </div>
            </div>

               <!-- Email -->
               <div class="form-group my-3">
                    <label>Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark" style="height:100%"><i class="fas fa-envelope-open text-light"></i></span>
                            </div>

                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required">
                        </div>
                </div>

               
                <!-- Mobile -->
               <div class="form-group my-3">
                    <label>Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark" style="height:100%"><i class="fas fa-phone text-light"></i></span>
                            </div>

                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" maxLength=10 minLength=10>
                        </div>
                </div>


            <!-- Photo -->
            <div class="form-group my-3">
             <label>Photo:</label>
                <div class="input-group">
                        <label class="custom-file-label" for="userphoto">Choose a file</label>
                       <input type="file" id="userphoto" name="photo" class="custom-file-input mx-3">
                </div>
            </div>
            
         
        </div>
    
      

      <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        <input type="hidden" id="action" name="action" value="adduser">
        <input type="hidden" name="userId" id="userId" value="">
     
      </div>
      </form>
    </div>
  </div>
</div>