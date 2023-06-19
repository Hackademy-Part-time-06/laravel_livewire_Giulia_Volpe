
<div class="container m-5">
    <form wire:submit.prevent="update">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control w-75" id="title" wire:model="title">
        </div>
        @error('title')
            <span class="error text-danger">Inserisci un titolo</span>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea wire:model="description" id="description" class="form-control w-75"></textarea>
        </div>
        @error('description')
            <span class="error text-danger">Inserisci una descrizione</span>
        @enderror
        <button type="submit" class="btn btn-dark">Invia</button>
    </form>
</div>
