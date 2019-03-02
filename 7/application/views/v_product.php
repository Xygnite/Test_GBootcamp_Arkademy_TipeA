<?php  
$this->load->view('parts/header');
$this->load->view('parts/nav');
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 	
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Products
                                
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>ID Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                	foreach ($product as $u) {
                                	?>
									<tr>
                                        <th scope="row"><?php echo $u->id; ?></th>
                                        <td><?php echo $u->name ?></td>
                                    	<td><?php echo $u->category_id ?></td>
                                    </tr>
                                	<?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
           
    </section>


<?php  
$this->load->view('parts/footer')
?>