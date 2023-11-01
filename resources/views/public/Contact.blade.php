@extends('layouts/main')

@section('head')
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Contact</title>
<link rel="stylesheet" href="{{css_path('Contact.css')}}" media="screen">
    @endsection

   @section('main')


    <section class="u-clearfix u-section-1" id="sec-058b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Contact Us</h1>
      </div>
    </section>

    <section class="u-clearfix u-section-3" id="sec-c6f7">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-align-center u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
          <form action="/contact" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-15 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" redirect="true">
            @csrf
            <div class="u-form-group u-form-name">
              <label for="name-9692" class="u-custom-font u-label u-text-font u-label-1">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-9692" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-9692" class="u-custom-font u-label u-text-font u-label-2">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="email-9692" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="sub" class="u-custom-font u-label u-text-font u-label-2">Subject</label>
              <input type="text" placeholder="Enter a valid email address" id="sub" name="subject" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-9692" class="u-custom-font u-label u-text-font u-label-3">Message</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-9692" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required=""></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
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
