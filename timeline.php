<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Profile</title>
    <link rel="stylesheet" href="style_landing_page.css">
</head>
<body>
    <?php
    include 'config.php';
    session_start();
	if($_SESSION['status']!="login"){
        header("location:index.php?pesan=belum_login");
    }
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=='passwordsuccess'){
            echo '<script>
                alert("Penggantian password success");
            </script>';
        }else if($_GET['pesan']=='updatesuccess'){
            echo '<script>
                alert("Update data success");
            </script>';
        }
    }
    $id=$_SESSION['id'];
    $data=mysqli_query($config,"SELECT * FROM users WHERE id='$id'");
    $dataUser=mysqli_fetch_assoc($data);
	?>
    <div class="container">
        <div class="header">
            <img id="header-img" src="ASET-02.png" alt="logo-AJK">
            <div class="navbar">
            <a href="#comment" class="nav-link">Comment</a> 
                <a href="#photo" class="nav-link">Gallery</a>
                <a href="#matkul" class="nav-link">Mata Kuliah</a> 
                <a href="#profile" class="nav-link">Profile Lab</a>
            </div>
        </div>
        <main id="main-doc">
            <h1 style="font-size:20px;">Hallo <?=$dataUser['username']; ?></h1>
            <p><a class="select_box" style="background-color:yellow; color:black;" href='edit.php'>Edit</a>  <a class="select_box" style="margin-left:10px;background-color:red;" href="logout.php">Logout</a></p><br><br>
            <section class="main-section">
                <header id="profile"><br><br>Profile Laboratorium</header><br>
                <p class="text">
                    Sebelum kita lihat Laboratorium Arsitektur dan Jaringan Komputer, mari kita cari tahu apa itu Arsitektur dan Jaringan Komputer. Arsitektur dan Jaringan Komputer adalah salah satu bidang
                    minat di Informatika ITS yang menawarkan bidang keahlian dimana
                    akan ditekankan pada Kemampuan lulusan dalam membangun
                    berbagai macam arsitektur jaringan sesuai standar teknologi terkini
                    dan menerapkan keamanan jaringan.<br><br>
                </p>
                <p class="text">
                    Dan di Departemen Informatika Institut Teknologi Sepuluh Nopember memiliki sebuah Laboratorium yang terfokus untuk bidang minat ini. Dimana Laboratorium itu dinamakan sesuai dengan minatnya yaitu Laboratorium Arsitektur dan Jaringan Komputer. Laboratorium ini terletak di ruang IF-307 yang dimana ruang itu berada di lantai 3 Departemen Informatika ITS.<br><br>
                </p>
                <p class="text">
                    Setiap laboratorium di Departemen Informatika mempunyai seorang kepala laboratorium yang menjadi orang yang bertanggung jawab terhadap laboratorium itu. Dan di Laboratorium Arsitektur dan Jaringan Komputer ini dikepalai oleh Bapak Ir. Muchammad Husni, M.Kom. Dimana Beliau juga merupakan salah satu dosen dari mata kuliah rumpun Arsitektur dan Jaringan Komputer.<br><br>
                </p>
                <p class="text">
                    Laboratorium Arsitektur dan Jaringan Komputer memiliki sekitar 17 sampai 18 admin aktif. Ada beberapa hal unik terkait dengan Laboratorium Arsitektur dan Jaringan Komputer, diantaranya laboratorium ini selalu berusaha untuk dibuka selama 24 jam, karena ya seperti yang kita tahu banyak anak-anak Departemen Informatika yang bekerja di waktu malam. Lalu admin-admin Laboratorium Arsitektur dan Jaringan Komputer sendiri dikenal paling loyal dan erat kekeluargaannya. Hal itu memang terasa ketika melihat para admin berkumpul, mereka benar-benar terlihat seperti keluarga
                </p><br><br><br><br><br>
                <header id="matkul">
                    Mata Kuliah
                </header>
                <br>
                <p class="text">
                    Karena dasarnya memang sebuah laboratorium, maka Laboratorium Arsitektur dan Jaringan Komputer memiliki mata kuliah-mata kuliah yang dianunginya. Diantaranya :
                </p><br>
                <h2>&bull; Sistem Digital</h2>
                <p class="text">
                Mata kuliah ini menjelaskan berbagai macam sistem bilangan, menentukan fungsi Boolean dari suatu sistem digital dan melakukan penyederhanaan menggunakan beberapa metode. Mata kuliah ini juga menjelaskan fungsi dan karakteristik berbagai komponen sistem digital dan menjelaskan proses analisis dan perancangan sistem digital baik berupa rangkaian kombinasional maupun sekuensial.
                </p><br>
                <h2>&bull; Organisasi Komputer</h2>
                <p class="text">
                    Mata kuliah ini menjelaskan dasar kerja komputer dan komponen pembentuknya serta urutan untuk mengeksekusi suatu instruksi. Juga menjelaskan organisasi dan fungsi setiap komponen pembentuk computer serta menjelaskan konsep pipelining sebagai salah satu cara untuk pemrosesan secara paralel.
                </p><br>
                <h2>&bull; Sistem Operasi</h2>
                <p class="text">
                    Melalui mata kuliah ini, mahasiswa akan belajar mengenai konsep dasar-dasar sistem operasi dan mempraktekkannya. Perkuliahan dilakukan di kelas dan praktik dilakukan di kelas maupun di laboratorium. Mahasiswa akan belajar tentang konsep sistem operasi beserta manajemen dan strukturnya. Intinya bagaimana PC menjalankan perintah.
                </p><br>
                <h2>&bull; Jaringan Komputer</h2>
                <p class="text">
                    Mahasiswa belajar mengenai cara komunikasi antar komputer. Bagaimana data bisa terkirim dari satu komputer ke komputer lain berdasarkan konsep OSI Layer. Satu layer diatas sisop, basicnya sama seperti sisop, lebih banyak terjun ke jaringan.
                </p><br>
                <h2>&bull; Jaringan Nirkabel</h2>
                <p class="text">
                    Mirip Jaringan Komputer, tetapi lebih fokus ke permasalahan jaringan nirkabel.
                </p><br>
                <h2>&bull; Teknologi Antar Jaringan</h2>
                <p class="text">
                    Mirip jaringan komputer, tetapi lebih membahas subnating dan rooting.
                </p><br>
                <h2>&bull; Perancangan dan Keamanan Sistem dan Jaringan</h2>
                <p class="text">
                    Mahasiswa belajar berbagai hal lebih lanjut mengenai keamanan aplikasi, software berbahaya, analisis software berbahaya, dan keamanan jaringan
                </p><br><br><br><br>
                <header id="photo">Gallery</header>
                <br><br>
                <img src="foto-AJK/1.jpg" alt="foto-1" class="img-ajk">
                <img src="foto-AJK/2.jpg" alt="foto-2" class="img-ajk">
                <img src="foto-AJK/3.jpg" alt="foto-3" class="img-ajk">
                <img src="foto-AJK/4.jpg" alt="foto-4" class="img-ajk">
            </section>
            <header id="comment"><br><br>Comment</header><br>
            <div class="comment">
                <button class="add_button" onclick="window.location.href='http://localhost/PenugasanAJK/add_comment.php'">
                    Add
                </button>
                <div class="comment_section">
                    <?php 
                        $comment = mysqli_query($config,"SELECT * FROM comment WHERE id_user='$id' ORDER BY id DESC");
                        while($data=mysqli_fetch_array($comment)) :
                    ?>
                        <div class="the_comment">
                            <div class="button_section">
                                <a href="delete_comment.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure to delete this account?')" >
                                    <button class="edit_comment comment_button" style="margin-right:5px;">Delete</button>
                                </a>
                                <button class="delete_comment comment_button" onclick="window.location.href='http://localhost/PenugasanAJK/edit_comment.php?id='+<?=$data['id']?>" >Edit</button>
                            </div>
                            <div class="comment_val">
                                <?=$data['comment']?>
                            </div>
                        </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>