<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for an Farms- Discuss account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleSignup.php" method=post>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <!-- <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"> -->
                        <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="signuppassword" name="signuppassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcpassword" name="signupcpassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleType">Type</label>
                        <select class="form-control" id="type" name="type">
                               <option>Farmer</option>
                               <option>Agriculturist</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Signup</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>