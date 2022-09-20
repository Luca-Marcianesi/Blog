<ul>
    <li><a href="{{ route('home') }}" title="Va alla Home di Sito">Home Sito</a></li>
    <li><a href="{{ route('admin') }}" title="Va alla Home di Admin">Home Admin</a></li>
    <li><a href="{{ route('gestioneStaf') }}" title="Aggiungi un membro">Gestione Staf</a></li>
    <li><a href="{{ route('statistiche') }}" title="Va alla Home del sito">Statistiche</a></li>
    
    @auth
        <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
   