@extends('layouts/admin-main')
@section('head')
    <meta name="keywords" content="Website Setting">
    <meta name="description" content="">
    <title>admin_site_setting</title>
<link rel="stylesheet" href="{{css_path('admin_site_setting.css','admin')}}" media="screen">
   @endsection
 @section('main')


 @php
     $name=$setting->website_name;
     $logo=$setting->logo;
     $description=$setting->description;
     $head_content=$setting->additional_head_content;
     $keywords=$setting->keywords;
 @endphp

    <section class="u-clearfix u-section-2" id="sec-9b64">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Website Setting</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-3d7a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
          <form action="{{url('/admin/setting')}}" enctype="multipart/form-data" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10    enc u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" redirect="true">


            {{-- ['website_name', 'logo', 'description', 'keywords',"additional_head_content"]; --}}

            @csrf
            @method('PATCH')
            <div class="u-form-group u-form-partition-factor-1 u-form-group-1">
              <label for="text-3019" class="u-label">Website Name</label>
              <input type="text" value="{{$name}}" placeholder="Enter Your Website Name" id="text-3019" name="website_name" class="u-border-1  u-border-grey-30 u-input u-input-rectangle u-white" required="required">
            </div>
            <div class="u-form-group u-form-partition-factor-1 u-form-group-2">
              <label for="text-32ef" class="u-label">Upload Logo</label>
              <input type="file" id="text-32ef" value="{{$logo}}" name="logo" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <img src="{{url($logo)}}" width="30%" />
            </div>
            <div class="u-form-group u-form-textarea u-form-group-3">
              <label for="textarea-cbf3" class="u-label">Website Description</label>
              <textarea rows="4" cols="50" id="textarea-cbf3" name="description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" placeholder="Enter Your Website Description">{{$description}}</textarea>
            </div>
            
            <div class="u-form-group u-form-textarea u-form-group-4">
              <label for="textarea-7fe7" class="u-label">keywords</label>
              <textarea rows="4" cols="50" id="textarea-7fe7" name="keywords" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" placeholder="Enter Keywords Releted To Your Website and separate it with commas">{{$keywords}}</textarea>
            </div>
       
            <div class="u-form-group u-form-textarea u-form-group-6">
              <label for="textarea-a21c" class="u-label">Additional Head Tag Content</label>
              <textarea rows="4" cols="50" id="textarea-a21c" name="additional_head_content" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">{{$head_content}}</textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
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