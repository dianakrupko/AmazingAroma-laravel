<style>
    .error{
        margin: 15vh 5vw 20vh 5vw;
        text-align: center;

    }
    .error h2{
        font-weight: 400;
        padding: 10vh 0;
        border: 3px solid #D9D9D9;
        background: none;
        color: #B9AC92;
        font-size: 30px;
    }
</style>
<div class="error">
    <h2> {{ $slot }} </h2>
</div>
