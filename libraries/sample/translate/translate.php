<?php if (isset($config['LQD']['translate']) && $config['LQD']['translate'] == true) {?>
<?php if($params['act']=='1'){ ?>
<li>
    <div class="lang d-flex justify-content-start align-items-center">
        <img class="hvr-float mr-1" src="assets/images/vi.jpg" onclick="doGoogleLanguageTranslator('vi|vi'); return false;" />
        <img class="hvr-float" src="assets/images/en.jpg" onclick="doGoogleLanguageTranslator('vi|en'); return false;" />
    </div>
</li>
<?php }elseif($params['act']=='2') { ?>
<li class="list-unstyled">
    <select class="select-Translator text-sm" required="" onchange="doGoogleLanguageTranslator(this.value); return false;">
        <option value="">Google Dịch</option>
        <option value="vi|vi" >Việt Nam</option>
        <option value="vi|en">Anh</option>
        <option value="vi|ja">Nhật</option>
        <option value="vi|ko">Hàn</option>
        <option value="vi|th">Thái</option>
        <option value="vi|zh-CN">Trung(Giản thể)</option>
        <option value="vi|zh-TW">Trung(Phồn thể)</option>
        <option value="vi|km">Khmer</option>
        <option value="vi|id">Indonesia</option>
        <option value="vi|tl">Filipinos</option>
    </select>
</li>
<?php }?>
<div id="google_language_translator"></div>

<style>
      .goog-te-gadget, .skiptranslate { display: none;}
        body {top: 0px !important;}
        /*option select custom-select*/
        .select-Translator{height: 35px;padding: 0px 10px;outline: none;border: none;border-radius: 50px;min-width: 140px;font-size: 14px; color: var(--color-main);}
        .skiptranslate iframe {
            display: none !important;
        }

        .goog-te-gadget img {
            display: none;
        }

        body {
            top: 0px !important;
        }

        .goog-te-gadget .goog-te-combo {
            height: 35px;
            width: 120px;
            font-size: 13px;
            font-family: var(--font-regular);
            background: #fff;
            text-align: center;
            border:1px solid var(--color-main);
            border-radius: 20px;
            color: var(--color-main);
        }

        .goog-te-gadget span {
            display: none;
        }

        .goog-te-gadget {
            font-size: 0px !important;
        }

        #google_language_translator {
            width: 120px;
            margin: auto 0 10px auto;
        }
    </style>
<?php } ?>