        <!-- Your Image Here -->
        @if(file_exists(base_path(findAvatar($userinfo->id))))
        <img alt="avatar" class="rounded-avatar fadein" src="{{ url(findAvatar($userinfo->id)) }}" height="128px" width="128px" style="object-fit: cover;">
        @elseif(file_exists(base_path("assets/liinkmee/images/").findFile('avatar')))
        <img alt="avatar" class="fadein" src="{{ url("assets/liinkmee/images/")."/".findFile('avatar') }}" height="128px" width="128px" style="object-fit: cover;">
        @else
        <img alt="avatar" class="fadein" src="{{ asset('assets/liinkmee/images/logo.svg') }}" height="128px" style="width:auto;min-width:128px;object-fit: cover;">
        @endif