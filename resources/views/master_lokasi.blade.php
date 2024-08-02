<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Status Asset</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            }

/* Top Navbar Styles */
.top-navbar {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed; /* Memperbaiki posisi navbar */
            top: 0;
            left: 0;
            width: 100%;
            z-index: 2;
            max-width: 100%;
            box-sizing: border-box;
        }

        .logo-container {
            display: flex; /* Atur container logo menjadi flexbox */
            align-items: center; 
        }

        .logo {
            width: 50px;
            height: 50px;
            background-image: url('https://img.freepik.com/free-vector/hand-drawn-flat-design-atheism-logo_23-2149259707.jpg?w=740&t=st=1721880730~exp=1721881330~hmac=769f1bb34ad4eb48268e88d94afeaff8b5b9fbc0f6b5b7ee6de5e54eecec337f'); /* Ganti dengan path yang benar */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .logo-text { 
            margin-left: 10px; /* Jarak antara logo dan teks */
            font-weight: bold;
            color: white;
        }

        .center-container { 
            flex: 1; 
            display: flex;
            justify-content: center; 
            margin: 0 20px; 
            max-width: 500px; 
        }

        .search-container {
            display: flex;
            margin: 0 auto;
            justify-content: center;
            width: 100%;
        }

        .search-container input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 20px 0 0 20px;
        }

        .search-container button {
            background-color: #f0f0f0;
            border: none;
            padding: 8px 12px;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .profile-container img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            margin-left: 10px;
        }

/* Dashboard Container Styles */
.dashboard-container {
    display: flex;
    margin-top: 60px;
}

/* Sidebar Styles */
.sidebar {
    width: 250px;
    background-color: #fff;
    padding: 20px;
    display: flex;
    flex-direction: column;
    height: calc(100vh - 60px); 
    position: fixed; 
    top: 60px; 
    left: 0;
    overflow-y: auto;
    z-index: 1;
    border-right: 1px solid black;
}

.sidebar ul.menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar li {
    margin-bottom: 10px;
}

.sidebar a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
    padding: 10px 15px;
    border-radius: 8px;
}

.sidebar li.active a,
.sidebar a:hover {
    background-color: #008CBA;
    color: white;
}

.sidebar i {
    margin-right: 10px;
    font-size: 1.2em;
    width: 24px;
    text-align: center;
}

.sidebar .logout-container {
    margin-top: 20px;
}

.sidebar .logout-button {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    color: #dc3545;
    font-family: inherit;
    font-size: inherit;
    text-align: left;
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: flex-start;
    width: 100%;      
    justify-content: flex-start; 
    padding: 10px 15px;
}

.sidebar li.logout {
    margin-top: auto;
    margin-bottom: 10px; 
}

/* Content Styles */
.content {
    flex-grow: 1;
    padding: 20px;
    margin-left: 20px;
}

