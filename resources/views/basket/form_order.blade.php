<link href="/css/form_order.css" rel="stylesheet">
<form action="{{route('orderDone',$order->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="ordering-data">
        <h2>Дані для оформлення замовлення</h2>
        <label>
            <input type="text" name="name" placeholder="ПІБ">
        </label>
        <label>
            <input type="tel" name="phone" placeholder="Номер телефону">
        </label>
    </div>
    <div class="accordion">
{{--        <h2>Доставка</h2>--}}
        <input class="accordion__input" type="radio" id="department" name="accordion" checked>

        <div class="accordion__item" id="department-content">
            <div class="city-department">
                <label>
                    <input type="text" name="city" placeholder="Місто">
                </label>
                <label>
                    <input type="text" name="number-department" placeholder="Номер відділення">
                </label>
            </div>
        </div>
        <label for="department" id="department-button" class="accordion__button">Нова пошта (відділення)</label>

        <input class="accordion__input" type="radio" id="courier" name="accordion">
        <div class="accordion__item" id="courier-content">
            <div class="city-department">
                <label>
                    <input type="text" name="city" placeholder="Місто">
                </label>
                <label>
                    <input type="text" name="street" placeholder="Вулиця, номер будинку">
                </label>
            </div>
        </div>
        <label for="courier" id="courier-button" class="accordion__button">Нова пошта (кур'єр)</label>

    </div>
    <div class="ordering-button">
        <button type="submit">Оформити замовлення</button>
    </div>
</form>
