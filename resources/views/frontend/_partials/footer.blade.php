<footer id="footer">
    <div class="container">
        <div id="introduce-box" class="row">
            <div class="col-sm-3">
                <div id="address-box">
                    <a href="/">
                        <img src="{{ route('image',$configs['logo']) }}">
                    </a>
                    <div id="address-list">
                        <p class="tit-name">Address:</p>
                        <p class="tit-contain">{{ $configs['address'] }}</p>
                        <p class="tit-name">Phone:</p>
                        <p class="tit-contain">{{ $configs['phone'] }}</p>
                        <p class="tit-name">Email:</p>
                        <p class="tit-contain">{{ $configs['email'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="introduce-title">Công ty</div>
                        <ul id="introduce-company" class="introduce-list">
                            <li><a href="#">Về tân phát</a></li>
                            <li><a href="#">Tiêu chí bán hàng</a></li>
                            <li><a href="#">Điều kiện và điều khoản</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">Hỗ trợ</div>
                        <ul id="introduce-support" class="introduce-list">
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Hướng dẫn thanh toán</a></li>
                            <li><a href="#">Liên hệ góp ý</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">Chính sách</div>
                        <ul id="introduce-account" class="introduce-list">
                            <li><a href="#">Tích lũy điểm</a></li>
                            <li><a href="#">Giao nhận</a></li>
                            <li><a href="#">Bảo mật thông tin</a></li>
                            <li><a href="#">Bảo hành & đổi trả</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="contact-box">
                    <div class="introduce-title">Đăng ký nhận email</div>
                    <div class="input-group" id="mail-box">
                        <input type="text" placeholder="Nhập địa chỉ email của bạn" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                        </span>
                    </div>
                    <div class="introduce-title">Mạng xã hội</div>
                    <div class="social-link">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wapper">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="footer-coppyright">
                            Copyright © 2016 TanPhat. All Rights Reserved. Designed by: Tanphat.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>