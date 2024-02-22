<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
	@push('after-scripts')
	    <script>
	    		@if(session()->has('error'))
		    		Swal.fire({
					  icon: "error",
					  title: "Oops...",
					  text: "{{ session('error') ?? 'Something went wrong!' }}",
					});
				@endif
	    </script>
	@endpush    
</div>

