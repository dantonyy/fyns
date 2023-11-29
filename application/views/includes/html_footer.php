
        <!-- ========================================== -- FOOTER -- ================================================= -->
        <footer id="footer" class="footer">

        <div class="copyright">
        <!-- &copy; Copyright <strong><span>DaviLab</span></strong>. All Rights Reserved -->
        </div>

        <div class="credits">

        </div>
        </footer>
        <!-- ================================================================================================================= -->
    </body>
<!-- Vendor JS Files -->
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url();?>application/views/paginas/assets/js/main.js"></script>

    <?php 
        // $data['usuario'] = $this->usuario_model->getUsuarioAutenticacao($this->session->userdata('id_usuario'));
        // $usuario_json = json_encode($data['usuario']);
        // echo "<script>var usuario = $usuario_json;</script>";
    ?>

    <script>

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

    </script>


</html>