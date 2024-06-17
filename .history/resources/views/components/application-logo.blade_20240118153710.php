@if(file_exists(base_path("/assets/liinkmee/images/avatar.png" )))
    <img class="mb-5" src="{{ asset('/assets/liinkmee/images/avatar.png') }}"  style="width: 150px;">
@else
    <img class="mb-5" src="{{ asset('/assets/liinkmee/images/avatar@2x.png') }}">
@endif
