<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('employees.index')}}">Employees</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
        </ul>
        <div class="controls">
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('employees.search')}}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-code" name="search" >
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <ul id="ul-code" style="position: absolute ; width: 21%" class="list-group" ></ul>
        </form>
        </div>
    </div>
</nav>
