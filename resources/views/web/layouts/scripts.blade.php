<!-- latest jquery-->
<script src="{{asset('web/assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('web/assets/js/slick.js')}}"></script>



<!-- tool tip js -->
<script src="{{asset('web/assets/js/tippy-popper.min.js')}}"></script>
<script src="{{asset('web/assets/js/tippy-bundle.iife.min.js')}}"></script>

<!-- popper js-->
<script src="{{asset('web/assets/js/popper.min.js')}}"></script>

<!-- ajax search js -->
<script src="{{asset('web/assets/js/typeahead.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/js/typeahead.jquery.min.js')}}"></script>
<script src="{{asset('web/assets/js/ajax-custom.js')}}"></script>

<!-- Timer js-->
<script src="{{asset('web/assets/js/menu.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('web/assets/js/bootstrap.js')}}"></script>

<!-- father icon -->
<script src="{{asset('web/assets/js/feather.min.js')}}"></script>
<script src="{{asset('web/assets/js/feather-icon.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('web/assets/js/bootstrap-notify.min.js')}}"></script>
<!-- range sldier -->
<script src="{{asset('web/assets/js/ion.rangeSlider.js')}}"></script>
<script src="{{asset('web/assets/js/rangeslidermain.js')}}"></script>
<!-- Theme js-->
<script src="{{asset('web/assets/js/script.js')}}"></script>
<script src="{{asset('web/assets/js/timer1.js')}}"></script>
<script src="{{asset('web/assets/js/timer2.js')}}"></script>
<script src="{{asset('web/assets/js/modal.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"debug": false,
  	"positionClass": "toast-bottom-right",
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<script type="text/javascript">
  $(document).on('click','.update-cart',function(){
    var cart_id = $(this).data("cart_id");
    var qty = $(this).closest(".addit-box").find('.qty').val();
    $.ajax({
      type: 'post',
      dataType : 'json',
      url: "{{route('update_cart')}}",        
      data: {cart_id, cart_id , qty, qty , _token: '{{csrf_token()}}'},
      success: function (response) {
          if (response.status == 1) {
              toastr.success(response.message);
              location.reload()
          }else{
              toastr.error(response.message);    
          }
      }
    });
  })
  $(document).on('click','.update-cart-detail',function(){
    var cart_id = $(this).data("cart_id");
    var qty = $(this).closest("tr").find('.qty').val();
    $.ajax({
      type: 'post',
      dataType : 'json',
      url: "{{route('update_cart')}}",        
      data: {cart_id, cart_id , qty, qty , _token: '{{csrf_token()}}'},
      success: function (response) {
          if (response.status == 1) {
              toastr.success(response.message);
              location.reload()
          }else{
              toastr.error(response.message);    
          }
      }
    });
  })
  $(document).on('click','.delete-cart',function(){
    var cart_id = $(this).data("cart_id");
    var element = $(this);
    $.ajax({
      type: 'get',
      dataType : 'json',
      url: "{{route('delete_cart')}}",        
      data: {cart_id, cart_id },
      success: function (response) {
          if (response.status == 1) {
              toastr.success(response.message);
              element.closest('li').remove();
              location.reload()
          }else{
              toastr.error(response.message);    
          }
      }
    });
  })
  // delete_cart
</script>