<!DOCTYPE html>
@include('layouts.lang')
<head>
   @include('liinkmee.modules.meta')
   @include('liinkmee.modules.theme')
   @stack('liinkmee-head')
   @include('liinkmee.modules.assets')
   @foreach($information as $info)
   @stack('liinkmee-head-end')
</head>
<body>
   @stack('liinkmee-body-start')
   @include('liinkmee.modules.admin-bar')
   @include('liinkmee.modules.share-button')
   @include('liinkmee.modules.report-icon')
   <div class="container">
      <div class="row">
         <div class="column" style="margin-top: 5%">
            @include('liinkmee.elements.avatar')
            @include('liinkmee.elements.heading')
            @include('liinkmee.elements.bio')
            @include('liinkmee.elements.icons')
            @endforeach
            @include('liinkmee.elements.buttons')
            @include('liinkmee.modules.footer')
         </div>
      </div>
   </div>
   @stack('liinkmee-body-end')
</body>
</html>