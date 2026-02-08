<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title'))</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <style>
    body {
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Sidebar styling */
    #sidebar {
      min-width: 250px;
      max-width: 250px;
      background: #b6520a;
      color: #981919;
      transition: all 0.3s;
      min-height: 100vh;
    }

    #sidebar .nav-link {
      color: #fff;
    }

    #sidebar .nav-link:hover {
      background: rgb(44, 112, 180);
      color: #fff;
    }

    /* Sidebar collapse for mobile */
    @media (max-width: 992px) {
      #sidebar {
        margin-left: -250px;
      }
      #sidebar.active {
        margin-left: 0;
      }
    }

    /* Content area */
    #content {
      width: 100%;
      padding: 20px;
    }
  </style>
  @yield('styles')
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="btn btn-primary d-lg-none" id="sidebarCollapse">☰</button>
      <a class="navbar-brand ms-2" href="/dashboard">Next Fashion Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark d-lg-block">
      <div class="p-3">
        <h4>Menu</h4>
        <ul class="nav flex-column mt-3">
          <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
          <li class="nav-item"><a class="nav-link" href="">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Reports</a></li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <div id="content" class="flex-grow-1">
      @yield('content')
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
     <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarCollapse');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });
  </script>
</body>
</html>
