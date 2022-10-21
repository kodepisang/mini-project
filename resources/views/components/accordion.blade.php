<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne"
                aria-expanded="{{ Request::segment(1) == 'home' ? true : false }}"
                aria-controls="panelsStayOpen-collapseOne">
                Home
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne"
            class="accordion-collapse collapse {{ Request::segment(1) == 'home' ? 'show' : '' }}"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body p-0 m-0 ms-2 pb-1">
                <div class="list-group list-group-flush">
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        View data</a>
                    <a href="{{ url('/') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        Menu 2
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo"
                aria-expanded="{{ Request::segment(1) == 'barang' ? true : false }}"
                aria-controls="panelsStayOpen-collapseTwo">
                Barang
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo"
            class="accordion-collapse collapse {{ Request::segment(1) == 'barang' ? 'show' : '' }}"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <a href="{{ route('barang') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        Data Barang</a>
                    <a href="{{ url('/') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        Tambah data
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree"
                aria-expanded="{{ Request::segment(1) == 'users' ? true : false }}"
                aria-controls="panelsStayOpen-collapseThree">
                Users Management
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree"
            class="accordion-collapse collapse {{ Request::segment(1) == 'users' ? 'show' : '' }}"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body p-0 m-0 ms-2 pb-1">
                <div class="list-group list-group-flush">
                    <a href="{{ route('userManagment') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        Data Users</a>
                    <a href="{{ url('/') }}" class="list-group-item list-group-item-action border-0"><i
                            class="bi bi-chevron-right"></i>
                        Tambah data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
