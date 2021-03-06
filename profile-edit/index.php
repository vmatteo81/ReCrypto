<?php

define('TITLE', "Edit Profile");
include '../assets/layouts/header.php';
include './includes/nationality.php';
check_verified();

//XSS filter for session variables
function xss_filter($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <form class="form-auth" action="includes/profile-edit.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">

                <?php insert_csrf_token(); ?>
                <h6 class="h3 mt-3 mb-3 font-weight-normal text-muted text-center">Edit Your Profile</h6>    
                <div class="picCard text-center">
                    <div class="avatar-upload">
                        <div class="avatar-preview text-center">
                            <div id="imagePreview" style="background-image: url( ../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?> );">
                            </div>
                        </div>
                        <div class="avatar-edit">
                            <input name='avatar' id="avatar" class="fas fa-pencil" type='file' />
                            <label for="avatar">+</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <sub class="text-danger">
                        <?php
                            if (isset($_SESSION['ERRORS']['imageerror']))
                                echo $_SESSION['ERRORS']['imageerror'];

                        ?>
                    </sub>
                </div>
                <div class="text-center">
                    <small class="text-success font-weight-bold">
                        <?php
                            if (isset($_SESSION['STATUS']['editstatus']))
                                echo $_SESSION['STATUS']['editstatus'];

                        ?>
                    </small>
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="<?php echo xss_filter($_SESSION['first_name']); ?>">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo xss_filter($_SESSION['last_name']); ?>">
                </div>

                <div class="form-group mt-4">
                    <label for="birthday">Date of Birth</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Birthday" value="<?php echo xss_filter($_SESSION['birthday']); ?>">
                </div>

                <div class="form-group mt-4">
                    <label for="nationality">Nationality</label><br>
                    <?php echo nationalityDropdown(); ?>
                </div>

                <div class="form-group mt-4">
                    <label for="iddoc">ID Document Image(passport,driver license..)</label><br>
                    <div class="picCard text-center">
                        <div class="avatar-upload">
                            <div class="avatar-preview text-center">
                                <div id="imagePreview" style="background-image: url( ../assets/uploads/users/<?php echo $_SESSION['id_doc_image'] ?> );">
                                </div>
                            </div>
                            <div class="avatar-edit">
                                <input name='avatar' id="avatar" class="fas fa-pencil" type='file' />
                                <label for="avatar">+</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <sub class="text-danger">
                            <?php
                                if (isset($_SESSION['ERRORS']['imageerror']))
                                    echo $_SESSION['ERRORS']['imageerror'];

                            ?>
                        </sub>
                    </div>
                    <div class="text-center">
                        <small class="text-success font-weight-bold">
                            <?php
                                if (isset($_SESSION['STATUS']['editstatus']))
                                    echo $_SESSION['STATUS']['editstatus'];
                            ?>
                        </small>
                    </div>
                 </div>

                 <div class="form-group mt-4">
                   <label for="addrdoc">Proof of Addredd Image (gas bill,telephone bill...)</label><br>
                    <div class="picCard text-center">
                        <div class="avatar-upload">
                            <div class="avatar-preview text-center">
                                <div id="imagePreview" style="background-image: url( ../assets/uploads/users/<?php echo $_SESSION['proof_addr_image'] ?> );">
                                </div>
                            </div>
                            <div class="avatar-edit">
                                <input name='avatar' id="avatar" class="fas fa-pencil" type='file' />
                                <label for="avatar">+</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <sub class="text-danger">
                            <?php
                                if (isset($_SESSION['ERRORS']['imageerror']))
                                    echo $_SESSION['ERRORS']['imageerror'];

                            ?>
                        </sub>
                    </div>
                    <div class="text-center">
                        <small class="text-success font-weight-bold">
                            <?php
                                if (isset($_SESSION['STATUS']['editstatus']))
                                    echo $_SESSION['STATUS']['editstatus'];
                            ?>
                        </small>
                    </div>
                 </div>

                 <div class="form-group mt-4">
                   <label for="addrdoc">Upload a video of your face and a paper with antiphishing code</label> <label class="red-label"> <?php echo $_SESSION['antiphishing']?></label><br>
                    <div class="picCard text-center">
                        <div class="avatar-upload">
                            <div class="avatar-preview text-center">
                                <div id="imagePreview" style="background-image: url( ../assets/uploads/users/<?php echo $_SESSION['proof_addr_image'] ?> );">
                                </div>
                            </div>
                            <div class="avatar-edit">
                                <input name='avatar' id="avatar" class="fas fa-pencil" type='file' />
                                <label for="avatar">+</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <sub class="text-danger">
                            <?php
                                if (isset($_SESSION['ERRORS']['imageerror']))
                                    echo $_SESSION['ERRORS']['imageerror'];

                            ?>
                        </sub>
                    </div>
                    <div class="text-center">
                        <small class="text-success font-weight-bold">
                            <?php
                                if (isset($_SESSION['STATUS']['editstatus']))
                                    echo $_SESSION['STATUS']['editstatus'];
                            ?>
                        </small>
                    </div>
                 </div>
                

                <hr>
                    <span class="h5 font-weight-normal text-muted mb-4">Password Edit</span>
                    <br>
                    <sub class="text-danger mb-4">
                        <?php
                            if (isset($_SESSION['ERRORS']['passworderror']))
                                echo $_SESSION['ERRORS']['passworderror'];

                        ?>
                    </sub>
                    <br><br>

                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Current Password" autocomplete="new-password">
                    </div>

                    <div class=" form-group">
                        <input type="password" id="newpassword" name="newpassword" class="form-control" placeholder="New Password" autocomplete="new-password">
                    </div>

                    <div class=" form-group mb-5">
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" autocomplete="new-password">
                    </div>

                    <button class="btn btn-lg btn-primary btn-block mb-5" type="submit" name='update-profile'>Confirm Changes</button>
                
            </form>

        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>



<?php

include '../assets/layouts/footer.php';

?>

<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#avatar").change(function() {
        console.log("here");
        readURL(this);
    });
</script>
