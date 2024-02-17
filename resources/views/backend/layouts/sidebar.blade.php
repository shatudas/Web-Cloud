@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

 <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

   <li class="nav-item text-white">
    <a class="nav-link">
     <p class="pl-3 m-0"><small>Dashboard</small></p>   
    </a>
   </li>

   @if(Auth::user()->user_type=='Admin')
    <li class="nav-item {{($prefix=='/user')?'menu-open':''}}">
     <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>Manage User
       <i class="fas fa-angle-left right"></i>
       <span class=""></span>
      </p>
     </a>
     <ul class="nav nav-treeview">
      <li class="nav-item">
       <a href="{{route('user.view')}}" class="nav-link {{($route=='user.view')?'active':''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>View User</p>
       </a>
      </li>
     </ul>
    </li>
   @endif


   <li class="nav-item {{($prefix=='/profiles')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Profile
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p> Profile </p>
      </a>
     </li>
     @if(Auth::user()->delete_able == true)
     <li class="nav-item">
      <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Change Password</p>
      </a>
     </li>
     @endif
    </ul>
   </li>

   <li class="nav-item text-white">
    <a class="nav-link">
     <p class="pl-3 m-0"><small>Main</small></p>
    </a>   
   </li>

   <li class="nav-item {{($prefix=='/service')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Services
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('service.view')}}" class="nav-link {{($route=='service.view')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Serveice Manage </p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item {{($prefix=='/package')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Package 
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>

    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('web_hosting.view')}}" class="nav-link {{($route=='web_hosting.view')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Web Hosting </p>
      </a>
     </li>
     
     <li class="nav-item">
      <a href="{{route('VPS.view')}}" class="nav-link {{($route=='VPS.view')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> VPS Hosting </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('dedicated_hosting.view')}}" class="nav-link {{($route=='dedicated_hosting.view')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Dedicated Hosting </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('resller_host.view')}}" class="nav-link {{($route=='resller_host.view')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Resller Hosting </p>
      </a>
     </li>

    </ul>
   </li>

   <li class="nav-item {{($prefix=='/domain')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Domain 
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('domain.category.add')}}" class="nav-link {{($route=='domain.category.add')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Donain Catagory </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('domain.pricing.add')}}" class="nav-link {{($route=='package.pricing.add')?'active':''}}" >
       <i class="far fa-circle nav-icon"></i>
       <p> Domain Priceing </p>
      </a>
     </li>
    </ul>
   </li>


   <li class="nav-item text-white p-0 ">
    <a class="nav-link">
     <p class="pl-3 py-0 m-0"><small>Look Up</small></p>
    </a>   
   </li>

   <li class="nav-item {{($prefix=='/homecover')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Home Cover
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('homecover.add')}}" class="nav-link {{($route=='homecover.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Home Cover</p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item {{($prefix=='/setting')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Web Setting  
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('genarelsetting.add')}}" class="nav-link {{($route=='genarelsetting.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p> Genarel Setting </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('service-committed.view')}}" class="nav-link {{($route=='service-committed.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Services Committed</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('about.add')}}" class="nav-link {{($route=='about.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p> About </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('vision.add')}}" class="nav-link {{($route=='vision.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p> Vision </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('mision.add')}}" class="nav-link {{($route=='mision.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p> Mision </p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('cover.setting.add')}}" class="nav-link {{($route=='cover.setting.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Cover Setting</p>
      </a>
     </li>
    
    </ul>
   </li>


   <li class="nav-item {{($prefix=='/FAQ')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>FAQ
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('FAQ.view')}}" class="nav-link {{($route=='FAQ.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>FAQ Manage</p>
      </a>
     </li>
    </ul>
   </li>


   <li class="nav-item {{($prefix=='/contact')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Contact  manage
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('contact.add')}}" class="nav-link {{($route=='contact.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Contact</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{route('user.contact.view')}}" class="nav-link {{($route=='user.contact.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Client Message</p>
      </a>
     </li>
    </ul>
   </li>
     
  </ul>
 </nav>



