@extends('user.userBase')
@section('title', 'Login Work')
@section('content')
@if (session('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Success!',
                                text: "{{ session('success') }}",
                                icon: 'success',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#3085d6',
                            });
                        });
                    </script>
                @endif
                @if ($errors->any())
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Whoops! Something went wrong.',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#d33', 
                            });
                        });
                    </script>
                @endif

  <livewire:login/>
 
  @endsection
