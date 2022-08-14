<x-layout itemid="areaPrivate">
    <form action={{ route('login') }} method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="email"></label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password"></label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="password_confirmation"></label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit">accedi</button>
    </form>
    
</x-layout>