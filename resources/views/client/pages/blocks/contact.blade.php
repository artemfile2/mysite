<!-- Contact -->
@section('contact')
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Контактные данные</h2>
                <p>Номер телефона: 8(906) 480 22 44</p>
            </header>

            @if( $mess == 1 )
                <p>Ваше письмо успешно отправленно</p>
            @endif

            <form action="{{route('site.mail.sent', '#contact')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                        <div class="6u 12u$(mobile)">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <p class="errors"> {{ $errors->first('name') }} </p>
                            @endif
                        </div>
                        <div class="6u$ 12u$(mobile)">
                            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <p class="errors"> {{ $errors->first('email') }} </p>
                            @endif
                        </div>

                        <div class="12u$ 12u$(mobile)">
                            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" required>
                            @if ($errors->has('title'))
                                <p class="errors"> {{ $errors->first('title') }} </p>
                            @endif
                        </div>

                        <div class="12u$">
                            <textarea name="message" placeholder="Message" required>
                                {{ old('message') or '' }}
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