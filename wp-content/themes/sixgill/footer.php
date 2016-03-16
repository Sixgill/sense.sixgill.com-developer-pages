<footer>
    <div class="container">
        <div class="ftr_left">
            <ul>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p>Copyright © 2016 Sixgill, LLC</p>
        </div>
        <div class="social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
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
<div class="modal fade popmap" id="request_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1> request a demo</h1>
				<form action="<?php echo the_permalink();?>" id="form" method="post">
                <div class="form_mid">
                    <p class="fieldsmarked">Fields marked with a <i>*</i> are required</p>
                    <p class="welcom_text">We welcome the opportunity to work with your organization. Please provide the fallowing information to recive access to our demo portal.</p>
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