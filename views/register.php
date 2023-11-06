<h1>Create an account</h1>
<form action='' method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label class="form-label">firstname</label>
                <input type="text" name="firstname" class="form-control">
            </div>

        </div>
        <div class="col">
            <div class="mb-3">
                <label class="form-label">lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <textarea type="email" name="body" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">password</label>
        <textarea type="password" name="password" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <textarea type="password" name="confirmPassword" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>