<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <h3 class="h5 mb-3">{{ __('Project Management') }}</h3>
                    <p class="text-muted mb-4">{{ __('Welcome to your project management dashboard. Here you can manage all your projects.') }}</p>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">
                        {{ __('View All Projects') }}
                    </a>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card bg-primary bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2">{{ __('Total Projects') }}</h4>
                                <p class="h3 mb-0">{{ auth()->user()->projects()->count() }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2">{{ __('Total Hours') }}</h4>
                                <p class="h3 mb-0">{{ auth()->user()->projects()->sum('estimated_hours') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info bg-opacity-10 border-0">
                            <div class="card-body">
                                <h4 class="h6 mb-2">{{ __('Recent Projects') }}</h4>
                                <p class="h3 mb-0">{{ auth()->user()->projects()->where('created_at', '>=', now()->subDays(7))->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
