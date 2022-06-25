<!-- Surat Masuk -->
<?php
    session_start();
    include("../include/config.php");
    // Memeriksa Tombol Disimpan Bisa diKlik atau Tidak
    if(isset($_POST['simpan'])){
    // Mengambil Data Dari Forum
    $nomor    = $_POST ['no_srt'];
    $asal     = $_POST ['asal_srt'];
    $tanggal  = $_POST ['tgl_srt'];
    $perihal  = $_POST ['perihal'];
    $ket      = $_POST ['ket'];
    $nama_file= $_FILES['file']['name'];

        if($nama_file != ''){
            // Cek Format File
            $ext = pathinfo($nama_file, PATHINFO_EXTENSION);
            $allowed = ['pdf', '   ', '   ', '    ', '   ', '   ', '    ',  '   ']; 
                    //  'pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'gif'
        
            if (in_array($ext, $allowed)){
                // Proses Mengubah Nama File Dgn Menambahkan Id di Awal Nama File
                $sql = 'select max(id) as id from srt_klr';
                $query = mysqli_query($con, $sql);
                if (count($query) > 0)
                {
                    $data = mysqli_fetch_array($query);
                    $nama_file = ($data['id']+1) . '-' . $nama_file;
                }
                else
                    $nama_file = '1' . '-' . $nama_file;

                // Proses Memasukkan FIlE ke penyimpanan [berkas]
                $folder= "../berkas/keluar/";
                $created = @date('Y-m-d H:i:s');
                move_uploaded_file($_FILES['file']['tmp_name'],($folder . $nama_file));

                // Memasukkan Data Ke Database
                $sql = "INSERT INTO srt_klr (no_srt, asal_srt, tgl_srt, perihal, ket, file, created) VALUE ('$nomor', '$asal', '$tanggal', '$perihal', '$ket', '$nama_file','$created')";
                $query = mysqli_query($con, $sql);

                // Pengecekkan Data Tersimpan Atau Tidak
                if( $query ){
                    $_SESSION['sukses'] = "Data Berhasil Disimpan";
                    header('Location: ../k-surat.php');
                    // $sukses = "Data Berhasil Diinput";
                    
                }else{
                    header('Location: ../k-surat.php');
                    // $gagal = "Data Gagal Diinput";
                }
            }
        }
    }echo $file = "Format File Tidak Diperbolehkan";
?>

<script> alert('<?php echo $file;?>'); 
        location='../k-surat.php';
</script>