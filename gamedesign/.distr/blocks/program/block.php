{% from './data.php' import data %}
<section class="program">
    <div class="container">
    <p class="program__title"><span>Программа курса</spa>   </p>
    <div class="program__nav">
        <div class="program__nav-item program__nav-item--active">
            <span class="program__nav-nubmer ">01</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">02</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">03</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">04</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">05</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">06</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">07</span>
            <span class="program__nav-descr">семестр </span>
        </div>
        <div class="program__nav-item">
            <span class="program__nav-nubmer">08</span>
            <span class="program__nav-descr">семестр </span>
        </div>
    </div>
        <ul class="program__list">
        {% for item in data %}
            <li class="program__item">
                <div class="program__numbers">
                <span class="program__nubmer">{{ item.number | safe }}</span>
                <span class="program__descr">{{ item.descr | safe }} </span>
                </div>
                <div class="program__item-wrapper">
                    {{ item.info | safe }}
                </div>
            </li>
            {% endfor %} 
        </ul>
        {{ form.form( form_class = 'horizontal',button='ОСТАВИТЬ ЗАЯВКУ',title='Получи прорамму на все 8 семестров') }}
    </div>
</section>
