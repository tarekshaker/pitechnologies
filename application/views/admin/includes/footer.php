


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Admin - Developed by <a target="_blank" title="A7medMarzouk" href="http://A7medMarzouk.tk" >A7med Marzouk</a> (team leader), A7med Tolba, Mina Mourice, Omnia Fouad.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/new/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/new/build/js/custom.min.js"></script>
    <!-- Noty Jquery -->
        <script src="<?php echo base_url(); ?>assets/js/noty/jquery.noty.packaged.min.js"></script>
    <script>
        function generate(type , text) {
            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topCenter',
                theme       : 'defaultTheme',
                maxVisible  : 10
            });
            //console.log('html: ' + n.options.id);
        }
        /*generate('alert');
        generate('information');
        generate('error');
        generate('warning');
        generate('notification');
        generate('success');*/
        $(document).ready(function () {

        	<?php $notifications = array ('alert' , 'information' , 'error' , 'warning' ,'notification' , 'success');
        	foreach ($notifications as $note ) {
        		if ( $this->session->flashdata ('notification_'.$note)){?>
        		generate('<?php echo $note;?>' , "<?php echo $this->session->flashdata ('notification_'.$note);?>" );
        	<?php }}?>

        });
        </script>
  </body>
</html>
