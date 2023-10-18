   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>{{ $title }}</title>

       <link rel="stylesheet"
           href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

       <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

       <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
       <link rel="stylesheet" href="{{ asset('font/css/style_admin.css') }}">
       <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
       <script nonce="31c92abf-7479-48c6-ab24-d72e222b3fcd">
           (function(w, d) {
               ! function(a, b, c, d) {
                   a[c] = a[c] || {};
                   a[c].executed = [];
                   a.zaraz = {
                       deferred: [],
                       listeners: []
                   };
                   a.zaraz.q = [];
                   a.zaraz._f = function(e) {
                       return async function() {
                           var f = Array.prototype.slice.call(arguments);
                           a.zaraz.q.push({
                               m: e,
                               a: f
                           })
                       }
                   };
                   for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                   a.zaraz.init = () => {
                       var h = b.getElementsByTagName(d)[0],
                           i = b.createElement(d),
                           j = b.getElementsByTagName("title")[0];
                       j && (a[c].t = b.getElementsByTagName("title")[0].text);
                       a[c].x = Math.random();
                       a[c].w = a.screen.width;
                       a[c].h = a.screen.height;
                       a[c].j = a.innerHeight;
                       a[c].e = a.innerWidth;
                       a[c].l = a.location.href;
                       a[c].r = b.referrer;
                       a[c].k = a.screen.colorDepth;
                       a[c].n = b.characterSet;
                       a[c].o = (new Date).getTimezoneOffset();
                       if (a.dataLayer)
                           for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                   ...o[1],
                                   ...p[1]
                               })), {}))) zaraz.set(n[0], n[1], {
                               scope: "page"
                           });
                       a[c].q = [];
                       for (; a.zaraz.q.length;) {
                           const q = a.zaraz.q.shift();
                           a[c].q.push(q)
                       }
                       i.defer = !0;
                       for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith(
                           "_zaraz_"))).forEach((s => {
                           try {
                               a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                           } catch {
                               a[c]["z_" + s.slice(7)] = r.getItem(s)
                           }
                       }));
                       i.referrerPolicy = "origin";
                       i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                       h.parentNode.insertBefore(i, h)
                   };
                   ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener(
                       "DOMContentLoaded", zaraz.init)
               }(w, d, "zarazData", "script");
           })(window, document);
       </script>
   </head>

   <body class="hold-transition sidebar-mini">
       <div class="wrapper">

           <nav class="main-header navbar navbar-expand navbar-white navbar-light">

               <ul class="navbar-nav">
                   <li class="nav-item">
                       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                               class="fas fa-bars"></i></a>
                   </li>
                   <li class="nav-item d-none d-sm-inline-block">
                       <a href="index3.html" class="nav-link">Home</a>
                   </li>
               </ul>

           </nav>


           <aside class="main-sidebar sidebar-dark-primary elevation-4">

               <a href="#" class="brand-link">
                   <img src="{{ asset('dist/img/logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3"
                       style="opacity: .8">
                   <span class="brand-text font-weight-light">Quản trị viên</span>
               </a>

               <div class="sidebar">

                   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                       <div class="image">
                           <img src="{{ asset('') }}dist/img/images.jpg" class="img-circle elevation-2"
                               alt="User Image">
                       </div>
                       <div class="info">
                           <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                       </div>
                   </div>


                   <nav class="mt-2">
                       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                           data-accordion="false">
                           <li class="nav-header">Users</li>
                           <li class="nav-item">
                               <a href="#" class="nav-link">
                                   <i class="nav-icon fas fa-copy"></i>
                                   <p>
                                       Phần người dùng
                                       <i class="fas fa-angle-left right"></i>
                                   </p>
                               </a>
                               <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                       <a href="{{ route('showListAcc') }}" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>Danh sách người dùng</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('addUsers') }}" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>Thêm người dùng mới</p>
                                       </a>
                                   </li>

                               </ul>
                           </li>
                           <li class="nav-header">Products</li>
                           <li class="nav-item">
                               <a href="#" class="nav-link">
                                   <i class="nav-icon fas fa-edit"></i>
                                   <p>
                                       Phần Sản Phẩm
                                       <i class="fas fa-angle-left right"></i>
                                   </p>
                               </a>
                               <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                       <a href="{{ route('showListProducts') }}" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>Danh Sách Sản Phẩm</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('showAddProducts') }}" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>Thêm mới sản phẩm</p>
                                       </a>
                                   </li>
                               </ul>
                           </li>
                           <li class="nav-header">News</li>
                           <li class="nav-item">
                               <a href="#" class="nav-link">
                                   <i class="nav-icon fas fa-table"></i>
                                   <p>
                                       Phần đăng tin
                                       <i class="fas fa-angle-left right"></i>
                                   </p>
                               </a>
                               <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                       <a href="pages/tables/simple.html" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>Simple Tables</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="pages/tables/data.html" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>DataTables</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="pages/tables/jsgrid.html" class="nav-link">
                                           <i class="far fa-circle nav-icon"></i>
                                           <p>jsGrid</p>
                                       </a>
                                   </li>
                               </ul>
                           </li>

                           <li class="nav-header">Logout</li>
                           <li class="nav-item">
                               <a href="{{ url('admin/logout') }}" class="nav-link">
                                   <i class="nav-icon far fa-circle text-danger"></i>
                                   <p class="text">Đăng Xuất</p>
                               </a>
                           </li>
                       </ul>
                   </nav>

               </div>

           </aside>
           @yield('body_new')
           <aside class="control-sidebar control-sidebar-dark">

           </aside>


           <footer class="main-footer">
               <strong>Page Admin &copy; <a href="{{ url('admin/logout') }}">ChoXe.vnc</a>.</strong>
               Cover_boi_DinhDucAnh.
               <div class="float-right d-none d-sm-inline-block">
               </div>
           </footer>
       </div>



       <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

       <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

       <script src="{{ asset('dist/js/adminlte.js?v=3.2.0') }}"></script>

       <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

       <script src="{{ asset('') }}dist/js/demo.js"></script>

       <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>
   </body>

   </html>
