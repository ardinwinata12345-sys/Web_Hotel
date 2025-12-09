<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">GRAND ASTON</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php?page=home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=kamar">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=fasilitas">Facilities</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?page=kontak">Contact</a></li>
                
                <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                    <a href="admin/index.php" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase" style="font-size: 11px; letter-spacing: 2px;">
                        Staff Area
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar-custom').style.background = '#1B3C53'; // Navy saat scroll
            document.querySelector('.navbar-custom').style.padding = '15px 0';
        } else {
            document.querySelector('.navbar-custom').style.background = 'linear-gradient(to bottom, rgba(0,0,0,0.8), transparent)';
            document.querySelector('.navbar-custom').style.padding = '30px 0';
        }
    });
</script>