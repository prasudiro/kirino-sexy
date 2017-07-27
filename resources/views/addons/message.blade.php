@if (Session::has('msg_error'))
<script>
  $(document).ready(function() {
  toastr.options = {
              closeButton: true,
              progressBar: true,
              positionClass: 'toast-bottom-right',
              onclick: null
          };
  toastr.error('{!! Session::get('msg_error') !!}');
  });
</script>
@endif
