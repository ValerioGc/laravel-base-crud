<li class="card">
    <div class="front-card">
        <img src="{{$comic['thumb']}}" alt="Copertina {{$comic['title']}}">
    </div>
    <div class="back-card">
        <h3>{{$comic['title']}}</h3>
        <p><em>Serie:{{$comic['series']}}</em></p>
        <p><strong>Prezzo:</strong> {{$comic['price']}}</p>
        <p><strong>Data uscita:</strong>{{$comic['sale_date']}}</p>
        <p><strong>Descrizione:</strong>{{$comic['description']}}</p>
    </div>
</li>
