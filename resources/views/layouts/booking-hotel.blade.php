<div class="contact-form contact-form-inputs-filled contact-form-button-block font-size-14">
    <form action="assets/php/mailer.php" method="post" novalidate="novalidate">
        <div class="row">
            <div class="container form-tag mt-2 mb-2">
                <div class="col-md-4 ">
                    <label class="text-uppercase mb-0 ">where to?</label>
                    <input class="bg-gray text-dark mb-0" type="text" name="name" aria-required="true" aria-invalid="false" placeholder="ENTER A DESTINATION OR HOTEL NAME" required="">
                </div><!-- /.col-md-12 -->
                <div class="col-md-4">
                    <label class="text-uppercase mb-0">When?</label>
                    <input class="bg-gray text-dark mb-0" type="dates" name="email" aria-required="true" aria-invalid="false" placeholder="SELECT YOUR DATE RANGE 2 ADULTS SEARCH" required="">
                </div><!-- /.col-md-12 -->
                <div class="col-md-2">
                    <label class="text-uppercase mb-0">Who is going?</label>
                    <input class="bg-gray text-dark mb-0" type="tel" name="mobile" aria-required="true" aria-invalid="false" placeholder="2 ADULTS" required="">
                </div><!-- /.col-md-12 -->
                <div class="col-md-2 text-md-right">
                    <label class="text-uppercase mb-0 text-left">&nbsp;</label>
                    <input type="submit" value="SEARCH" class="btn-outline">
                </div><!-- /.col-md-12 -->
            </div>

        </div><!-- /.row -->
    </form>
    <div class="contact-form-result hidden"></div><!-- /.contact-form-result -->
</div>
