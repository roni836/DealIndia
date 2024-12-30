@extends('Admin.adminBase')
@section('title', 'Dashboard')
@section('content')

    
    <div class="page-content">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="bg-white shadow rounded-lg">
                        <div class="border-b px-4 py-4 sm:px-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <h4 class="text-lg font-semibold text-gray-700">General Settings</h4>
                        </div>
                        <div class="p-4">
    
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Livewire Component -->
                                <livewire:admin.setting.meta-logo />
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
      
    
    </div>
    

   
   
    

  
@endsection
