@extends('layouts/admin-main')
@section('head')
    <meta name="keywords" content="Add new blog, Blog">
    <meta name="description" content="">
    <title>admin_contact</title>
<link rel="stylesheet" href="{{css_path('admin_contact.css','admin')}}" media="screen">
@endsection


@section('main')
<section class="u-clearfix u-section-2" id="sec-ff2a">
  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
    <h1 class="u-align-center u-custom-font u-font-source-sans-pro u-text u-title u-text-1">contacts</h1>
  </div>
</section>

    <section class="u-clearfix u-valign-middle u-section-3" id="sec-9635">
      <div class="u-container-style u-expanded-width u-group u-white u-group-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
              <colgroup>
                <col width="4.1%">
                <col width="25%">
                <col width="22.4%">
                <col width="28.1%">
                <col width="10.7%">
                <col width="9.6%">
              </colgroup>
              <thead class="u-align-center u-black u-table-header u-table-header-1">
                <tr style="height: 26px;">
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">sr.no</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">name</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">Email</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">content</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">reply</th>
                  <th class="u-border-1 u-border-grey-dark-1 u-table-cell">DELETE</th>
                </tr>
              </thead>
              <tbody class="u-align-center u-table-body u-table-body-1">

                @foreach ($contact as $item)

                <tr style="height: 28px;">
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $item->id }} </td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $item->name }}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $item->email }}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">{{ $item->message }}</td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <a class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-white u-btn-1"
                     href="mailto:sgshinde612@gmail.com" data-page-id="286892614">reply</a>
                  </td>
                  <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                    <form action="{{ url('/admin/contacts/' . $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <a class="u-border-none u-btn u-button-style u-hover-white u-palette-2-base u-btn-2"   onclick="dltclick({{ $item->id }})"><input style="display: none"
                      type="submit" id='{{ 'sub-' . $item->id }}' value="Delete"
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