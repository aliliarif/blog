Login Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>

            <div class="modal-body">
                <div id="error_login" style="font-size:12px; color:red;"></div> <!-- div to display login errors -->
 
                <div class="form-group has-feedback">
                    <input type="email" name="email_login" id="email_login" class="form-control" placeholder="e-mail" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_login" id="password_login" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="login_btn" name="login_btn" class="btn btn-primary">Login</button>
            </div>

        </div>
    </div>
</div>
<!-- Login Modal End -->

<!-- Register Modal -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>

            <div class="modal-body">
                <div class="form-group has-feedback">
                    <input type="email" name="name_register" id="name_register" class="form-control" placeholder="first name" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email_register" id="email_register" class="form-control" placeholder="e-mail">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_register" id="password_register" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_register2" id="password_register2" class="form-control" placeholder="repeat password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Register</button>
            </div>

        </div>
    </div>
</div>
<!-- Register Modal End -->

<!-- Register Modal -->
<div class="modal fade" id="cantPost_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">You need to be logged in to add posts.</h4>
            </div>

            <!-- <div class="modal-body">
                <div class="form-group has-feedback">
                    <input type="email" name="name_register" id="name_register" class="form-control" placeholder="first name" autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email_register" id="email_register" class="form-control" placeholder="e-mail">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_register" id="password_register" class="form-control" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_register2" id="password_register2" class="form-control" placeholder="repeat password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </div> -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="login_btn_np" class="btn btn-success">Login</button>
                <button type="button" id="register_btn_np" class="btn btn-primary">Register</button>
            </div>

        </div>
    </div>
</div>
<!-- Register Modal End