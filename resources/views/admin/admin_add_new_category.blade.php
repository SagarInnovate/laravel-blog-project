<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ADD new blog post">
    <meta name="description" content="">
    <title>admin_add_new_category</title>
    <link rel="stylesheet" href="{{css_path('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{css_path('admin_add_new_category.css','admin')}}" media="screen">
<script class="u-script" type="text/javascript" src="{{js_path('jquery.js')}}" "="" defer=""></script>
<script class="u-script" type="text/javascript" src="{{js_path('nicepage.js')}}" "="" defer=""></script>

  </head>
  <body class="u-body u-stick-footer u-xl-mode" data-lang="en"><header class=" u-clearfix u-header u-section-row-container" id="sec-4200" style="background-image: none"><div class="u-section-rows">
    
@php
        
if ($title != 'update category') {
    $action = '/admin/category';
    $method = 'POST';
    $name = '';
    $description = '';
} else {
    $action = '/admin/category/' . $category->id;
    $method = 'PATCH';
    $name = $category->category_name;
    $description = $category->description;
}

@endphp
  
<section class="u-clearfix u-section-1" id="sec-aced">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">{{ $title }}</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-6574">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-form u-form-1">
          <form action="{{$action}}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 26px;" redirect="true">
            <div class="u-form-group u-form-group-1">
              @csrf
              @method($method);
              <label for="text-d37c" class="u-label">Category Name</label>
              <input type="text" placeholder="Enter Your Category Name" value="{{$name}}" id="text-d37c" name="category_name" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 
              u-white" required="required">
            </div>
            <div class="u-form-group u-form-textarea u-form-group-2">
              <label for="textarea-a563" class="u-label">Description</label>
              <textarea rows="4" cols="50" id="textarea-a563" name="description" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required="" placeholder="enter description about your category">{{ $description }}</textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">{{ $btn_text }}</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    
