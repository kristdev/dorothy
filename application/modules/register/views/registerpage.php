<div class="container">
    <br />
    <div class="row">

        <div class="col-sm-12">
            <h1>Create an account</h1>

            <hr />
            <div class="row">
                <div class="col-sm-12 col-md-6">

                    <form class="form-vertical" action="<?php echo base_url(); ?>register/create_user" method="Post" enctype="multipart/form-data">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12" >

                                    <div class="well">
                                        <div class="form-group">
                                            <label for="first_name">Full name</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input value="<?php echo set_value('first_name'); ?>" name="first_name" type="text" class="form-control " id="first_name" placeholder="First name" required>
                                                    <?php echo form_error('first_name'); ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input value="<?php echo set_value('last_name'); ?>" name="last_name" type="text" class="form-control " id="last_name" placeholder="Last name" required>
                                                    <?php echo form_error('last_name'); ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="groupe">Groupe</label>
                                            <select name="groupe" id="" class="form-control">
                                                <option value="etudiant">Etudiant</option>
                                                <option value="enseignant">Enseignant</option>
                                                <option value="bibliothecaire">Bibliothécaire</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input name="email" value="<?php echo set_value('email'); ?>" type="email" class="form-control " id="email" placeholder="Enter email" required>
                                            <?php echo form_error('email'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input name="password" type="password" class="form-control" id="password" placeholder="Make sure your password is longer than 6 characters" required>
                                            <?php echo form_error('password'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password1">Confirm password</label>
                                            <input name="password1" type="password" class="form-control" id="password1" placeholder="Confirm your password" required>
                                            <?php echo form_error('password1'); ?>
                                        </div>                            
                                        <br />
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Create account</button>
                                        </div>
                                        <p> </p>
                                        <?php
                                            if(isset($message_confirmRegistration)){
                                        ?>
                                        <div class="alert alert-success alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>Success!</strong> <?php echo $message_confirmRegistration; ?>
                                        </div>
                                        <?php        
                                            }
                                            if(isset($message_warningRegistration)){
                                        ?>
                                        <div class="alert alert-warning alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>Alert!</strong> <?php echo $message_warningRegistration; ?>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12 account-sidebar hidden-sm">

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Crest.png" width="50"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Why us?</h3>
                                    <p>We're one of the most recognisable brands, attracting thousands of buyers every month.<p>
                                    </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Pie-Chart.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Magnet for buyers</h3>
                                    <p>We make sure your listings receive maximum exposure and is presented in an engaging way</p>
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Search.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Focused searches</h3>
                                    <p>Our technology and algorithm matches potential buyers directly to your listings</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Telephone.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Mobile web</h3>
                                    <p>Your listings will always be accessible to everyone, even when they are on the move, via our responsive mobile website</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Search.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Focused searches</h3>
                                    <p>Our technology and algorithm matches potential buyers directly to your listings</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Telephone.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Mobile web</h3>
                                    <p>Your listings will always be accessible to everyone, even when they are on the move, via our responsive mobile website</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Search.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Focused searches</h3>
                                    <p>Our technology and algorithm matches potential buyers directly to your listings</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="<?php echo base_url(); ?>assets/img/front/Telephone.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Mobile web</h3>
                                    <p>Your listings will always be accessible to everyone, even when they are on the move, via our responsive mobile website</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <br />

                </fieldset>
            </form>

        </div>
    </div>
</div>

</div>
</div>