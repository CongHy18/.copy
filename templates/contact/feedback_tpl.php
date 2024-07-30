<div class="title-main"><span><?= $titleMain ?></span>
    <div class="animate-border m-auto"></div>
</div>

<?= $flash->getMessages("frontend") ?>

<div class="content-main">
    <div class="contact-article row justify-content-center">
        <form class="validation-newsletter col-lg-8" novalidate method="post" action="" enctype="multipart/form-data">
            <div class="col-input d-flex flex-wrap">
                <div class="newsletter-input col-md-6">
                    <input type="text" class="form-control text-sm" id="fullname-newsletter"
                        name="dataNewsletter[fullname]" placeholder="<?= hoten ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                </div>
                <div class="newsletter-input col-md-6">
                    <input type="number" class="form-control text-sm" id="phone-newsletter" name="dataNewsletter[phone]"
                        placeholder="<?= sodienthoai ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                </div>
            </div>
            <div class="col-input d-flex flex-wrap">
                <div class="newsletter-input col-md-6">
                    <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]"
                        placeholder="Email " required />
                    <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                </div>
                <div class="newsletter-input col-md-6">
                    <input type="text" class="form-control text-sm" id="address-newsletter"
                        name="dataNewsletter[address]" placeholder="<?= diachi ?>" />
                    <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                </div>
            </div>

            <div class="col-content col-md-12">
                <textarea class="form-control text-sm" id="content-newsletter" name="dataNewsletter[content]"
                    placeholder="Nội dung góp ý" required /><?= $flash->get('content') ?></textarea>
                <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
            </div>

            <div class="col-md-12">
                <div class="newsletter-button text-center btn btn-success mt-3 w-100">
                    <input type="submit" class="btn btn-sm text-white" name="submit-newsletter" value="ĐĂNG KÝ" disabled>
                    <input type="hidden" class="btn btn-sm btn-danger" name="recaptcha_response_newsletter"
                        id="recaptchaResponseNewsletter">
                </div>
            </div>

        </form>
    </div>
</div>