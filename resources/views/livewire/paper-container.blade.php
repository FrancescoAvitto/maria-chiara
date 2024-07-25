<div>
    <div class="card p-2">
        <img src="/img/card.jpg" class="card-img-top" alt="{{$paper->name}}">
        <div class="card-body text-left">
            <h5 class="card-title">{{$paper->name}}</h5>
            <button wire:click="donwload" class="btn btn-warning">Scarica</button>
        </div>
    </div>
</div>
