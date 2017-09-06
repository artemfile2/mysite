<!-- Contact -->
@section('contact')
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Контактные данные</h2>
                <p>Номер телефона: 8989898989
                  <br>Почта: qaz@qaz.aa</p>
            </header>

            @if( $mess == 1 )
                <p>Ваше письмо успешно отправленно</p>
            @endif

            <form action="{{route('site.mail.sent')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                        <div class="6u 12u$(mobile)">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <p class="errors"> {{ $errors->first('name') }} </p>
                            @endif
                        </div>
                        <div class="6u$ 12u$(mobile)">
                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <p class="errors"> {{ $errors->first('email') }} </p>
                            @endif
                        </div>

                        <div class="12u$">
                            <textarea name="message" placeholder="Message">
                                {{ old('message') }}
                            </textarea>
                            @if ($errors->has('message'))
                                <p class="errors"> {{ $errors->first('message') }} </p>
                            @endif
                        </div>
                        <div class="12u$">
                            <input type="submit" value="Отправить сообщение" />
                        </div>
                </div>
            </form>


        </div>
    </section>
@endsection