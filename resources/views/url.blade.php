<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->


    <h1>URL</h1>

    <h3>Current URL: {{url()->current()}}</h3>
    {{ URL::current() }}

    <h3> Full URL: {{ url()->full() }}</h3>

    <h4> Previous URL: {{ url()->previous() }}</h4>


    <a href="{{URL::to('home',['anil','mohit'])}}">Home</a>
</div>
