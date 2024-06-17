@if(auth()->check() && theme('disable_admin_bar') != "true" && EnvEditor::getKey('ENABLE_ADMIN_BAR', $default = 'true') != "false")
@php
if(Auth::user()->id == $userinfo->id){
  $isUser = true;
} else {
  $isUser = false;
}
@endphp


@if(($isUser || auth()->user()->role == 'admin') && (EnvEditor::getKey('ENABLE_ADMIN_BAR_USERS', $default = 'false') != "false" || auth()->user()->role == 'admin'))
<style>#linkstack-adminbar,#linkstack-adminbar *,.rtl #linkstack-adminbar *,html:lang(he-il) .rtl #linkstack-adminbar *{font-family:"Open Sans",sans-serif,sans!important}#linkstack-adminbar,#linkstack-adminbar *{font-size:13px;font-weight:400;line-height:32px}#linkstack-adminbar *{height:auto;width:auto;margin:0;padding:0;position:static;text-shadow:none;text-transform:none;letter-spacing:normal;border-radius:0;box-sizing:content-box;transition:none;-webkit-font-smoothing:subpixel-antialiased;-moz-osx-font-smoothing:auto}#linkstack-adminbar .ab-empty-item{cursor:default;outline:0}#linkstack-adminbar .ab-empty-item,#linkstack-adminbar a.ab-item,#linkstack-adminbar>#linkstack-toolbar span.ab-label,#linkstack-adminbar>#linkstack-toolbar span.noticon{color:#eee}#linkstack-adminbar #linkstack-admin-bar-my-sites a.ab-item,#linkstack-adminbar #linkstack-admin-bar-site-name a.ab-item{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}#linkstack-adminbar ul li:after,#linkstack-adminbar ul li:before{content:normal}#linkstack-adminbar a,#linkstack-adminbar a img,#linkstack-adminbar a img:hover,#linkstack-adminbar a:hover{outline:0;border:none;text-decoration:none;background:0 0}#linkstack-adminbar a:active,#linkstack-adminbar a:focus,#linkstack-adminbar div,#linkstack-adminbar input[type=email],#linkstack-adminbar input[type=number],#linkstack-adminbar input[type=password],#linkstack-adminbar input[type=search],#linkstack-adminbar input[type=text],#linkstack-adminbar input[type=url],#linkstack-adminbar select,#linkstack-adminbar textarea{box-shadow:none;outline:0}body{margin-top:32px}#linkstack-adminbar{direction:ltr;color:#ccc;height:32px;position:fixed;top:0;left:0;width:100%;min-width:600px;z-index:99999;background:#23282d}#linkstack-adminbar .ab-sub-wrapper,#linkstack-adminbar ul,#linkstack-adminbar ul li{background:0 0;clear:none;list-style:none;margin:0;padding:0;position:relative;text-indent:0;z-index:99999}#linkstack-adminbar ul#linkstack-admin-bar-root-default>li{margin-right:0}#linkstack-adminbar .quicklinks ul{text-align:left}#linkstack-adminbar li,* html #linkstack-adminbar .quicklinks ul li a{float:left}#linkstack-adminbar .ab-top-secondary,#linkstack-adminbar .quicklinks .ab-top-secondary>li{float:right}#linkstack-adminbar .quicklinks .ab-empty-item,#linkstack-adminbar .quicklinks a,#linkstack-adminbar .shortlink-input{height:32px;display:block;padding:0 10px;margin:0}#linkstack-adminbar .quicklinks>ul>li>a{padding:0 8px 0 7px}#linkstack-adminbar .menupop .ab-sub-wrapper,#linkstack-adminbar .shortlink-input{margin:0;padding:0;box-shadow:0 3px 5px rgba(0,0,0,.2);background:#32373c;display:none;position:absolute;float:none}#linkstack-adminbar #linkstack-admin-bar-user-info .display-name,#linkstack-adminbar #linkstack-admin-bar-user-info .username,#linkstack-adminbar .selected .shortlink-input,#linkstack-adminbar li.hover>.ab-sub-wrapper,#linkstack-adminbar.nojs li:hover>.ab-sub-wrapper{display:block}#linkstack-adminbar.ie7 .menupop .ab-sub-wrapper,#linkstack-adminbar.ie7 .shortlink-input{top:32px;left:0}#linkstack-adminbar .ab-top-menu>.menupop>.ab-sub-wrapper{min-width:100%}#linkstack-adminbar .ab-top-secondary .menupop .ab-sub-wrapper{right:0;left:auto}#linkstack-adminbar .ab-submenu{padding:6px 0}#linkstack-adminbar .quicklinks .menupop ul li{float:none}#linkstack-adminbar .quicklinks .menupop ul li a strong{font-weight:600}#linkstack-adminbar .quicklinks .menupop ul li .ab-item,#linkstack-adminbar .quicklinks .menupop ul li a strong,#linkstack-adminbar .quicklinks .menupop.hover ul li .ab-item,#linkstack-adminbar .shortlink-input,#linkstack-adminbar.nojs .quicklinks .menupop:hover ul li .ab-item{line-height:26px;height:26px;white-space:nowrap;min-width:140px}#linkstack-adminbar .shortlink-input{width:200px}#linkstack-adminbar .menupop li.hover>.ab-sub-wrapper,#linkstack-adminbar .menupop li:hover>.ab-sub-wrapper{margin-left:100%;margin-top:-32px}#linkstack-adminbar .ab-top-secondary .menupop li.hover>.ab-sub-wrapper,#linkstack-adminbar .ab-top-secondary .menupop li:hover>.ab-sub-wrapper{margin-left:0;left:inherit;right:100%}#linkstack-adminbar .ab-top-menu>li.hover>.ab-item,#linkstack-adminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,#linkstack-adminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,#linkstack-adminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus{background:#32373c;color:#00b9eb}#linkstack-adminbar .quicklinks .ab-sub-wrapper .menupop.hover>a,#linkstack-adminbar .quicklinks .ab-sub-wrapper .menupop.hover>a .blavatar,#linkstack-adminbar .quicklinks .menupop .ab-sub-secondary>li .ab-item:focus a,#linkstack-adminbar .quicklinks .menupop .ab-sub-secondary>li>a:hover,#linkstack-adminbar .quicklinks .menupop ul li a:focus,#linkstack-adminbar .quicklinks .menupop ul li a:focus strong,#linkstack-adminbar .quicklinks .menupop ul li a:hover,#linkstack-adminbar .quicklinks .menupop ul li a:hover strong,#linkstack-adminbar .quicklinks .menupop.hover ul li a:focus,#linkstack-adminbar .quicklinks .menupop.hover ul li a:hover,#linkstack-adminbar .quicklinks .menupop.hover ul li div[tabindex]:focus,#linkstack-adminbar .quicklinks .menupop.hover ul li div[tabindex]:hover,#linkstack-adminbar .quicklinks li a:focus .blavatar,#linkstack-adminbar .quicklinks li a:hover .blavatar,#linkstack-adminbar li #adminbarsearch.adminbar-focused:before,#linkstack-adminbar li .ab-item:focus .ab-icon:before,#linkstack-adminbar li .ab-item:focus:before,#linkstack-adminbar li a:focus .ab-icon:before,#linkstack-adminbar li.hover .ab-icon:before,#linkstack-adminbar li.hover .ab-item:before,#linkstack-adminbar li:hover #adminbarsearch:before,#linkstack-adminbar li:hover .ab-icon:before,#linkstack-adminbar li:hover .ab-item:before,#linkstack-adminbar.mobile .quicklinks .hover .ab-icon:before,#linkstack-adminbar.mobile .quicklinks .hover .ab-item:before,#linkstack-adminbar.nojs .quicklinks .menupop:hover ul li a:focus,#linkstack-adminbar.nojs .quicklinks .menupop:hover ul li a:hover,#linkstack-adminbar:not(.mobile)>#linkstack-toolbar a:focus span.ab-label,#linkstack-adminbar:not(.mobile)>#linkstack-toolbar li:hover span.ab-label,#linkstack-adminbar>#linkstack-toolbar li.hover span.ab-label{color:#00b9eb}#linkstack-adminbar .ab-icon,#linkstack-adminbar .ab-item:before,#linkstack-adminbar>#linkstack-toolbar>#linkstack-admin-bar-root-default .ab-icon{position:relative;float:left;font:400 20px/1 dashicons;speak:none;padding:4px 0;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background-image:none!important;margin-right:6px}#linkstack-adminbar #adminbarsearch:before,#linkstack-adminbar .ab-icon:before,#linkstack-adminbar .ab-item:before{color:rgba(240,245,250,.6);position:relative;transition:.1s ease-in-out}#linkstack-adminbar .ab-label{display:inline-block;height:32px}#linkstack-adminbar .ab-submenu .ab-item,#linkstack-adminbar .quicklinks .menupop ul li a,#linkstack-adminbar .quicklinks .menupop ul li a strong,#linkstack-adminbar .quicklinks .menupop.hover ul li a,#linkstack-adminbar.nojs .quicklinks .menupop:hover ul li a{color:rgba(240,245,250,.7)}#linkstack-adminbar.mobile .quicklinks .ab-icon:before,#linkstack-adminbar.mobile .quicklinks .ab-item:before{color:#b4b9be}#linkstack-adminbar .ab-top-secondary .menupop .menupop>.ab-item:before,#linkstack-adminbar .menupop .menupop>.ab-item:before{position:absolute;font:400 17px/1 dashicons;speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#linkstack-adminbar .menupop .menupop>.ab-item{display:block;padding-right:2em}#linkstack-adminbar .menupop .menupop>.ab-item:before{top:1px;right:4px;content:"\f139";color:inherit}#linkstack-adminbar .ab-top-secondary .menupop .menupop>.ab-item{padding-left:2em;padding-right:1em}#linkstack-adminbar .ab-top-secondary .menupop .menupop>.ab-item:before{top:1px;left:6px;content:"\f141"}#linkstack-adminbar .quicklinks .menupop ul.ab-sub-secondary{display:block;position:relative;right:auto;margin:0;box-shadow:none}#linkstack-adminbar .quicklinks .menupop ul.ab-sub-secondary,#linkstack-adminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu{background:#464b50}#linkstack-adminbar .quicklinks a span#ab-updates{background:#eee;color:#32373c;display:inline;padding:2px 5px;font-size:10px;font-weight:600;border-radius:10px}#linkstack-adminbar .quicklinks a:hover span#ab-updates{background:#fff;color:#000}#linkstack-adminbar ul li:last-child,#linkstack-adminbar ul li:last-child .ab-item{box-shadow:none}#linkstack-admin-bar-my-account>ul{min-width:198px}#linkstack-admin-bar-my-account>.ab-item:before{content:"\f110";top:3px;float:right;margin-left:6px;margin-right:0}#linkstack-admin-bar-my-account.with-avatar>.ab-item:before{display:none;content:none}#linkstack-admin-bar-my-account.with-avatar>ul{min-width:270px}#linkstack-adminbar.ie8 #linkstack-admin-bar-my-account.with-avatar .ab-item{white-space:nowrap}#linkstack-adminbar #linkstack-admin-bar-user-actions>li{margin-left:16px;margin-right:16px}#linkstack-adminbar #linkstack-admin-bar-user-actions.ab-submenu{padding:6px 0 12px}#linkstack-adminbar #linkstack-admin-bar-my-account.with-avatar #linkstack-admin-bar-user-actions>li{margin-left:88px}#linkstack-adminbar #linkstack-admin-bar-user-info{margin-top:6px;margin-bottom:15px;height:auto;background:0 0}#linkstack-admin-bar-user-info .avatar{position:absolute;left:-72px;top:4px;width:64px;height:64px}#linkstack-adminbar #linkstack-admin-bar-user-info a{background:0 0;height:auto}#linkstack-adminbar #linkstack-admin-bar-user-info span{background:0 0;padding:0;height:18px}#linkstack-adminbar #linkstack-admin-bar-user-info .username{color:#a0a5aa;font-size:11px}#linkstack-adminbar #linkstack-admin-bar-my-account.with-avatar>.ab-empty-item img,#linkstack-adminbar #linkstack-admin-bar-my-account.with-avatar>a img{width:auto;height:16px;padding:0;line-height:24px;vertical-align:middle;margin:-4px 0 0 6px;float:none;display:inline}#linkstack-adminbar.ie8 #linkstack-admin-bar-my-account.with-avatar>.ab-empty-item img,#linkstack-adminbar.ie8 #linkstack-admin-bar-my-account.with-avatar>a img{width:auto}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item .ab-icon{width:15px;height:20px;margin-right:0;padding:6px 0 5px}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item{padding:0 7px}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item .ab-icon:before{content:"\f120";top:2px}#linkstack-adminbar .quicklinks li .blavatar{float:left;font:400 16px/1 dashicons!important;speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#eee}#linkstack-adminbar .quicklinks li .blavatar:before{content:"\f120";height:16px;width:16px;display:inline-block;margin:6px 8px 0 -2px}#linkstack-adminbar #linkstack-admin-bar-appearance{margin-top:-12px}#linkstack-adminbar #linkstack-admin-bar-search .ab-item{padding:0;background:0 0}#linkstack-adminbar #adminbarsearch{position:relative;height:32px;padding:0 2px;z-index:1}#linkstack-adminbar #adminbarsearch:before{position:absolute;top:6px;left:5px;z-index:20;speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#linkstack-adminbar>#linkstack-toolbar>#linkstack-admin-bar-top-secondary>#linkstack-admin-bar-search #adminbarsearch input.adminbar-input{display:inline-block;float:none;position:relative;z-index:30;font-size:13px;font-family:"Open Sans",sans-serif,sans!important;line-height:24px;text-indent:0;height:24px;width:24px;max-width:none;padding:0 3px 0 24px;margin:0;color:#ccc;background-color:rgba(255,255,255,0);border:none;outline:0;cursor:pointer;box-shadow:none;box-sizing:border-box;transition-duration:.4s;transition-property:width,background;transition-timing-function:ease}#linkstack-adminbar>#linkstack-toolbar>#linkstack-admin-bar-top-secondary>#linkstack-admin-bar-search #adminbarsearch input.adminbar-input:focus{z-index:10;color:#000;width:200px;background-color:rgba(255,255,255,.9);cursor:text;border:0}#linkstack-adminbar.ie7>#linkstack-toolbar>#linkstack-admin-bar-top-secondary>#linkstack-admin-bar-search #adminbarsearch input.adminbar-input{margin-top:3px;width:120px}#linkstack-adminbar.ie8>#linkstack-toolbar>#linkstack-admin-bar-top-secondary>#linkstack-admin-bar-search #adminbarsearch input.adminbar-input{background:url(data:image/gif; base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRâ€Œâ€‹AA7)}#linkstack-adminbar.ie8>#linkstack-toolbar>#linkstack-admin-bar-top-secondary>#linkstack-admin-bar-search #adminbarsearch input.adminbar-input:focus{background:#fff;z-index:-1}#linkstack-adminbar #adminbarsearch .adminbar-button,.customize-support #linkstack-adminbar .hide-if-customize,.customize-support .hide-if-customize,.customize-support .linkstack-core-ui .hide-if-customize,.customize-support.linkstack-core-ui .hide-if-customize,.no-customize-support #linkstack-adminbar .hide-if-no-customize,.no-customize-support .hide-if-no-customize,.no-customize-support .linkstack-core-ui .hide-if-no-customize,.no-customize-support.linkstack-core-ui .hide-if-no-customize{display:none}#linkstack-adminbar .screen-reader-text,#linkstack-adminbar .screen-reader-text span{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}#linkstack-adminbar .screen-reader-shortcut{position:absolute;top:-1000em}#linkstack-adminbar .screen-reader-shortcut:focus{left:6px;top:7px;height:auto;width:auto;display:block;font-size:14px;font-weight:600;padding:15px 23px 14px;background:#f1f1f1;color:#0073aa;z-index:100000;line-height:normal;text-decoration:none;box-shadow:0 0 2px 2px rgba(0,0,0,.6)}* html #linkstack-adminbar{overflow:hidden;position:absolute}* html #linkstack-adminbar .menupop a span{background-image:none}.no-font-face #linkstack-adminbar ul.ab-top-menu>li>a.ab-item{display:block;width:45px;text-align:center;overflow:hidden;margin:0 3px}.no-font-face #linkstack-adminbar #linkstack-admin-bar-edit>.ab-item,.no-font-face #linkstack-adminbar #linkstack-admin-bar-my-sites>.ab-item,.no-font-face #linkstack-adminbar #linkstack-admin-bar-site-name>.ab-item{text-indent:0}.no-font-face #linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item,.no-font-face #linkstack-adminbar .ab-icon,.no-font-face #linkstack-adminbar .ab-icon:before,.no-font-face #linkstack-adminbar a.ab-item:before{display:none!important}.no-font-face #linkstack-adminbar ul.ab-top-menu>li>a>span.ab-label{display:inline}.no-font-face #linkstack-adminbar #linkstack-admin-bar-menu-toggle span.ab-icon{display:inline!important}.no-font-face #linkstack-adminbar #linkstack-admin-bar-site-name a.ab-item{color:#fff}@media screen and (max-width:782px){.display-name{display:none!important}li .ab-item{padding:0 10px!important}#linkstack-adminbar ul#linkstack-admin-bar-root-default>li,.network-admin #linkstack-adminbar ul#linkstack-admin-bar-top-secondary>li#linkstack-admin-bar-my-account{margin-right:0}body{margin-top:46px}html #linkstack-adminbar{height:46px;min-width:300px}#linkstack-adminbar *{font-size:14px;font-weight:400;font-family:"Open Sans",sans-serif,sans!important;line-height:32px}#linkstack-adminbar .quicklinks .ab-empty-item,#linkstack-adminbar .quicklinks>ul>li>a{padding:0;height:46px;line-height:46px;width:auto}#linkstack-adminbar .ab-icon{font:40px/1 dashicons!important;margin:0;width:52px;height:46px;text-align:center}#linkstack-adminbar #linkstack-admin-bar-updates,#linkstack-adminbar .ab-icon:before{text-align:center}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item,#linkstack-adminbar #linkstack-admin-bar-user-actions.ab-submenu,#linkstack-adminbar .ab-submenu{padding:0}#linkstack-adminbar #linkstack-admin-bar-my-account a.ab-item,#linkstack-adminbar #linkstack-admin-bar-my-sites a.ab-item,#linkstack-adminbar #linkstack-admin-bar-site-name a.ab-item{text-overflow:clip}#linkstack-adminbar #linkstack-admin-bar-search,#linkstack-adminbar #linkstack-admin-bar-user-actions.ab-submenu img.avatar,#linkstack-adminbar .ab-label,#linkstack-adminbar .ab-top-menu>.menupop>.ab-sub-wrapper a:empty,#linkstack-adminbar .quicklinks li .blavatar:before,#linkstack-toolbar>ul>li{display:none}#linkstack-adminbar .menupop li.hover>.ab-sub-wrapper,#linkstack-adminbar .menupop li:hover>.ab-sub-wrapper{margin-top:-46px}#linkstack-adminbar #linkstack-admin-bar-comments .ab-icon,#linkstack-adminbar #linkstack-admin-bar-my-account.with-avatar #linkstack-admin-bar-user-actions>li{margin:0}#linkstack-adminbar .ab-top-menu .menupop .ab-sub-wrapper .menupop>.ab-item{padding-right:30px}#linkstack-adminbar .menupop .menupop>.ab-item:before{top:10px;right:6px}#linkstack-adminbar .ab-top-menu>.menupop>.ab-sub-wrapper .ab-item{font-size:16px;padding:8px 16px}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item .ab-icon{padding:0;width:52px;height:46px;text-align:center;vertical-align:top}#linkstack-adminbar #linkstack-admin-bar-defaultsp>.ab-item .ab-icon:before{font:28px/1 dashicons!important;top:-3px}#linkstack-adminbar #linkstack-admin-bar-customize>.ab-item,#linkstack-adminbar #linkstack-admin-bar-edit>.ab-item,#linkstack-adminbar #linkstack-admin-bar-my-account>.ab-item,#linkstack-adminbar #linkstack-admin-bar-my-sites>.ab-item,#linkstack-adminbar #linkstack-admin-bar-site-name>.ab-item{text-indent:100%;white-space:nowrap;overflow:hidden;width:52px;padding:0;color:#a0a5aa;position:relative}#linkstack-adminbar .ab-icon,#linkstack-adminbar .ab-item:before,#linkstack-adminbar>#linkstack-toolbar>#linkstack-admin-bar-root-default .ab-icon{padding:0;margin-right:0}#linkstack-adminbar #linkstack-admin-bar-customize>.ab-item:before,#linkstack-adminbar #linkstack-admin-bar-edit>.ab-item:before,#linkstack-adminbar #linkstack-admin-bar-my-account>.ab-item:before,#linkstack-adminbar #linkstack-admin-bar-my-sites>.ab-item:before,#linkstack-adminbar #linkstack-admin-bar-site-name>.ab-item:before{display:block;text-indent:0;font:400 32px/1 dashicons;speak:none;top:7px;width:52px;text-align:center;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#linkstack-adminbar #linkstack-admin-bar-appearance{margin-top:0}#linkstack-adminbar #linkstack-admin-bar-new-content .ab-icon:before{top:0;line-height:53px;height:46px!important;text-align:center;width:52px;display:block}#linkstack-adminbar #linkstack-admin-bar-updates .ab-icon:before{top:3px}#linkstack-adminbar #linkstack-admin-bar-comments .ab-icon:before{display:block;font-size:34px;height:46px;line-height:47px;top:0}#linkstack-adminbar #linkstack-admin-bar-my-account>a{position:relative;white-space:nowrap;text-indent:150%;width:28px;padding:0 10px;overflow:hidden}#linkstack-adminbar .quicklinks li#linkstack-admin-bar-my-account.with-avatar>a img{position:absolute;top:13px;right:10px;width:26px;height:26px}#linkstack-adminbar #linkstack-admin-bar-user-info .display-name{height:auto;font-size:16px;line-height:24px;color:#eee}#linkstack-adminbar #linkstack-admin-bar-user-info a{padding-top:4px}#linkstack-adminbar #linkstack-admin-bar-user-info .username{line-height:.8!important;margin-bottom:-2px}#linkstack-adminbar li#linkstack-admin-bar-comments,#linkstack-adminbar li#linkstack-admin-bar-customize,#linkstack-adminbar li#linkstack-admin-bar-defaultsp,#linkstack-adminbar li#linkstack-admin-bar-edit,#linkstack-adminbar li#linkstack-admin-bar-menu-toggle,#linkstack-adminbar li#linkstack-admin-bar-my-account,#linkstack-adminbar li#linkstack-admin-bar-my-sites,#linkstack-adminbar li#linkstack-admin-bar-new-content,#linkstack-adminbar li#linkstack-admin-bar-site-name,#linkstack-adminbar li#linkstack-admin-bar-updates{display:block}#linkstack-adminbar li.hover ul li,#linkstack-adminbar li:hover ul li,#linkstack-adminbar li:hover ul li:hover ul li{display:list-item}#linkstack-adminbar .ab-top-menu>.menupop>.ab-sub-wrapper{min-width:-webkit-fit-content;min-width:-moz-fit-content;min-width:fit-content}#linkstack-adminbar #linkstack-admin-bar-comments,#linkstack-adminbar #linkstack-admin-bar-defaultsp,#linkstack-adminbar #linkstack-admin-bar-edit,#linkstack-adminbar #linkstack-admin-bar-my-account,#linkstack-adminbar #linkstack-admin-bar-my-sites,#linkstack-adminbar #linkstack-admin-bar-new-content,#linkstack-adminbar #linkstack-admin-bar-site-name,#linkstack-adminbar #linkstack-admin-bar-updates,#linkstack-adminbar .ab-top-menu,#linkstack-adminbar .ab-top-secondary{position:static}#linkstack-adminbar #linkstack-admin-bar-my-account{float:right}#linkstack-adminbar .ab-top-secondary .menupop .menupop>.ab-item:before{top:10px;left:0}}@media screen and (max-width:600px){.display-name{display:none!important}#linkstack-adminbar{position:absolute}#linkstack-responsive-overlay{position:fixed;top:0;left:0;width:100%;height:100%;z-index:400}#linkstack-adminbar .ab-top-menu>.menupop>.ab-sub-wrapper{width:100%;left:0}#linkstack-adminbar .menupop .menupop>.ab-item:before,#linkstack-adminbar li#linkstack-admin-bar-defaultsp,#linkstack-adminbar li#linkstack-admin-bar-updates{display:none}#linkstack-adminbar #linkstack-admin-bar-defaultsp.menupop .ab-sub-wrapper{margin-left:0}#linkstack-adminbar .ab-top-menu>.menupop li>.ab-sub-wrapper{margin:0;width:100%;top:auto;left:auto;position:static;box-shadow:none}#linkstack-adminbar .ab-top-menu>.menupop li>.ab-sub-wrapper .ab-item{font-size:16px;padding:6px 15px 19px 30px}#linkstack-adminbar li:hover ul li ul li{display:list-item}}@media screen and (max-width:400px){.display-name{display:none!important}#linkstack-adminbar li#linkstack-admin-bar-comments{display:none}}</style>

