<?php
new class extends Livewire\Volt\Component {
    #[\Livewire\Attributes\Modelable]
    public $textTwo;
}
?>
<div>
    <input type="text" wire:model="textTwo" placeholder="example" />
</div>
