<nav class="navbar navbar-expand-md navbar-dark  bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="col-6 navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-light h5 " href="/">Главная </a>
            </li>
            <li class="nav-item active ">
            <a class="nav-link text-light h5" href="{{ route('news.create') }}">Добавить<span class="sr-only">(current)
                </span></a>
            </li>
            <li class="nav-item active ">
                <a class="nav-link text-light h5 " href="#">Регистрация <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light h5" href="#">Вход <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light h5" href="#" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">Категории</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Политика</a>
                    <a class="dropdown-item" href="#">Спорт</a>
                    <a class="dropdown-item" href="#">Технологии</a>
                    <a class="dropdown-item" href="#">Музыка</a>
                    <a class="dropdown-item" href="#">Кино</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('news.index') }}">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Найти новость" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>

    </div>
</nav>
