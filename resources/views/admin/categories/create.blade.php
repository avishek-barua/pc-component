<form id='createForm' action="" >
    <div id="status"></div>
    <div class="form-row">

        <div class="row">
            <div class="form-group col-md-12">
                <label for="">Category Title <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="" placeholder=""
                    required>
                <span id="error_title" class="has-error"></span>
            </div>
            {{-- <div class="clearfix"></div>
        <br> --}}

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
                        url: '/admin/storeCategory',
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
    });
    
</script>
