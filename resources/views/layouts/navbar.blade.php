<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel 9.X</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/apropos')}}">Apropos</a></li>
            <li><a href="{{url('/services')}}">Services</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/create')}}">Nouveau produit</a></li>
        </ul>
    </div>
</nav>