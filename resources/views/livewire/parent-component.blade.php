<div class="space-y-4">
    <flux:button wire:click="go">Go</flux:button>

    @if(! empty($propertyName))
        <div>$propertyName is set</div>
    @endif

    <div>
        <livewire:child-component />
    </div>
</div>
