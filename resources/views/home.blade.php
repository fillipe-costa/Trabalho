@extends('layouts.navfooter')

@section('content')
@endsection

@guest
 <div class="valign-wrapper row login-box white-text">
   <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 color">
     <form method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}
       <div class="card-content">
         <h4 class = "center-align"> Login </h4>
         <div class="row">
           <div class="input-field col s12">
             Email
             <input type="email" class="validate" name="email" id="email" />
           </div>
           <div class="input-field col s12">
             Senha
             <input type="password" class="validate" name="password" id="password" />
           </div>
         </div>
       </div>
       <div class="card-action center-align">
         <input type="submit" class="btn red waves-effect waves-light" value="Login" href="route('login')">
       </div>
     </form>
   </div>
 </div>

 @else

 @endguest
