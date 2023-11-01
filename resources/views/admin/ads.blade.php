@extends('layouts/admin-main')
@section('head')
    <meta name="keywords" content="Home Page Ads, Blog Post Ads">
    <meta name="description" content="">
    <title>ads</title>
<link rel="stylesheet" href="{{css_path('ads.css','admin')}}" media="screen">
   
    @endsection
    
    
    
    @section('main')

    <section class="u-clearfix u-section-2" id="sec-a1b7">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Home Page Ads</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-49a6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" redirect="true">
            <div class="u-form-group u-form-textarea u-label-left u-form-group-1">
              <label for="textarea-5fb7" class="u-label u-label-1">Home Banner Ad</label>
              <textarea rows="6" cols="50" id="textarea-5fb7" name="banner_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-textarea u-label-left u-form-group-2">
              <label for="textarea-50a8" class="u-label u-label-2">Post Ad</label>
              <textarea rows="6" cols="50" id="textarea-50a8" name="post_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-textarea u-label-left u-form-group-3">
              <label for="textarea-40b1" class="u-label u-label-3">Slider Ad</label>
              <textarea rows="6" cols="50" id="textarea-40b1" name="slider_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-textarea u-label-left u-form-group-4">
              <label for="textarea-ff7d" class="u-label u-label-4">Category Ad</label>
              <textarea rows="6" cols="50" id="textarea-ff7d" name="textarea" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-5"></label>
              <div class="u-align-right u-btn-submit-container">
                <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
              </div>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_610d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Blog Post Ads</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_3c39">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" redirect="true">
            <div class="u-form-group u-form-textarea u-label-left u-form-group-1">
              <label for="textarea-5fb7" class="u-label u-label-1">Banner Ad</label>
              <textarea rows="6" cols="50" id="textarea-5fb7" name="banner_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-textarea u-label-left u-form-group-2">
              <label for="textarea-50a8" class="u-label u-label-2">Sidebar Ad</label>
              <textarea rows="6" cols="50" id="textarea-50a8" name="post_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-textarea u-label-left u-form-group-3">
              <label for="textarea-40b1" class="u-label u-label-3">Post Ad</label>
              <textarea rows="6" cols="50" id="textarea-40b1" name="slider_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-4"></label>
              <div class="u-align-right u-btn-submit-container">
                <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
              </div>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="carousel_edc2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">About Page Ads</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_0b8e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" redirect="true">
            <div class="u-form-group u-form-textarea u-label-left u-form-group-1">
              <label for="textarea-5fb7" class="u-label u-label-1">Banner Ad</label>
              <textarea rows="6" cols="50" id="textarea-5fb7" name="banner_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-2"></label>
              <div class="u-align-right u-btn-submit-container">
                <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
              </div>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-8" id="carousel_52b6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Contact Page Ads</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-9" id="carousel_f974">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-26 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" redirect="true">
            <div class="u-form-group u-form-textarea u-label-left u-form-group-1">
              <label for="textarea-5fb7" class="u-label u-label-1">Banner Ad</label>
              <textarea rows="6" cols="50" id="textarea-5fb7" name="banner_ad" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-white"></textarea>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-2"></label>
              <div class="u-align-right u-btn-submit-container">
                <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
              </div>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
           
    @endsection