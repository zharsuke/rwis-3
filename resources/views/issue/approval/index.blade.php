@extends('admin-layout.base')

@section('content')
    @vite('resources/css/resident/app.css')
    <div class="py-12 bg-white shadow-xl rounded-t-lg mt-5 mx-5">
        <div class="max-w-7-xl mx-auto sm:px-6 lg:px-8">
            <h3 class="mb-3 text-3xl">Approval Issue</h3>
            <div class="flex w-full justify-between">
                <div class=" breadcrumbs mb-3">
                    <ul>
                        <li><a href="{{ url('issue') }}">Home</a></li>
                        <li><a href="{{ url('issue/approval') }}">Approval Issue</a></li>
                    </ul>
                </div>
            </div>
            {{-- content --}}
            @if (session('success'))
            <div role="alert" class="alert alert-info mb-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session('success') }}</span>
              </div>
            @endif
            @if (session('error'))
            <div role="alert" class="alert alert-error mb-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session('error') }}</span>
              </div>
            @endif

              {{-- tab --}}
              <div role="tablist" class="tabs tabs-lifted">
                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Pending" checked />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                  <livewire:pending-issue-table />
                </div>
              
                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Approved" />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                  <livewire:approved-issue-table />
                </div>
              
                <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Rejected" />
                <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                  <livewire:rejected-issue-table />
                </div>
              </div>


        </div>
    </div>
@endsection
