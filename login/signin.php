<?php
    include_once './../navbar.php';
?>
    <main>
        <h1 class="h1_ text-center">Đăng ký thành viên</h1>
        <form class='form_' action="" method="GET">
            <input class="input-text" type="text" placeholder="Họ và tên" name="name">
            <input class="radio-button" type="radio" name="gender"> Nam
            <input class="radio-button" type="radio" name="gender"> Nữ
            <input class="input-date" type="date" name="birthtime">
            <input class="input-text" type="email" placeholder="Tên đăng nhập" name="email">
            <input class="input-text" type="password" placeholder="Mặt khẩu" name="password">
            <div class="text-center">
                <button class="button_" type="submit">Đăng ký</button>
            </div>
        </form>
    </main>

<?php
    include_once './../footer.php';
?>