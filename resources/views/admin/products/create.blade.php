<form id='createForm' action="">
    <div id="status"></div>
    <div class="form-row">

        <div class="row">
            <div class="form-group col-md-12 mb-2">
                <label for="">Product Title <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="" placeholder=""
                    required>
                <span id="error_title" class="has-error"></span>
            </div>
            {{-- <div class="clearfix"></div>
        <br> --}}

        </div>
        <div class="row">
            <div class="form-group col-md-12 mb-2">
                <label for="">Product Price <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="price" name="price" value="" placeholder=""
                    required>
                <span id="error_title" class="has-error"></span>
            </div>
            {{-- <div class="clearfix"></div>
        <br> --}}

        </div>
        <div class="row">
            <div class="form-group col-md-12 mb-2">
                <label for="">Select Category <span style="color: red;">*</span></label>
                <select class="form-control" name="category" id="category" required>
                    <option >Select Category</option>
                    @foreach ($category as $ct)
                        <option value="{{ $ct->id }}">{{$ct->title}}</option>
                    @endforeach
                </select>
                <span id="error_title" class="has-error"></span>
            </div>
            {{-- <div class="clearfix"></div>
        <br> --}}

        </div>

        <div class="row">
            <div class="form-group col-md-12 mb-2">
                <label for="">Product Description <span style="color: red;">*</span></label>
                <textarea name="description" id="description" class="form-control" required placeholder="Enter Product Description"></textarea>
                <span id="error_blog_description" class="text-danger"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group  col-md-12">
                <strong>Image: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                <img id="logoPreview" src="" alt="Image" height="150">
                <p></p>
                <div class="input-group">
                    <input id="image" type="file" name="image" style="display:none">
                    <div class="input-group-prepend">
                        <a class="btn btn-primary text-white" onclick="$('input[id=image]').click();">Browse</a>
                    </div>
                    <input type="text" name="SelectedFileName" class="form-control" id="SelectedFileName" value="" readonly>
                </div>
                <span>Image Size Must Be 600 × 599 (width - height) </span>
                <span id="error_hero_image" class="text-danger"></span>
            </div>
        </div>

        <div class="d-grid gap-2 mt-2">
            <button class="btn btn-primary button-submit" value="ignore" formnovalidate type="submit"
                data-loading-text="Loading...">
                <i class="fadeIn animated bx bx-save"></i>Save</button>
        </div>

    </div>
</form>

{{-- <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script> --}}
<script src="{{ asset('backend/assets/js/jquery.validate.min.js') }}"></script>
<!-- Sweet Alert library -->
<script src="{{ asset('backend/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.button-submit').click(function(e) {
            e.preventDefault();

            // $('#create').validate({

            //     submitHandler: function(form) {
            // console.log($("#create")[0]);

            var myData = new FormData($("#createForm")[0]);
            myData.append('_token', CSRF_TOKEN);

            swal({
                title: "Are you sure to submit?",
                text: "Submit Form",
                type: "warning",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Submit!"
            }, function() {
                $.ajax({
                    url: '/admin/storeProduct',
                    type: 'POST',
                    data: myData,
                    dataType: 'json',
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.type === 'success') {
                            $('#myModal').modal('hide');
                            swal("Done!", "It was succesfully done!",
                                "success");
                            reload_table();
                        } else if (data.type === 'error') {
                            if (data.errors) {
                                $.each(data.errors, function(key, val) {
                                    $('#error_' + key).html(val);
                                });
                            }
                            $("#status").html(data.message);
                            swal("Error sending!", "Please fix the errors",
                                "error");
                        }
                    }
                });
            });
            //     }
            // });
        });

        function reload_table() {
            table.ajax.reload(null, false); //reload datatable ajax
        }

        $('input[id=image]').change(function () {
        // Get the selected file
        var file = this.files[0];

        // Check if a file is selected
        if (file) {
            // Create a FileReader to read the selected file
            var reader = new FileReader();

            // Set up the FileReader onload event to update the image preview
            reader.onload = function (e) {
                $('#logoPreview').attr('src', e.target.result);
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        } else {
            // If no file is selected, revert to the current logo
            $('#logoPreview').attr('src', '');
        }

        // Update the input field's value for display
        $('#SelectedFileName').val($(this).val());
    });
    });
</script>
