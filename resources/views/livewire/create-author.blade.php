              <form wire:submit.prevent="submit">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" wire:model="name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="col-form-label">Primer apellido</label>
                        <input class="form-control" id="firstName" type="text" wire:model="firstName">
                        @error('firstName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="col-form-label">Segundo apellido</label>
                        <input class="form-control" id="lastName" type="text" wire:model="lastName">
                        @error('lastName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birthDate" class="col-form-label">Message:</label>
                        <input class="form-control" id="birthDate" type="number" wire:model="birthDate">
                        @error('birthDate')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