.content-wrapper {
    flex: 1;
    overflow-y: visible;
    height: calc(100vh - 60px); 
    margin-left: 270px;
    margin-top: 60px;
    box-sizing: border-box; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.content h1 {
    margin-bottom: 20px;
}


/* Table Styles */
.table-container {
    margin-top: 80px;
    overflow-x: auto;
}

table {
    width: 80%;
    border-collapse: collapse;
    table-layout: fixed;
    margin: 0 auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    vertical-align: middle;
}

th {
    background-color: #008CBA;
    color: white;
    font-weight: bold;
}

/* Action Button Styles */
.action-buttons button {
    background: none;
    border: none;
    padding: 5px;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 5px;
}


.edit-button {
    background-color: #007bff; /* Biru untuk tombol edit */
    color: white;
}

.delete-button {
    background-color: #dc3545; /* Merah untuk tombol delete */
    color: white;
}

/* Status Styles */
.status-indicator {
    display: inline-flex;
    align-items: center;
    width: auto;
}

.status-indicator.available {
    color: green;
}

.status-indicator.not-available {
    color: red; 
}

/* Circle Indicator */
.status-indicator::before {
    content: '';
    display: inline-block;
    width: 10px; 
    height: 10px;
    border-radius: 50%;
    margin-right: 5px;
    background-color: currentColor;
}

/* Report Styles */
.report {
    font-size: 12px;
    color: #555;
}

/* Tombol Detail */
.detail-button {
    background-color: #008CBA;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.detail-button i {
    margin-left: 5px;
}th:first-child, /* Kolom pertama (Kode) */
td:first-child {
    width: 10%; /* Mengatur lebar kolom Kode */
}

th:nth-child(2), /* Kolom kedua (Lokasi) */
td:nth-child(2) {
    width: 20%; /* Mengatur lebar kolom Lokasi */
}

th:nth-child(3), /* Kolom ketiga (Jumlah Gedung) */
td:nth-child(3) {
    width: 10%; /* Mengatur lebar kolom Jumlah Gedung */
}

th:nth-child(4),
td:nth-child(4) {
    width: 20%; /* Mengatur lebar kolom Total Aset */
}

th:last-child, /* Kolom terakhir (Aksi) */
td:last-child {
    width: 40%; /* Mengatur lebar kolom Aksi */
}

.detail-button { /* Tombol Detail */
    background-color: #008CBA;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 3;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: hidden; 
  background-color: rgba(0, 0, 0, 0.4); 
}

.modal-content
 {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 15px;
  border: 1px solid #888;
  width: 350px; 
  border-radius: 10px;
  position: fixed; 
  top: -150px;
  left: 50%;
  transform: translate(-50%, 0); 
  max-width: 90%;
}

.image-container {
  text-align: center;
  margin-bottom: 15px; 
}

.image-container img {
  max-width: 100%;
  height: 150px;
  object-fit: cover;
}

.close-button {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close-button:hover,
.close-button:focus {
  color: black;
  text-decoration: none;
  cursor: pointer; 

}

.form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="top-navbar">
        <div class="logo-container">
            <div class="logo"></div>
            <span class="logo-text">Satria Asset Management</span>
        </div>
        <div class="center-container">
            <div class="search-container">
                <input type="text" placeholder="Cari kebutuhan anda...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="profile-container">
            <span>Satria Fatlan</span>
            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Clipart.png" alt="Foto Profil">
        </div>
    </div>

    <div class="dashboard-container">
        <div class="sidebar">
            <ul class="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li> 
                    <a href="{{ route('master_asset') }}">
                        <i class="fas fa-crown"></i>
                        <span>Master Asset</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('status_asset') }}">
                        <i class="fas fa-pause-circle"></i>
                        <span>Status Asset</span>
                    </a>
                </li>
                    <a href="{{ route('peminjaman_asset') }}">
                        <i class="fas fa-people-carry"></i>
                        <span>Peminjaman Asset</span>
                    </a>
                <li>
                    <li class="active">
                    <a href="{{ route('master_lokasi') }}">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Master Lokasi</span>
                    </a>
                    </li>
                </li>
            </ul>

            <div class="logout-container">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="content">
                <h1>Master Lokasi</h1>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Lokasi</th>
                                <th>Jumlah Gedung</th>
                                <th>Total Asset</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>L-001</td>
                                <td>Kebayoran Lama</td>
                                <td>2</td>
                                <td>6</td>
                                <td>
                                    <a href="#" class="detail-button">Detail <i class="fas fa-arrow-right"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>L-002</td>
                                <td>Tangerang Selatan</td>
                                <td>1</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="detail-button">Detail <i class="fas fa-arrow-right"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>L-003</td>
                                <td>Jakarta Selatan</td>
                                <td>3</td>
                                <td>9</td>
                                <td>
                                    <a href="#" class="detail-button">Detail <i class="fas fa-arrow-right"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="detailModal" class="modal">
                    <div class="modal-content">
                      <span class="close-button">&times;</span>
                      <h2>Detail Lokasi</h2>
                      <p><strong>Kode Lokasi:</strong> L-001</p>
                      <div class="form-group">
                        <select id="kategoriAsset" name="kategoriAsset" required>
                            <option value="">Pilih Gedung</option>
                            <option value="Elektronik">Gedung 1</option>
                            <option value="Furniture">Gedung 2</option>
                            <option value="Kendaraan">Gedung 3</option>
                        </select>
                    </div>
                      <img src="https://www.industriproperti.com/wp-content/uploads/2022/07/perkantoran1.jpg" alt="Gambar Gedung" style="max-width: 100%; height: auto;">
                      <p><strong>Gedung 1</strong></p>
                      <p>Jumlah Lantai: 5 Lantai</p>
                      <p>Jumlah Ruangan: 10 Ruangan</p>
                      <p>Jumlah Asset: 6 Jenis Asset</p>
                      <div class="form-group">
                        <select id="kategoriAsset" name="kategoriAsset" required>
                            <option value="">Pilih Lantai</option>
                            <option value="Elektronik">Lantai 1</option>
                            <option value="Furniture">Lantai 2</option>
                            <option value="Kendaraan">Lantai 3</option>
                        </select>
                    </div>
                    </div>
                  </div>
          
                </div> 
              </div>
            </div>
          
            <script>
              const detailButtons = document.querySelectorAll('.detail-button');
              const modal = document.getElementById('detailModal');
              const closeButton = document.querySelector('.close-button');
              const pilihLantaiBtn = document.getElementById('pilihLantaiBtn');
          
              detailButtons.forEach(button => {
                button.addEventListener('click', () => {
                  modal.style.display = 'block'; 
          
                  
                });
              });
          
              closeButton.addEventListener('click', () => {
                modal.style.display = 'none';   
          
              });
          
              window.addEventListener('click', (event) => {
                if (event.target === modal) {
                  modal.style.display = 'none';
                }
              });
            </script>
</body> 
          
</html>