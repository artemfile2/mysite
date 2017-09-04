<!-- Contact -->
@section('contact')
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
                <p>Контактные данные
                  <br>Номер телефона: 8989898989
                  <br>Почта: qaz@qaz.aa</p>
            </header>

            <form action="{{route('site.mail.sent')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                    <div class="12u$">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="12u$">
                        <input type="submit" value="Отправить сообщение" />
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection