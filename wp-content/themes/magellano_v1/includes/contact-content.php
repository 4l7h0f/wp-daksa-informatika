<div class="container margin_40_90">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 add_bottom_25 pe-lg-5">
            <h5 class="mb-4">Drop Us a Line</h5>
            <div id="success-contact" class="alert alert-success" style="display: none;"></div>
            <div id="success-contact" class="alert alert-failed" style="display: none;"></div>
            <form id="enquiry" autocomplete="off">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Name" id="name_contact" name="name_contact" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email_contact" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Phone" id="phone_contact" name="phone_contact" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact" required></textarea>
                </div>
                <!-- <div class="form-group">
                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">
                </div> -->
                <div class="form-group">
                    <input class="btn_1" type="submit" value="Submit" id="submit-contact">
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-6 add_bottom_25">
            <div class="box_contacts">
                <i class="bi bi-lightbulb-fill"></i>
                <h2>PT. Daksa Bhadra Informatika</h2>
                <p>
                    Patra Jasa Office Tower, Lt.17. R-1702
                    Jl. Jend. Gatot Subroto Kav 32-34. Kuningan Timur, Setiabudi, Jakarta Selatan,
                    DKI Jakarta 12950
                </p>
                <a href="mailto:info@daksa-informatika.co.id">info@daksa-informatika.co.id</a>
            </div>
            <!-- <div class="box_contacts">
                <i class="bi bi-cloud-arrow-up"></i>
                <h2>Submissions</h2>
                <a href="#0">+94 423-23-221</a> - <a href="#0">info@magellano.com</a>
                <small>MON to FRI 9am-6pm</small>
            </div> -->
        </div>
    </div>
</div>

<script>
    (function($) {
        $('#enquiry').submit( function(event){
            
            event.preventDefault();
            var endPoint = '<?php echo admin_url('admin-ajax.php'); ?>';

            var form = $('#enquiry').serialize();
            var formdata = new FormData;

            formdata.append('action', 'enquiry');
            formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce'); ?>');
            formdata.append('enquiry', form);

            $.ajax(endPoint, {
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                success: function(res)
                {
                    $('#enquiry').fadeOut(200);
                    $('#success-contact').text('Thank you for your Email').show();
                    $('#enquiry').trigger('reset');
                    $('#enquiry').fadeIn(200);
                },
                error: function(err)
                {
                    $('#success-contact').text(err.responseJSON.data).show();
                }
            })
        })
    })(jQuery)
</script>