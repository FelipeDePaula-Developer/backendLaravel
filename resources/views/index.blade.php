@extends('layouts.master')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<body>
    <header>
        <div class="home-page">
            <nav id="navbar_top">

                @include('layouts.navbars.navbar-nav')
                @include('layouts.navbars.navbar-class')

            </nav>
            <div class="vertical-center">
                <span class="title-home">
                    Photogramers
                </span>
            </div>
        </div>
    </header>
    <main>
        <div class="masonry-wrapper">
            <div class="masonry">
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/325?image=100" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/450?image=200" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/280?image=300" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/540?image=400" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/380?image=500" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/300?image=600" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/400?image=700" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/300?image=800" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/280?image=900" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/480?image=925" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/550?image=950" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/600?image=1000" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/325?image=25" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/450?image=50" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/280?image=75" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/540?image=100" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/380?image=125" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/300?image=161" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/400?image=175" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/300?image=200" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/280?image=225" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/480?image=250" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/550?image=275" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/600?image=300" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/325?image=13" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/450?image=26" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/280?image=39" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/540?image=52" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/380?image=65" alt="Dummy Image" class="masonry-content">
                </div>
                <div class="masonry-item">
                    <img src="https://picsum.photos/450/300?image=78" alt="Dummy Image" class="masonry-content">
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>
