@include('multi_user.nav')

<h1>Welcome dashboard user page</h1> 
<p>Hi {{ Auth::guard('web')->user()->name }}, welcome to dashbord</p>