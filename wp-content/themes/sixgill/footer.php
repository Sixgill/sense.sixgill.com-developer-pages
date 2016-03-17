<footer>
    <div class="container">
        <div class="ftr_left">
            <ul>
                <li><a href="/legal/">Legal</a></li>
                <li><a data-toggle="modal" data-target="#myModal3">Contact</a></li>
            </ul>
            <p>Copyright © 2016 Sixgill, LLC</p>
        </div>
        <div class="social"> <a href="https://www.facebook.com/sixgilltech/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/SixgillT" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.instagram.com/sixgilltech/" target="_blank"><i class="fa fa-instagram"></i></a> </div>
    </div>
</footer>
<?php wp_footer(); ?> 
 
<!-- modal POPUP -->

<div class="modal fade popmap" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <p> Different messages or business logic can be triggered based on proximity of any group or subgroup of a mass of mobile devices to any single landmark, group of landmarks, or sequence of landmarks</p>
                <img src="<?=get_template_directory_uri();?>/images/map_pop.jpg">
            </div>

        </div>
    </div>
</div>

<!-- modal POPUP -->

<div class="modal fade popmap" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <img src="<?=get_template_directory_uri();?>/images/RWC_heatmap_global1.png">
            </div>

        </div>
    </div>
</div>

<!-- modal POPUP -->

<div class="modal fade popmap" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
            <h1>Contact</h1>
                <p>310.220.4238<br/>
<a href="mailto:sales@sixgill.com">sales@sixgill.com</a><br/><br/>
SANTA MONICA<br/>
312 Arizona Avenue<br/>
Santa Monica, CA 90401
</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.0426494208914!2d-118.49943728478584!3d34.01711618061547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cf828fe6fb%3A0x98334bfc7af2a7bf!2s312+Arizona+Ave%2C+Santa+Monica%2C+CA+90401!5e0!3m2!1sen!2sus!4v1458203894011" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>

<!-- modal POPUP -->
<div class="modal fade popmap" id="request_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1> request a demo</h1>
				<form action="<?php echo the_permalink();?>" id="form" method="post">
                <div class="form_mid">
                    <p class="fieldsmarked">Fields marked with a <i>*</i> are required</p>
                    <p class="welcom_text">We welcome the opportunity to work with your organization. Please provide the following information so we can prepare a demo for you.</p>
                    <label>First Name <i>*</i></label>
                    <input type="text" name="first_name" value="" required="required">
                    <label>Last Name <i>*</i></label>
                    <input type="text" name="last_name" value="" required="required">
                    <label>Company <i>*</i></label>
                    <input type="text" name="company" value="" required="required">
                    <label>Email <i>*</i></label>
                    <input type="email" name="email" value="" required="required">
                    <label>Phone</label>
                    <input type="text" name="phone" value="">
                    <div class="text-center">
                        <button> send your request </button>
                    </div>
                </div>
				  <input type="hidden" name="submitted" value="true" />
				</form>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
		$('.carousel').carousel({
			//interval: 8000
			interval: false
		});
	});
</script>
<!-- /.modal -->  
</body>
</html>
</html>