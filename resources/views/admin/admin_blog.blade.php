@extends('layouts/admin-main')
@section('head')
    

    <meta name="keywords" content="Add new blog, Blog">
    <meta name="description" content="">
    <title>admin_blog</title>
<link rel="stylesheet" href="{{css_path('admin_blog.css','admin')}}" media="screen">
   
    
    @endsection
    @section('main')
        

    <section class="u-clearfix u-section-2" id="sec-ff2a">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a href="{{url("/admin/blog/create")}}" class="u-align-right u-border-2 u-border-custom-color-1 u-border-hover-palette-3-base u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius-50 u-btn-1">Add new</a>
        <h1 class="u-align-left u-custom-font u-font-source-sans-pro u-text u-text-default u-title u-text-1">Blog</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-9635">
      <div class="u-container-style u-expanded-width u-group u-white u-group-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
              <colgroup>
                <col width="4.1%">
                <col width="38.8%">
                <col width="22.8%">
                <col width="13.9%">
                <col width="10.7%">
                <col width="9.6%">
              </colgroup>
              <thead class="u-align-center u-black u-table-header u-table-header-1">
                <tr style="height: 26px;">
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">sr.no</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">post Title</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">category</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">date</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">update</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">DELETE</th>
                </tr>
              </thead>
              <tbody class="u-align-center u-table-body u-table-body-1">
                @foreach ($blogs as $record)
                <tr style="height: 28px;">
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><a
                    href="{{ url('/admin/blog/' . $record->id) }}">{{ $record->id }}</a> </td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><a
                    href="{{ url('/admin/blog/' . $record->id) }}">{{ $record->post_title }}</a></td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $record->category }}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ substr($record->updated_at, 0, 2 + 2 + 2 + 1 + 4)}}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <a class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-white u-btn-1" href="{{ url('/admin/blog/' . $record->id . '/edit') }}" data-page-id="286892614">
                      update</a>
                  </td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <form action="{{ url('/admin/blog/' . $record->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <a class="u-border-none u-btn u-button-style u-hover-white u-palette-2-base u-btn-2"  onclick="dltclick({{ $record->id }})"><input style="display: none"
                      type="submit" id='{{ 'sub-' . $record->id }}' value="Delete"
                      name="delete">Delete</a>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    
    @endsection