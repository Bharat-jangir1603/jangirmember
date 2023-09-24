
    <div class="box_con">
        <div class="sub_cubox">
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Member Edit Form
            </h4>
            <div class="sub_cbox">
                <form id="form_3" method="post">
                    <div class="form-group">
                        <label for="inputAddress">Member Name</label>
                        <input name="name" value="<?= $value->name; ?>" type="text" class="form-control" id="inputAddress" placeholder="Member Name" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Occupation</label>
                        <input name='work' value="<?= $value->work; ?>" type="text" class="form-control" id="inputAddress1" placeholder="Occupation" required />
                    </div>
                    <label>Status</label>

                    <div class="form-group" style="display: flex;">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo ($value->status == 'Single')?'checked':''; ?> type="radio" name="status" id="gridRadios1" value="Single" />
                            <label class="form-check-label" for="gridRadios1">
                                Single
                            </label>
                        </div>
                        <div class="form-check" style="margin-left: 20px;">
                            <input class="form-check-input" type="radio" <?php echo ($value->status == 'Married')?'checked':'';  ?> name="status" id="gridRadios2" value="Married" />
                            <label class="form-check-label" for="gridRadios2">
                                Married
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress3">Date of birth</label>
                        <input name="birth" value="<?= $value->birth; ?>" type="date" class="form-control" id="inputAddress3" placeholder="Date of birth" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress5">Address:Only City Name</label>
                        <input name="city" value="<?= $value->city; ?>" type="text" class="form-control" id="inputAddress5" placeholder="Chara Ka Bas" required />
                    </div>
                    <button class="btn btn-primary"  onclick="edit_function()" >Submit form</button>
                </form>
            </div>
        </div>
    </div>