<script>
  $(document).ready(function() {
    $('.menupop').click(function() {
      $(this).find('.ab-sub-wrapper').toggle();
    });
    $(document).click(function(event) {
      if (!$(event.target).closest('.menupop').length) {
        $('.ab-sub-wrapper').hide();
      }
    });
  });
</script>

<script>
  if (window.self !== window.top) {
    document.addEventListener("DOMContentLoaded", function() {
      var adminBar = document.getElementById("linkstack-adminbar");
      if (adminBar) {
        adminBar.style.display = "none";
      }
      document.body.style.marginTop = "0";
    });
  }
</script>

<div>
  <div>
     <div id="linkstack-adminbar">
        <div class="quicklinks" id="linkstack-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
           <ul id="linkstack-admin-bar-root-default" class="ab-top-menu">
            <li id="linkstack-admin-bar-new-content">
              <a class="ab-item" href="{{url('dashboard')}}">
                <svg style="top:2px;position:relative;fill:white;" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                <span class="ab-label">{{__('messages.Home')}}</span>
                <span class="screen-reader-text">{{__('messages.Home')}}</span></a>
            </li>
            <li id="linkstack-admin-bar-defaultsp">
              <a class="ab-item" href="@if($isUser){{url('/studio/links')}}@else {{ route('editUser', $userinfo->id ) }}@endif">
                <svg style="top:3px;position:relative;fill:white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
                <span class="ab-label">{{__('messages.Edit')}}</span>
                <span class="screen-reader-text">{{__('messages.Edit')}}</span></a>
            </li>
            @if($isUser)
            <li id="linkstack-admin-bar-defaultsp">
              <a class="ab-item" href="{{url('/studio/add-link')}}">
                <svg style="top:3px;position:relative;fill:white;" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                <span class="ab-label">{{__('messages.Add Link')}}</span>
                <span class="screen-reader-text">{{__('messages.Add Link')}}</span></a>
            </li>
            @endif
            @if(auth()->user()->role == 'admin')
              <li id="linkstack-admin-bar-defaultsp" class="menupop">
                 <a class="ab-item" aria-haspopup="true" href="#">
                  <svg style="top:4px;position:relative;fill:white;" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </a>
                 <div class="ab-sub-wrapper">
                    <ul id="linkstack-admin-bar-new-content-default" class="ab-submenu">
                       @if(!$isUser)
                       <li><a class="ab-item" href="{{route('deleteUser', ['id' => $userinfo->id])}}" id="confirmationLink">{{__('messages.Delete User')}}</a></li>
                       <li><a class="ab-item" href="{{route('blockUser', ['block' => 'no', 'id' => $userinfo->id])}}">{{__('messages.Block User')}}</a></li>
                       <li><a class="ab-item" href="{{ route('editUser', $userinfo->id ) }}">{{__('messages.Edit User')}}</a></li>
                       @endif
                       @if($info->theme != '' and $info->theme != 'default')<li><a class="ab-item" href="{{url('/theme').'/@'.$userinfo->littlelink_name}}">{{__('messages.Users Theme')}}</a></li>@endif
                       <li><a class="ab-item" href="{{url('admin/users')."?table[search]=".$userinfo->littlelink_name}}">{{__('messages.Search User')}}</a></li>
                       @if(!$userinfo->adminUser && !$isUser && $userinfo->block !== 'yes' && ($userinfo->email_verified_at != '' || env('REGISTER_AUTH') == 'auth'))<li><a class="ab-item"  href="{{ route('authAsID', $userinfo->id ) }}" >Impersonate</a></li>@endif
                    </ul>
                 </div>
              </li>
            @endif
            @if(!$isUser and $userinfo->role != 'admin')
            <li id="linkstack-admin-bar-defaultsp">
              @if($userinfo->role == 'vip')
              <a class="ab-item" href="{{route('verifyCheckUser', ['verify' => 'user', 'id' => $userinfo->id]);}}">
                <svg style="top:5px;position:relative;" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 350 512"><path fill="#f0301e" d="M148.318 339.734c-9.872-6.385-17.162-14.661-22.502-24.945-24.141 6.892-45.916 2.799-63.712-15.055-17.662-17.719-21.743-39.341-14.888-63.082C1.827 213.511.832 150.051 47.123 125.64c-6.813-23.82-2.936-45.607 14.941-63.466 17.733-17.715 39.283-21.87 63.403-14.97 12.205-21.609 30.238-34.318 55.597-34.289 25.157.028 43.112 12.552 55.366 34.228 24.033-6.869 45.778-2.839 63.585 15.104 17.645 17.779 21.659 39.38 14.824 63.116 45.417 23.578 46 86.753.043 111.052 6.798 23.843 2.901 45.626-14.998 63.468-17.746 17.69-39.311 21.819-63.461 14.884-9.296 17.366-23.263 28.952-42.682 33.063-15.981 3.383-31.116.675-45.424-8.094m44.037-122.589l33.372 33.511 24.901-25.162-45.585-45.032 44.783-44.014-24.731-25.203-44.89 45.258-43.587-44.332-25.288 24.678 45.226 44.8-44.559 43.814 24.977 25.155 44.405-45.082 10.977 11.61z"/><path fill="#fefdfd" d="M192.089 216.912l-10.711-11.377-44.405 45.082-24.977-25.155 44.559-43.814-45.226-44.8 25.288-24.678 43.587 44.332 44.89-45.258 24.731 25.203-44.783 44.014 45.585 45.032-24.901 25.162-33.638-33.744z"/></svg>
              </a>
              @else
              <a class="ab-item" href="{{route('verifyCheckUser', ['verify' => 'vip', 'id' => $userinfo->id]);}}">
                <svg style="top:5px;position:relative;" xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 350 512"><path fill="#1CAC78" d="M315.781 241.008c.091.153.181.305-.07.893-4.665 3.842-1.388 8.16-1.639 12.026-.577 8.9-.804 17.822-1.173 26.735-11.409 26.671-42.123 44.84-76.299 34.094-12.105 21.438-30.064 34.219-55.381 34.261-25.297.042-43.281-12.605-55.707-34.304-11.566 3.608-23.199 4.461-34.937 1.252-23.151-6.328-37.968-21.15-44.461-44.158-2.988-10.587-2.368-21.345.407-31.88.782-2.968.006-4.047-2.319-5.454-22.857-13.836-33.473-34.2-30.93-60.766 1.187-12.401 5.59-23.861 15.203-32.634L46.82 124.08c-.04-.157-.435-1.732-.536-3.907 4.172-7.605.812-14.996 1.326-22.185.043-.599-1.7-1.325-2.613-1.992.863-9.097 4.426-17.161 10.118-24.828 3.078-.394 5.489 4.931 8.22-.218.113-1.018-.109-1.986-.114-3.249l5.439-7.557c.008.017-.633-1.308-1.274-2.633 0 0 .083.054.384.09.608-.425.914-.885 1.22-1.345 17.06-12.62 35.8-14.991 56.069-9.119 3.342-4.577 6.377-9.536 10.181-13.811 20.699-23.259 55.789-27.717 80.509-9.45 8.177 6.042 14.499 14.593 22.384 22.735 22.04-5.889 43.011-2.211 61.41 15.536 18.695 18.032 19.652 39.543 15.672 63.668l3.889 2.278c31.648 18.919 39.984 61.207 17.263 90.134-4.799 6.109-11.69 10.574-18.199 15.56-2.079.42-4.662.857-4.848 1.778-.393 1.951-1.83 5.276 2.461 5.444m-86.803-116.516l-68.172 70.225-32.758-31.453c-2.706-2.662-4.39-3.254-7.183-.112-4.198 4.723-8.905 8.993-13.365 13.486l-9.373 9.608 62.678 60.889 104.155-106.212-27.15-25.74-8.833 9.309z"/><path fill="#42ef28" d="M313.103 280.406c.165-8.658.392-17.581.969-26.48.251-3.865-3.026-8.184 1.614-11.761 3.136 9.303 3.01 18.764.267 28.232l-2.849 10.009z"/><path fill="#33e919" d="M67.096 57.645c.932 1.192 1.573 2.517 1.565 2.5l-5.441 7.559c-.219.296-.222.301-.472.484-.082 1.059.085 1.935.253 2.812-2.396 5.1-4.807-.225-7.588-.003 3.545-4.415 7.47-8.817 11.684-13.352z"/><path fill="#33f017" d="M44.755 96.342c1.155.321 2.897 1.047 2.854 1.646-.514 7.188 2.847 14.58-1.31 21.796-.781-7.558-1.284-15.327-1.545-23.442M46 102.14v7.776l.722-.007V98.772c-.469 1.699-.593 2.147-.722 3.368z"/><path fill="#42ef28" d="M315.787 240.643c-4.298.197-2.861-3.128-2.468-5.079.186-.921 2.769-1.358 4.502-1.719-2.209 1.718-3.657 3.508-2.034 6.798z"/><path fill="#33e919" d="M68.738 56.302c-.054.414-.36.874-.961 1.25.04-.457.374-.83.961-1.25z"/><path fill="#fefffe" d="M229.224 124.238l8.586-9.056 27.15 25.74-104.155 106.212-62.678-60.889 9.373-9.608c4.461-4.492 9.167-8.762 13.365-13.486 2.792-3.142 4.477-2.55 7.183.112l32.758 31.453 68.418-70.479z"/><path fill="#33e919" d="M63.002 67.998c.224.966.446 1.934.333 2.952C63 71 63 71 63.001 70.625l-.004-2.62z"/><path d="M62.746 68.188c.252.566.253 1.315.254 2.437-.169-.502-.336-1.379-.254-2.437zm-16.743 33.566c.126-.835.25-1.283.719-2.982v11.137l-.722.007.002-8.162z" fill="#1CAC78"/></svg>
              </a>
              @endif
            </li>
            @endif
           </ul>
           <ul id="linkstack-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
              <li id="linkstack-admin-bar-my-account" class="menupop with-avatar">
                 <a class="ab-item" aria-haspopup="true" href="#"><span class="display-name">{{Auth::user()->name}}</span>
                  @if(file_exists(base_path(findAvatar(Auth::user()->id))))
                  <img src="{{ url(findAvatar(Auth::user()->id)) }}" class="avatar avatar-26 photo" height="26" width="26" style="object-fit:cover;">
                  @elseif(file_exists(base_path("assets/liinkmee/images/").findFile('avatar')))
                  <img src="{{ url("assets/liinkmee/images/")."/".findFile('avatar') }}" class="avatar avatar-26 photo" height="26" width="26" style="width:auto;height:30px;">
                  @else
                  <img src="{{ asset('assets/liinkmee/images/logo.svg') }}" class="avatar avatar-26 photo avatar-rounded" height="26" width="26" height="64" width="64">
                  @endif
                </a>
                 <div class="ab-sub-wrapper">
                    <ul id="linkstack-admin-bar-user-actions" class="ab-submenu">
                       <li id="linkstack-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="{{ url('/studio/page') }}">
                        @if(file_exists(base_path(findAvatar(Auth::user()->id))))
                        <img src="{{ url(findAvatar(Auth::user()->id)) }}" class="avatar avatar-64 photo" height="64" width="64" style="object-fit:cover;">
                        @elseif(file_exists(base_path("assets/liinkmee/images/").findFile('avatar')))
                        <img src="{{ url("assets/liinkmee/images/")."/".findFile('avatar') }}" class="avatar avatar-64 photo" height="64" width="64" style="width:auto;height:30px;">
                        @else
                        <img src="{{ asset('assets/liinkmee/images/logo.svg') }}" class="avatar avatar-64 photo avatar-rounded" height="64" width="64">
                        @endif
                        <span class="display-name">{{Auth::user()->name}}</span></a></li>
                       <li><a class="ab-item" href="{{ url('/studio/page') }}">{{__('messages.Edit my profile')}}</a></li>
                       <li><a class="ab-item" onclick="submitForm()" style="cursor:pointer">{{__('messages.Log out')}}</a></li>
                    </ul>
                 </div>
              </li>
           </ul>
        </div>
        <a class="screen-reader-shortcut" onclick="submitForm()" style="cursor:pointer">{{__('messages.Log out')}}</a>
     </div>
  </div>
  <script>
    function submitForm() {
        document.getElementById('logoutForm').submit();
    }
  </script>
    <script>
      function showConfirmation() {
        var isConfirmed = confirm("{{__('messages.confirm.delete.user')}}");
        if (isConfirmed) {
          window.location.href = document.getElementById("confirmationLink").getAttribute("href");
        }
      }
      document.getElementById("confirmationLink").addEventListener("click", function(event) {
        event.preventDefault();
        showConfirmation();
      });
    </script>
  <form id="logoutForm" action="{{ route('logout') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
@endif
@endif