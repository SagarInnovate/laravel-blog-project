<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ADD new blog post">
    <meta name="description" content="">
    <title>admin_add_new_blog</title>
    <link rel="stylesheet" href="{{css_path('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{css_path('admin_add_new_blog.css','admin')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{js_path('jquery.js')}}" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{js_path('nicepage.js')}}" "="" defer=""></script>
    <script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
   
  </head>
  <body class="u-body u-xl-mode" data-lang="en">


    @php

    if ($title != 'update blog') {
        $action = '/admin/blog';
        $method = 'POST';
        $post_title = '';
        $post_content = '';
        $image = '';
        $description = '';
        $category = '';
        $tags = '';
        $str_url = '';
    } else {
        $action = '/admin/blog/' . $blog->id;
        $method = 'PATCH';
        $post_title = $blog->post_title;
        $post_content = $blog->post_content;
        $image = $blog->image;
        $description = $blog->description;
        $category = $blog->category;
        $tags = $blog->tags;
        $str_url = $blog->str_url;
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
          <form action="{{ url($action) }}" method="POST" enctype="multipart/form-data"class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 26px;" redirect="true">
            @csrf
            @method($method)
            <div class="u-form-group u-form-group-1">
              <label for="text-d37c" class="u-label">Post Name</label>
              <input type="text" placeholder="Enter Your Post Name" 
              value="{{ $post_title }}" id="text-d37c" name="post_title" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required="required">
            </div>
            <div class="u-form-group u-form-textarea u-form-group-2">
              <label for="textarea-5616" class="u-label">Post Data</label>
              <textarea rows="25" cols="50" id="textarea-5616" name="post_content" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required="">{{ $post_content }}</textarea>
            </div>
            <div class="u-form-group u-form-textarea u-form-group-3">
              <label for="textarea-84d4" class="u-label">Meta Description</label>
              <textarea rows="2" cols="50" id="textarea-84d4" name="description" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required=""> {{ $description }}</textarea>
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
              <label for="text-fff8" class="u-label">post Image</label>
              <input type="file" placeholder="" id="text-fff8" 
              value="{{ $image }}" name="file" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" >
              <img src="{{$image}}" width="30%" />
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-5">
              <label for="select-4d52" class="u-label">Category</label>
              <div class="u-form-select-wrapper">
                <select id="select-4d52" name="category" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required="required">
                  @php
                  $a = app('App\Http\Controllers\indexController')->all_category();
                  
              @endphp


<option disabled selected>please select your category
</option>
@foreach ($a as $item)
    <option value="{{ $item->category_name }}"
        {{ $item->category_name == $category ? 'selected' : 'hello' }}>
        {{ $item->category_name }}</option>
@endforeach
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-textarea u-form-group-6">
              <label for="textarea-a563" class="u-label">Tags/Keywords</label>
              <textarea rows="4" cols="50" id="textarea-a563" name="tags" class="u-border-2 u-border-grey-30 u-input u-input-rectangle u-radius-15 u-white" required="">{{ $tags }}</textarea>
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
      <script>
        CKEDITOR.replace( 'post_content' );
</script>
    </section>
    
    
    