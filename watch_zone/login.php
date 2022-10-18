<?php 

include 'partials/header.php';

?>

    <div class="text-center my-4">
        <a class="btn btn-outline-danger" href="index.html">Watch Zone</a>
    </div>

    <section class="w-100 p-4 d-flex justify-content-center pb-2">
        <form style="width: 22rem;">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control">
                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Email address</label>
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 88.8px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control">
                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Password</label>
                <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 64px;"></div>
                    <div class="form-notch-trailing"></div>
                </div>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="">
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center mb-3">
                <a href="login.html" class="btn btn-outline-danger">Login
                </a>

            </div>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="signup.html">Register</a></p>

            </div>
        </form>
    </section>

    <!-- Footer -->

    <?php 

include 'partials/footer.php';

?>