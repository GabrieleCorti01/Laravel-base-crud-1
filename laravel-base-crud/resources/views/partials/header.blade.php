
<section id="header">
    <div class="container-fluid">
        <div class="row justify-content-beetween">

            <div class="col-3">
                <h1>"logo."</h1>
            </div>

            <div class="col-9">
                <ul class="d-flex">
                    <li><a href="{{ route('comics.index') }}">Home</a></li>
                    <li><a href="{{ route('comics.index') }}">Comics</a></li>
                    <li><a class="nav-link @if(request()->routeIs('guests.create')) active @endif"  href="{{ route('comics.create') }}">Create</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>