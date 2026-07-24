<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
{{ session('user') }}

<pre>
{{ print_r(session()->all(), true) }}
</pre>

<a href="logout">Logout</a>
</div>
