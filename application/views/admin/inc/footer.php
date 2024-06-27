<footer class="main-footer">
  <span><strong>Copyright &copy;
      <?= date('Y') ?> <b><a target="_blank" href="https://www.marswebsolution.com/" class="text-black">Mars Web
          Solutions</a></b>
    </strong>
    All rights reserved.</span>
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.4
  </div>
</footer>
</div>
<!-- ./wrapper -->
<?
if (!empty($page_type)) {
  if ($page_type == "list") {
    $this->load->view('admin/inc/files/footer-list', $this->data);
  }
} else {
  $this->load->view('admin/inc/files/footer', $this->data);
}
?>
<script>$('.label.ui.dropdown')
    .dropdown();

  $('.no.label.ui.dropdown')
    .dropdown({
      useLabels: false
    });

  $('.ui.button').on('click', function () {
    $('.ui.dropdown')
      .dropdown('restore defaults')
  })
</script>

<script>
  $.ajaxSetup({
    headers: {
      '<?= $csrf['name'] ?>': '<?= $csrf['hash'] ?>'
    }
  });
</script>
<script src="<?= _lte_files_ ?>plugins/pace-progress/pace.min.js"></script>
<script src="<?= _lte_files_ ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="<?= _lte_files_ ?>plugins/filterizr/jquery.filterizr.min.js"></script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({
      gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function () {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>
<!-- <?
print_r($this->session->all_userdata());
?> -->

<!-- TO AVOID PAGE RESUBMISSION WHEN REFRESHED << -->
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

<!-- jQuery -->
<script src="<?= _lte_files_ ?>plugins/jquery/jquery.min.js"></script>
<!-- TO AVOID PAGE RESUBMISSION WHEN REFRESHED >> -->
</body>

</html>