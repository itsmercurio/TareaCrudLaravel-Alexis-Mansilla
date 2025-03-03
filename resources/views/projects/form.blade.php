<div class="space-y-4">
    <div>
        <x-input-label for="title" :value="__('messages.title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $project->title ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="estimated_hours" :value="__('messages.estimated_hours')" />
        <x-text-input id="estimated_hours" name="estimated_hours" type="number" class="mt-1 block w-full" :value="old('estimated_hours', $project->estimated_hours ?? '')" required min="1" />
        <x-input-error :messages="$errors->get('estimated_hours')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="start_date" :value="__('messages.start_date')" />
        <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full" :value="old('start_date', isset($project) ? $project->start_date->format('Y-m-d') : '')" required />
        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
    </div>
</div>
