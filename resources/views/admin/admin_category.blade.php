@extends('layouts/admin-main')
@section('head')
    
    <meta name="keywords" content="Add new blog, Blog">
    <meta name="description" content="">
    <title>admin_category</title>
<link rel="stylesheet" href="{{css_path('admin_category.css',"admin")}}" media="screen">
   @endsection

   @section('main')
       

    <section class="u-clearfix u-section-2" id="sec-b97f">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a href="{{('/admin/category/create')}}" data-page-id="1034119212" class="u-align-right u-border-2 u-border-custom-color-1 u-border-hover-palette-3-base u-btn u-btn-round u-button-style u-hover-custom-color-1 u-none u-radius-50 u-btn-1">Add new</a>
        <h1 class="u-align-left u-custom-font u-font-source-sans-pro u-text u-text-default u-title u-text-1">Category</h1>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle u-section-3" id="sec-9635">
      <div class="u-container-style u-expanded-width u-group u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
              <colgroup>
                <col width="4.1%">
                <col width="21.6%">
                <col width="40%">
                <col width="13.9%">
                <col width="10.7%">
                <col width="9.6%">
              </colgroup>
              <thead class="u-align-center u-black u-table-header u-table-header-1">
                <tr style="height: 26px;">
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">sr.no</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Category name</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Description</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">date</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">update</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">DELETE</th>
                </tr>
              </thead>
              <tbody class="u-align-center u-table-body u-table-body-1">
                <tr style="height: 28px;">
                  @foreach ($category as $record)
              <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{$record->id}}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{$record->category_name}}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> {{$record->description}}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell"> {{ substr($record->updated_at, 0, 2 + 2 + 2 + 1 + 4)}}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <a class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-white u-btn-1" href="{{ url('/admin/category/' . $record->id . '/edit') }}" data-page-id="286892614">UPDATE</a>
                  </td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <form action="{{ url('/admin/category/' . $record->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <a class="u-border-none u-btn u-button-style u-hover-white u-palette-2-base u-btn-2" href="#"                                         onclick="dltclick({{ $record->id }})"><input style="display: none"
                      type="submit" class='subval' id='{{ 'sub-' . $record->id }}' value="Delete"
                      name="delete">delete</a>
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