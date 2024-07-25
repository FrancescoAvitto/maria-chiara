<div>
    @if($emailSent)
        <div class="h2">Contatto inviato correttamente</div>
    @else
    <fieldset>
        <form class="contact-form" wire:submit.prevent="sendContactMail">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nome" wire:model="name">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Cognome" wire:model="surname">
                @error('surname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" 
                id="exampleInputEmail1" aria-describedby="emailHelp"
                 placeholder="E-mail"
                 wire:model="email">
                 @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <input type="phone" class="form-control" placeholder="Telefono" wire:model="phone">
              @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" wire:model="message">Scrivi qui il tuo messaggio...</textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="terms">
                <label class="form-check-label" for="exampleCheck1" >Accetto termini e condizioni (GDPR) - Leggi qui</label>
                @error('terms') <span class="error text-danger">{{ $message }}</span> @enderror
              </div>
            <button type="submit" class="btn submit-btn-form w-100">Invia</button>
          </form>
    </fieldset>
    @endif
</div>
