    <div class="main__form">
        <div class="title__form">Đăng Ký Nhận Tin</div>
        <form class="validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
            <div class="col__input d-flex flex-wrap">
                <div class="newsletter__input col-md-6">
                    <input type="text" class="form-control text-sm" id="fullname-newsletter" name="dataNewsletter[fullname]" placeholder="<?= hoten ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                </div>
                <div class="newsletter__input col-md-6">
                    <input type="number" class="form-control text-sm" id="phone-newsletter" name="dataNewsletter[phone]" placeholder="<?= sodienthoai ?>" required />
                    <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                </div>
            </div>
            <div class="col__input d-flex flex-wrap">
                <div class="newsletter__input col-md-6">
                    <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email " required />
                    <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                </div>
                <div class="newsletter__input col-md-6">
                    <input type="text" class="form-control text-sm" id="address-newsletter" name="dataNewsletter[address]" placeholder="<?= diachi ?>" />
                    <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                </div>
            </div>

            <div class="col__content col-md-12">
                <textarea class="form-control text-sm" id="content-newsletter" name="dataNewsletter[content]" placeholder="<?= noidung ?>" required /><?= $flash->get('content') ?></textarea>
                <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
            </div>

            <div class="col__submit">
                <div class="newsletter__button text-center">
                    <input type="submit" class="text-white" name="submit-newsletter" value="ĐĂNG KÝ" disabled>
                    <input type="hidden" class="text-white" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                </div>
            </div>

        </form>
    </div>
  