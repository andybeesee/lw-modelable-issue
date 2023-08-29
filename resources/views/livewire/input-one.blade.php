<?php
new class extends Livewire\Volt\Component {
    #[\Livewire\Attributes\Modelable]
    public $textOne;
}
?>
<div>
    <input type="text" wire:model="textOne" placeholder="example" />
</div>
