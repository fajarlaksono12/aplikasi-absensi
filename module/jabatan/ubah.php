<?php include "./inc/koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_jabatan WHERE id_jabatan='$_GET[id]'");
$r=mysqli_fetch_array($tampil);
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Form Edit Data Jabatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                                class="ti-settings text-white"></i></button>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Ui Elements</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                            <form method="post" class="form-horizontal" >
                             <input type=hidden name="id" value="<?php echo $r['id_jabatan'];?>">
                            
                                <div class="form-group">
                                    <label class="col-md-12">Nama Jabatan </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "nama" class="form-control"  value="<?php echo $r['nama_jabatan'];?>"> </div>
                                </div>
                                 <tr><td></td><td></td><td><input type="submit" name="submit" value="simpan"></td></tr> 
                            </form>
                            <?php
                            print_r(@$_POST['submit']);
                            if(@$_POST['submit']){
                            $id = $_POST['id'];
                            $nama = $_POST['nama'];
                            
                            
                                
                             $query =  mysqli_query($koneksi, "UPDATE tb_jabatan SET nama_jabatan='$nama'
															 WHERE id_jabatan='$id'");
                            if($query){
                              echo '<script>alert("Berhasil edit data."); document.location="index.php?page=jabatan";</script>';
                            }else{
                            echo "Data gagal disimpan";
                            } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- .row -->
               
                <!-- /.row -->
               
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>