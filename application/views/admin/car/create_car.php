<div class="col-9 mt-5 mx-auto">
    <div class="card">
        <div class="card-body">
        <?php echo form_open('admin/car/create');?>
            <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                                            <label class="col-form-label">Merek</label>
                                            <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="ti-check-box"></i></div>
                                                        </div>
                                            <select class="custom-select" name="driver_status">
                                                <option value="Active">Active</option>
                                            </select>
                                            </div>
                                        </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Nama Mobil <span class="text-danger">*</span></label>
                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="ti-car"></i></div>
                                                        </div>
                        <input class="form-control" type="text" name="car_name" placeholder="Avanza">
                    </div>
                    <?php echo form_error('car_name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Penumpang <span class="text-danger">*</span></label>
                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="ti-user"></i></div>
                                                        </div>
                        <input class="form-control" type="text" name="passenger" placeholder="7">
                    </div>
                    <?php echo form_error('passenger', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Bagasi <span class="text-danger">*</span></label>
                        <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="ti-bag"></i></div>
                                                        </div>
                        <input class="form-control" type="text" name="luggage" placeholder="2">
                    </div>
                    <?php echo form_error('luggage', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                

                

                <div class="col-md-6">
                    <div class="form-group">
                        
                        <input class="btn btn-primary" type="submit" value="Simpan Mobil">
                    
                    </div>
                </div>

                

            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>