<style>
    .error{
        padding: 30vh 0;
        text-align: center;

    }
    .error h2{
        padding: 10vh 3vw;
        border: 1px solid #dc3545;
        background: #ced4da;
        color: #dc3545;
        font-size: 30px;
    }
</style>
<div class="error container">
    <h2> {{ $slot }} </h2>
</div>
