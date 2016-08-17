<div id="login" class="container__modal modal--login">

    <div class="modal__dialog">
        <div class="modal__header">
            <h2>Masuk</h2>
        </div>
        <br>
        <div class="modal__body">

            <div class="">
                <p>Masuk dengan Facebook</p>
                <a href="{!! url('auth/redirect/facebook') !!}" class="button button__split button--facebook ">
                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                    <span class="button--text">Facebook</span>
                </a>
            </div>

            <div class="divider--horizontal divider--login">
                <span>atau</span>
            </div>

            <div class="form--login">
                <p>Masuk dengan email</p>
                <form action="{!! url('/ajax/login') !!}" class="login-form" method="post">
                    {{ csrf_field() }}
                    <div class="form__control">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form__control">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form__submit">
                        <button type="submit" class="button flush--top push--bottom button__form button--expand">Masuk</button>
                    </div>

                </form>
                <div>
                    <!-- p>Belum terdaftar? <a href="" class="toggle--modal text--red" data-target="signup">Daftar disini</a></p -->
                    <p>Belum terdaftar? <a href="{!! url('register') !!}" class="text--red">Daftar disini</a></p>
                </div>
            </div>


        </div>
        <a href="" class="toggle--close"><i class="icon icon--close"></i></a>
    </div>

</div>



<div id="signup" class="container__modal modal--signup">
    <div class="modal__dialog">

        <div class="modal__header">
            <h2>Daftar</h2>
        </div>
        <br>

        <div class="modal__body">

            <h6>Daftarkan diri kamu untuk dapat <br>berpartisipasi dalam kompetisi ini</h6>
            <br><br>
            <div class="modal--span span--signup">
                <p>Daftar dengan Facebook</p>
                <a href="" class="button button__split button--facebook flush--top button--expand">
                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                    <span class="button--text">Facebook</span>
                </a>
            </div>
            <div class="modal--span span--signup divider--vertical divider--signup">
                <span>atau</span>
            </div>
            <div class="modal--span span--signup">
                <p>Daftar dengan Email</p>
                <a href="signup.html" class="button flush--top push--bottom button__form button--expand">Masuk</a>
            </div>
            <br><br>
        </div>
        <div class="modal__footer">
            <p>Sudah terdaftar? <a href="" class="text--red">Masuk disini</a></p>
        </div>

        <a href="" class="toggle--close"><i class="icon icon--close"></i></a>
    </div>
</div>